<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PasanganMigrate extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'tbl_id_pasangan' => [
                'type'           => 'INT',
                // 'constraint'     => 5,
                // 'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tbl_nama_pasangan' => [
                'type'       => 'TEXT',
                // 'constraint' => '100',
            ],
            'tbl_umur_pasangan' => [
                'type' => 'INT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('tbl_id_pasangan', true);
        $this->forge->createTable('pasangan');
    }

    public function down()
    {
        // $this->forge->addColumn('pasangan', 'tbl_deskripsi_pasangan');
        $this->forge->dropTable('pasangan');
    }
}
