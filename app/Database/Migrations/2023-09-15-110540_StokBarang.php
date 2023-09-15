<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StokBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_stok' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'jumlah_stok' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_stok', true);
        $this->forge->createTable('stok');
    }

    public function down()
    {
        $this->forge->dropTable('stok');
    }
}
