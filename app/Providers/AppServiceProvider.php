<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\User;
use App\Policies\BlogPolicy;
use App\Policies\UserPolicy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Gate::policy(Blog::class, BlogPolicy::class);
        Gate::policy(User::class, UserPolicy::class);
    }
}
