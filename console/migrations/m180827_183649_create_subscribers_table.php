<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subscribers`.
 */
class m180827_183649_create_subscribers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subscribers', [
            'id'    => $this->primaryKey(),
            'email' => $this->string(),
            'status'=> $this->integer(3),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('subscribers');
    }
}
