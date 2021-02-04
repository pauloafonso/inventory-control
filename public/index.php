<?php declare(strict_types=1);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;
use Infrastructure\Http\Routes;

require './vendor/autoload.php';

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions([
        'settings' => [
            'displayErrorDetails' => true,
        ],
    ]);

$container = $builder->build();

AppFactory::setContainer($container);
$app = AppFactory::create();

Routes::create($app);

$app->run();
