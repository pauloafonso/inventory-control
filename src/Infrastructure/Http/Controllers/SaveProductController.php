<?php
namespace Infrastructure\Http\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Infrastructure\Mappers\SaveProductMapper;
use Domain\RepositoryInterface\ProductRepositoryInterface;

class SaveProductController implements ControllerInterface
{
    public function __construct(private ProductRepositoryInterface $productRepository)
    { }

    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $parsedBody = $request->getParsedBody();

        $this->productRepository->save(SaveProductMapper::fromRequestToDomain($parsedBody));

        return $response;
    }
}
