<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Gate::define('isAdmin', function($user)
        {
            return $user->role == "admin";
        });

        Gate::define('isManajer', function($user)
        {
            return $user->role == "manajer";
        });

        Gate::define('isUser', function($user)
        {
            return $user->role == 'user';
        });

        Schema::defaultStringLength(191);
    }
}
