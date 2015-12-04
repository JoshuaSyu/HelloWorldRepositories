<?php
namespace Joshua\HelloWorld\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        // dd('test');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'HelloWorld');

        // 會複製檔案到 app/database 底下，若有相同檔案存在則不會動作
        $this->publishes([
            __DIR__ . '/../../database' => base_path('/database'),
        ], 'database');
    }

    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
