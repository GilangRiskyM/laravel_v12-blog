<?php

namespace App\Http\Controllers\Back;

use DOMDocument;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    private function generateSlug($title, $id = null)
    {
        $slug = Str::slug($title);
        $count = Post::where('slug', $slug)->when($id, function ($query, $id) {
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
        if ($user->can('admin-posts')) {
            $data = Post::where(function ($query) use ($cari) {
                if ($cari) {
                    $query->where('title', 'like', '%' . $cari . '%')
                        ->orWhere('content', 'like', '%' . $cari . '%');
                }
            })
                ->orderBy('id', 'desc')
                ->paginate(5)
                ->withQueryString();
        } else {
            $data = Post::where('user_id', $user->id)
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

        return view('back.page.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpg,jpeg,png|max:20480',
        ], [
            'title.required' => 'Judul wajib diisi!',
            'content.required' => 'Konten wajib diisi!',
            'thumbnail.image' => 'Thumbnail harus berupa gambar!',
            'thumbnail.mimes' => 'Ekstensi yang diperbolehkan hanya untuk format jpeg, jpg, dan png!',
            'thumbnail.max' => 'Ukuran gambar tidak boleh melebihi 20MB',
        ]);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $image_name = time() . '_' . $image->getClientOriginalName();
            $destination_path = public_path('post_thumbnails');
            $image->move($destination_path, $image_name);
        }

        $content = $request->content;

        $dom = new DOMDocument();
        $dom->loadHTML($content, 9);
        $contentImages = $dom->getElementsByTagName('img');

        foreach ($contentImages as $key => $value) {
            $data = base64_decode(explode(',', explode(';', $value->getAttribute('src'))[1])[1]);
            $contentImageName = "/post_upload/" . time() . $key . '.png';
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

        Post::create($data);
        sweetalert()->success('Data berhasil disimpan!');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $data = Post::findOrFail($post->id);
        return view('back.page.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpg,jpeg,png|max:20480',
        ], [
            'title.required' => 'Judul wajib diisi!',
            'content.required' => 'Konten wajib diisi!',
            'thumbnail.image' => 'Thumbnail harus berupa gambar!',
            'thumbnail.mimes' => 'Ekstensi yang diperbolehkan hanya untuk format jpeg, jpg, dan png!',
            'thumbnail.max' => 'Ukuran gambar tidak boleh melebihi 20MB',
        ]);

        if ($request->hasFile('thumbnail')) {
            if (isset($post->thumbnail) && file_exists(public_path('post_thumbnails') . '/' . $post->thumbnail)) {
                unlink(public_path('post_thumbnails') . '/' . $post->thumbnail);
            }
            $image = $request->file('thumbnail');
            $image_name = time() . '_' . $image->getClientOriginalName();
            $destination_path = public_path('post_thumbnails');
            $image->move($destination_path, $image_name);
        }

        $content = $request->content;

        $dom = new DOMDocument();
        $dom->loadHTML($content, 9);
        $contentImages = $dom->getElementsByTagName('img');

        foreach ($contentImages as $key => $value) {
            if (strpos($value->getAttribute('src'), 'data:image/') === 0) {

                $data = base64_decode(explode(',', explode(';', $value->getAttribute('src'))[1])[1]);
                $contentImageName = "/post_upload/" . time() . $key . '.png';
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
            'thumbnail' => isset($image_name) ? $image_name : $post->thumbnail,
            'slug' => $this->generateSlug($request->title, $post->id), // generate slug

        ];

        Post::findOrFail($post->id)->update($data);
        sweetalert()->success('Data berhasil diupdate!');
        return redirect()->route('posts.index');
    }

    function delete(Post $post)
    {
        $data = Post::findOrFail($post->id);
        return view('back.page.delete', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $table = Post::findOrFail($post->id);

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

        if (isset($post->thumbnail) && file_exists(public_path('post_thumbnails') . '/' . $post->thumbnail)) {
            unlink(public_path('post_thumbnails') . '/' . $post->thumbnail);
        }

        $table->delete();
        sweetalert()->success('Data berhasil dihapus!');
        return redirect()->route('posts.index');
    }
}
