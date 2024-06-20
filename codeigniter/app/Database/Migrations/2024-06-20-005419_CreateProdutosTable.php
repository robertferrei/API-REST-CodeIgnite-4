<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' =>5,
                'unsigned' => true,
                'auto_increment' => true,

            ],
            'produto' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'valor' => [
                'type' => 'DOUBLE',
                
            ]

        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('produtos');
        //
    }
    public function down()
    {
     $this->forge->dropTable('produtos');
        //
    }
}
