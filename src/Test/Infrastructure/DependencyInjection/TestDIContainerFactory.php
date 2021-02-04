<?php
namespace Test\Infrastructure\DependencyInjection;

use PHPUnit\Framework\TestCase;
use \Psr\Container\ContainerInterface;
use Infrastructure\DependencyInjection\DIContainerFactory;

class TestDIContainerFactory extends TestCase
{
    /**
     * @test
    */
    public function shouldCreateContainerInstanceWhenUsingThisFactory()
    {
        $container = (new DIContainerFactory())->createDIContainer();
        $this->assertInstanceOf(ContainerInterface::class, $container);
    }
}
