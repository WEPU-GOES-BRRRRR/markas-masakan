<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RecipeComments extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'recipe_id' => [
                'type' => 'int',
            ],
            'comment_id' => [
                'type' => 'int',
            ],
        ]);
        $this->forge->addForeignKey('recipe_id', 'recipes', 'id', '', '', 'recipe_id_fk');
        $this->forge->addForeignKey('comment_id', 'comments', 'id', '', '', 'comment_id_fk');
        $this->forge->createTable('recipe_comments');
    }

    public function down()
    {
        $this->forge->dropForeignKey('recipe_comments', 'recipe_id_fk');
        $this->forge->dropForeignKey('recipe_comments', 'comment_id_fk');
        $this->forge->dropTable('recipe_comments');
    }
}
