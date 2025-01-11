<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Back\PostController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Front\HomepagesController;
use App\Http\Controllers\Back\BlogController as BackBlogController;
use App\Http\Controllers\Front\LandingPendaftaranController;
use App\Http\Controllers\Front\PageController;

// Front
Route::get('/', [HomepagesController::class, 'index']);
Route::get('/berita', [BlogController::class, 'index']);
Route::get('/berita/{slug}', [BlogController::class, 'show']);
Route::get('/hal/{slug}', [PageController::class, 'detail'])->name('page.detail');
Route::get('/pendaftaran', [LandingPendaftaranController::class, 'index']);

// Back
Route::middleware(['auth', 'verified', 'blocked'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Blog Route
    Route::resource('blogs', BackBlogController::class)->names([
        'index' => 'blogs.index',
        'create' => 'blogs.create',
        'store' => 'blogs.store',
        'edit' => 'blogs.edit',
        'update' => 'blogs.update',
        'destroy' => 'blogs.destroy',
    ]);
    Route::get('/blogs/{blog}/delete', [BackBlogController::class, 'delete'])->name('blogs.delete');

    //Post Route
    Route::resource('posts', PostController::class)->names([
        'index' => 'posts.index',
        'create' => 'posts.create',
        'store' => 'posts.store',
        'edit' => 'posts.edit',
        'update' => 'posts.update',
        'destroy' => 'posts.destroy',
    ])->middleware('role_or_permission:admin-posts');
    Route::get('/posts/{post}/delete', [PostController::class, 'delete'])->name('posts.delete')->middleware('role_or_permission:admin-posts');

    //Pendaftaran Route


    //Users Route
    Route::resource('users', UserController::class)->names([
        'index' => 'users.index',
        'create' => 'users.create',
        'store' => 'users.store',
        'edit' => 'users.edit',
        'update' => 'users.update',
        'destroy' => 'users.destroy',
    ]);
    Route::get('/users/{user}/delete', [UserController::class, 'delete'])->name('users.delete');

    //Blokir user
    Route::get('/users/{user}/toggle-block', [UserController::class, 'toggleBlock'])->name('users.toggle-block')->middleware('role_or_permission:admin-users');
});

require __DIR__ . '/auth.php';
