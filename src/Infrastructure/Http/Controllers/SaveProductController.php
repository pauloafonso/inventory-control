<?php
namespace App\Infrastructure\Http\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Application\SaveProduct;

class SaveProductController implements ControllerInterface
{
    public function __construct(private SaveProduct $saveProduct)
    { }

    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $params = $request->getQueryParams();

        $this->saveProduct->save($params['product_description'], $params['product_identification_code']);

        return $response;
    }
}
