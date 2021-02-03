<?php
namespace App\Infrastructure\Http;

use \Slim\App;

class Routes
{
    private static App $app;

    public static function create(App $app)
    {
        self::$app = $app;

        self::createProductRoutes();
    }

    private static function createProductRoutes()
    {
        self::$app->post('/product/', Controllers\SaveProductController::class);
    }
}
