<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TestMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'tbl_id_barang' => [
                'type'           => 'INT',
                // 'constraint'     => 5,
                // 'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tbl_nama_barang' => [
                'type'       => 'TEXT',
                // 'constraint' => '100',
            ],
            'tbl_deskripsi_barang' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('tbl_id_barang', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        // $this->forge->dropColumn('barang', 'tbl_deskripsi_barang');

        $this->forge->dropTable('barang');
    }
}
