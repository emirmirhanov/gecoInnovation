<?php

use yii\db\Migration;

/**
 * Handles the creation of table `orders`.
 */
class m180923_090748_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'client_id' => $this->integer(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orders}}');
    }
}
