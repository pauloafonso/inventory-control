<?php
namespace App\Test;
use PHPUnit\Framework\TestCase;

class ModelTest extends TestCase
{
    public function testModel()
    {
        $model = new \App\Persistence\Models\Product();
        $model->qualifyColumn("asdf");
        $this->assertTrue(true);
    }
}
