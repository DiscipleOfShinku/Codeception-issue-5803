<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%admin}}`.
 */
class m191203_091438_create_admin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%admin}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->unique()->notNull(),
            'password' => $this->string()->notNull(),
            'auth_key' => $this->string()->unique()->notNull(),
        ]);

        $this->insert('{{%admin}}', [
            'id' => 1,
            'username' => 'test',
            'password' => 'test',
            'auth_key' => 'test',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%admin}}');
    }
}

