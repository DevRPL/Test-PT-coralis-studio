<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
       $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => '191',
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'email'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '191',
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '191',
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '191',
            ],
            'photo'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '191',
            ],
            'created_at' => [
                'type'           => 'timestamp',
                'null'            => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
