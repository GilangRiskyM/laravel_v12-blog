<?php

namespace App\Http\Controllers\Back;

use DOMDocument;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\BlogEditRequest;
use App\Http\Requests\BlogStoreRequest;

class BlogController extends Controller
{
    private function generateSlug($title, $id = null)
    {
        $slug = Str::slug($title);
        $count = Blog::where('slug', $slug)->when($id, function ($query, $id) {
            return $query->where('id', '!=', $id);
        })->count();

        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }

        return $slug;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $cari = $request->cari;
        if ($user->can('admin-blogs')) {
            $data = Blog::where(function ($query) use ($cari) {
                if ($cari) {
                    $query->where('title', 'like', '%' . $cari . '%')
                        ->orWhere('content', 'like', '%' . $cari . '%');
                }
            })
                ->orderBy('id', 'desc')
                ->paginate(5)
                ->withQueryString();
        } else {
            $data = Blog::where('user_id', $user->id)
                ->where(function ($query) use ($cari) {
                    if ($cari) {
                        $query->where('title', 'like', '%' . $cari . '%')
                            ->orWhere('content', 'like', '%' . $cari . '%');
                    }
                })
                ->orderBy('id', 'desc')
                ->paginate(5)
                ->withQueryString();
        }

        return view('back.blog.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogStoreRequest $request)
    {
        $request->validated();

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $image_name = time() . '_' . $image->getClientOriginalName();
            $destination_path = public_path('thumbnails');
            $image->move($destination_path, $image_name);
        }

        $content = $request->content;

        $dom = new DOMDocument();
        $dom->loadHTML($content, 9);
        $contentImages = $dom->getElementsByTagName('img');

        foreach ($contentImages as $key => $value) {
            $data = base64_decode(explode(',', explode(';', $value->getAttribute('src'))[1])[1]);
            $contentImageName = "/upload/" . time() . $key . '.png';
            file_put_contents(public_path() . $contentImageName, $data);

            $value->removeAttribute('src'); // remove src attribute
            $value->setAttribute('src', $contentImageName);
        }

        $content = $dom->saveHTML();

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'content' => $content,
            'status' => $request->status,
            'thumbnail' => isset($image_name) ? $image_name : null,
            'slug' => $this->generateSlug($request->title), // generate slug
            'user_id' => Auth::user()->id
        ];

        Blog::create($data);
        sweetalert()->success('Data berhasil disimpan!');
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        Gate::authorize('edit', $blog);
        $data = Blog::findOrFail($blog->id);
        return view('back.blog.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogEditRequest $request, Blog $blog)
    {
        $request->validated();

        if ($request->hasFile('thumbnail')) {
            if (isset($blog->thumbnail) && file_exists(public_path('thumbnails') . '/' . $blog->thumbnail)) {
                unlink(public_path('thumbnails') . '/' . $blog->thumbnail);
            }
            $image = $request->file('thumbnail');
            $image_name = time() . '_' . $image->getClientOriginalName();
            $destination_path = public_path('thumbnails');
            $image->move($destination_path, $image_name);
        }

        $content = $request->content;

        $dom = new DOMDocument();
        $dom->loadHTML($content, 9);
        $contentImages = $dom->getElementsByTagName('img');

        foreach ($contentImages as $key => $value) {
            if (strpos($value->getAttribute('src'), 'data:image/') === 0) {

                $data = base64_decode(explode(',', explode(';', $value->getAttribute('src'))[1])[1]);
                $contentImageName = "/upload/" . time() . $key . '.png';
                file_put_contents(public_path() . $contentImageName, $data);

                $value->removeAttribute('src'); // remove src attribute
                $value->setAttribute('src', $contentImageName);
            }
        }

        $content = $dom->saveHTML();

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'content' => $content,
            'status' => $request->status,
            'thumbnail' => isset($image_name) ? $image_name : $blog->thumbnail,
            'slug' => $this->generateSlug($request->title, $blog->id), // generate slug

        ];

        Blog::findOrFail($blog->id)->update($data);
        sweetalert()->success('Data berhasil diupdate!');
        return redirect()->route('blogs.index');
    }

    function delete(Blog $blog)
    {
        Gate::authorize('delete', $blog);
        $data = Blog::findOrFail($blog->id);
        return view('back.blog.delete', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Gate::authorize('delete', $blog);


        $table = Blog::findOrFail($blog->id);

        $dom = new DOMDocument();
        $dom->loadHTML($table->content, 9);
        $images = $dom->getElementsByTagName('img');
        $links = $dom->getElementsByTagName('a');

        foreach ($images as $key => $img) {

            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/');

            if (File::exists($path)) {
                File::delete($path);
            }
        }

        foreach ($links as $key => $link) {

            $href = $link->getAttribute('href');
            $path = Str::of($href)->after('/');

            if (File::exists($path)) {
                File::delete($path);
            }
        }

        if (isset($blog->thumbnail) && file_exists(public_path('thumbnails') . '/' . $blog->thumbnail)) {
            unlink(public_path('thumbnails') . '/' . $blog->thumbnail);
        }

        $table->delete();
        sweetalert()->success('Data berhasil dihapus!');
        return redirect()->route('blogs.index');
    }
}
