<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSale extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('sales', ['id' => false, 'primary_key' => ['sale_id']]);
        $table
            ->addColumn('sale_id', 'integer', ['limit' => 20, "signed" => false])
            ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
