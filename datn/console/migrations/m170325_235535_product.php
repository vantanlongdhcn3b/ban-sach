<?php

use yii\db\Migration;

class m170325_235535_product extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%product}}', [
            'product_id' => $this->primaryKey(),
            'product_name' => $this->string()->notNull()->unique(),
            'cat_id' => $this->integer()->notNull(),
            'author_id' => $this->integer()->notNull(),
            'translator_id' => $this->integer()->notNull(),
            'supplier_id' => $this->integer()->notNull(),
            'publisher_id' => $this->integer()->notNull(),
            'price_in' => $this->integer()->notNull(),
            'price_out' => $this->integer()->notNull(),
            'sale' => $this->float()->notNull(),
            'qty' => $this->integer()->notNull(),
            'status' => $this->string()->defaultValue('mới'),
            'republish' => $this->integer(),
            'qty_page' => $this->integer(),
            'weight' => $this->float(),
            'width' => $this->float(),
            'height' => $this->float(),
            'barcode' => $this->bigInteger(),
            'image' => $this->string(),
            'made_in' => $this->string(),
            'language' => $this->string(),

            'description' => $this->text(),
            'date_release' =>$this->string(),
            'metakeyword' => $this->string(),
            'metadescription' => $this->string(),

            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%product}}');

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
