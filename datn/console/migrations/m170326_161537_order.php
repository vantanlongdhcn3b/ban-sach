<?php

use yii\db\Migration;

class m170326_161537_order extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%order}}', [
            'order_id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'total' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(null),
            'date_create' =>$this->datetime()->notNull(),
            'payment_id' =>$this->integer()->notNull(),
            'transport_id'=>$this->integer()->notNull(),
            'description'=>$this->string(),

            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%order}}');

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
