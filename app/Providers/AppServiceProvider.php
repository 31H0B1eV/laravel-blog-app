<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.sidebar', function($view) {
            $view->with('archives', \App\Post::archives());
            $view->with('tags', \App\Tag::has('posts')->pluck('name')); // get only tags which have associated posts
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
