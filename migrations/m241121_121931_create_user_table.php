<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m241121_121931_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(255)->notNull(),
            'birth_date' => $this->date(),
            'mobile_phone' => $this->string(15),
            'email' => $this->string(50)->notNull()->unique(),
            'username' => $this->string(50)->notNull()->unique(),
            'password' => $this->string(255)->notNull(),
            'photo' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
