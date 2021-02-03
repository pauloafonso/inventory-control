<?php
namespace App\Infrastructure\Http\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

interface ControllerInterface
{
    public function __invoke(Request $request, Response $response, array $args): Response;
}
