<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSaleProduct extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('sales_products', ['id' => false, 'primary_key' => ['sale_product_id']]);
        $table
            ->addColumn('sale_product_id', 'integer', ['limit' => 20, "signed" => false])
            ->addColumn('sale_id', 'integer', ['limit' => 20, "signed" => false])
            ->addColumn('product_id', 'integer', ['limit' => 20, "signed" => false])
            ->addColumn('price', 'float')
            ->addColumn('quantity', 'float')
            ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addForeignKey('sale_id', 'sales', 'sale_id', ['delete'=> 'RESTRICT', 'update'=> 'RESTRICT'])
            ->addForeignKey('product_id', 'products', 'product_id', ['delete'=> 'RESTRICT', 'update'=> 'RESTRICT'])
            ->create();
    }
}
