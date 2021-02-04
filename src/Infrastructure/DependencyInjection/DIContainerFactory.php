<?php
namespace Infrastructure\DependencyInjection;

use \DI\ContainerBuilder;
use \Psr\Container\ContainerInterface;
use Infrastructure\Persistence\Repository\{
    ProductRepository
};
use Domain\RepositoryInterface\{
    ProductRepositoryInterface
};

class DIContainerFactory
{
    private ContainerBuilder $builder;

    public function createDIContainer(): ContainerInterface
    {
        $this->builder = new ContainerBuilder();

        $this->withDisplayErrorDetailsTrue();
        $this->defineInterfaceImplementation(ProductRepositoryInterface::class, ProductRepository::class);

        return $this->builder->build();
    }

    private function withDisplayErrorDetailsTrue()
    {
        $this->builder->addDefinitions([
            'settings' => [
                'displayErrorDetails' => true,
            ],
        ]);
    }

    private function defineInterfaceImplementation(string $interface, string $implementation)
    {
        $this->builder->addDefinitions([
            ProductRepositoryInterface::class => \DI\create(ProductRepository::class),
        ]);
    }
}
