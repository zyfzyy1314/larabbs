<?php

namespace App\Providers;
use App\Topic;
use App\Observers\TopicObserver;
use App\Reply;
use App\Observers\ReplyObserver;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Topic::observe(TopicObserver::class);
        Reply::observe(ReplyObserver::class);
    }
}
