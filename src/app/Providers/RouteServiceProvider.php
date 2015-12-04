<?php
namespace Joshua\HelloWorld\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    protected $namespace = 'Joshua\HelloWorld\Http\Controllers';

    public function boot(Router $router)
    {
        //
        // $router->model('news', \Joshua\HelloWorld\News::class);
        parent::boot($router);
    }

    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require __DIR__ . '/../Http/routes.php';
        });
    }
}
