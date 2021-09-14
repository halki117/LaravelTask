<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // 現在ログイン中のユーザー情報を $current_user に格納、全てのviewで使える
        View::composer('*', function($view) {
            $current_user = [];
            $current_user['id'] = session('id');
            $current_user['name'] = session('name');
            $current_user['email'] = session('email');
            $view->with('current_user', $current_user);
        });
    }
}
