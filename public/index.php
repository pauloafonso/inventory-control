<?php declare(strict_types=1);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;
use Infrastructure\Http\Routes;
use Infrastructure\DependencyInjection\DIContainerFactory;

require './vendor/autoload.php';

$dIContanierFactory = new DIContainerFactory();

AppFactory::setContainer($dIContanierFactory->createDIContainer());
$app = AppFactory::create();

Routes::create($app);

$app->run();
