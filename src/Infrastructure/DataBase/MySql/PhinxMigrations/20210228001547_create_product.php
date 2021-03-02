<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateProduct extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('products', ['id' => false, 'primary_key' => ['product_id']]);
        $table
            ->addColumn('product_id', 'integer', ['limit' => 20, "signed" => false])
            ->addColumn('description', 'string')
            ->addColumn('identification_code', 'string')
            ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->create();
    }
}
