<?php

use yii\db\Migration;

class m170325_212827_supplier extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%supplier}}', [
            'supplier_id' => $this->primaryKey(),
            'supplier_name' => $this->string()->notNull(),
            'email' => $this->string()->unique(),
            'mobile' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%supplier}}');

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
