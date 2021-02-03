<?php
namespace App\Infrastructure\Http;

use \Slim\App;

class Routes
{
    public static function create(App $app)
    {
        $app->get('/product/{id}', Controllers\ProductController::class.":get");
    }
}
