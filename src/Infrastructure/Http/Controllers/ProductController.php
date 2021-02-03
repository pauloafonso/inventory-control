<?php
namespace App\Infrastructure\Http\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Application\SaveProduct;

class ProductController
{
    private SaveProduct $saveProduct;

    public function __construct(SaveProduct $saveProduct)
    {
        $this->saveProduct = $saveProduct;
    }

    public function get(Request $request, Response $response, array $args)
    {
        $params = $request->getParams();
        die(var_dump($params));
        $this->saveProduct();

        return $response;
    }
}
