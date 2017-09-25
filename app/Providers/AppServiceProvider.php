<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Auth\LoginController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //把数据共享给所有视图
        View::share('root','张三');
        //$this ->app->make('Login')->getName();
    }

    /**
     * Register any application services.//register 方法中，您应该只能将事务绑定到 服务容器
     *
     * @return void
     */
    public function register()
    {
        $this ->app->bind('Login',function($app){
            return new LoginController();
        });
    }
}
