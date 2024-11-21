<?php

use yii\db\Migration;

/**
 * Class m241121_122543_add_test_users
 */
class m241121_122543_add_test_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('user',
            ['full_name', 'birth_date', 'mobile_phone', 'email', 'username', 'password', 'photo'],
            [
                ['John Doe', '1990-05-15', '+1234567890', 'john.doe@example.com', 'johndoe', Yii::$app->security->generatePasswordHash('password123'), 'images/john_doe.jpg'],
                ['Jane Smith', '1985-11-20', '+1987654321', 'jane.smith@example.com', 'janesmith', Yii::$app->security->generatePasswordHash('password456'), 'images/jane_smith.jpg'],
                ['Alice Johnson', '2000-01-10', '+1444555666', 'alice.johnson@example.com', 'alicejohnson', Yii::$app->security->generatePasswordHash('password789'), 'images/alice_johnson.jpg'],
                ['Bob Brown', '1995-07-25', '+1555666777' ,'bob.brown@example.com', 'bobbrown', Yii::$app->security->generatePasswordHash('hashed_password4'),'images/bob_brown.jpg'],
                ['Charlie Lee', '1998-03-30', '+1222333444', 'charlie.lee@example.com', 'charlielee', Yii::$app->security->generatePasswordHash('hashed_password5'), 'images/charlie_lee.jpg']
]


        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        {
            $this->delete('user', ['username' => 'johndoe']);
            $this->delete('user', ['username' => 'janesmith']);
            $this->delete('user', ['username' => 'alicejohnson']);
            $this->delete('user', ['username' => 'bobbrown']);
            $this->delete('user', ['username' => 'charlielee']);


        }
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241121_122543_add_test_users cannot be reverted.\n";

        return false;
    }
    */
}
