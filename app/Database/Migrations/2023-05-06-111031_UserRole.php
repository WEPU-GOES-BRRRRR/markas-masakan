<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserRole extends Migration
{
    public function up()
    {
        $this->forge->addForeignKey('role_id', 'roles', 'id', '', '', 'role_id_fk');
        $this->forge->processIndexes('users');
    }

    public function down()
    {
        $this->forge->dropForeignKey('users', 'role_id_fk');
    }
}
