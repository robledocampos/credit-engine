<?php

use Phinx\Migration\AbstractMigration;

final class CustomersTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('customers', [
            'id' => false,
            'primary_key' => ['id'],
        ]);

        $table
            ->addColumn('id', 'string', [
                'limit' => 36,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('age', 'integer', [
                'signed' => false,
                'null' => false,
            ])
            ->addColumn('score', 'integer', [
                'signed' => false,
                'null' => false
            ])
            ->addColumn('has_market_debt', 'boolean', [
                'default' => false,
                'null' => false,
            ])
            ->addColumn('credit_card', 'boolean', [
                'default' => false,
                'null' => false,
            ])
            ->addColumn('personal_loan', 'boolean', [
                'default' => false,
                'null' => false,
            ])
            ->addColumn('mortgage', 'boolean', [
                'default' => false,
                'null' => false,
            ])
            ->addColumn('credit_default', 'boolean', [
                'default' => false,
                'null' => false,
            ])
            ->addColumn('loan_default', 'boolean', [
                'default' => false,
                'null' => false,
            ])
            ->addColumn('location_city', 'string', [
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('location_state', 'enum', [
                'values' => ['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO',
                    'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI',
                    'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'
                ],
                'null' => false,
            ])
            ->addColumn('location_region', 'enum', [
                'values' => ['Norte', 'Nordeste', 'Centro-Oeste', 'Sudeste', 'Sul'],
                'null' => false,
            ])
            ->addColumn('job_title', 'string', [
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => null,
                'update' => 'CURRENT_TIMESTAMP',
                'null' => true,
            ])
            ->addIndex(['id'], ['unique' => true])
            ->addIndex(['score'])
            ->addIndex(['location_state'])
            ->addIndex(['has_market_debt'])
            ->create();
    }
}
