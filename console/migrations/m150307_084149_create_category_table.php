<?php

use yii\db\Schema;
use yii\db\Migration;

class m150307_084149_create_column_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%column}}', [
            'id' => Schema::TYPE_PK,
            'parentid' => Schema::TYPE_INTEGER . ' NOT NULL',
            'cname' => Schema::TYPE_STRING . '(32) NOT NULL',
            'isChild' => Schema::TYPE_SMALLINT . '(5) NOT NULL',
            'isShow' => Schema::TYPE_SMALLINT . '(5) NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',

            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%column}}');
    }


}
