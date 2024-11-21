<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $full_name
 * @property string|null $birth_date
 * @property string|null $mobile_phone
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string|null $photo
 */

//Модель отображающая структуру и правила полей таблицы
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'email', 'username', 'password'], 'required'],
            [['birth_date'], 'safe'],
            [['full_name', 'password', 'photo'], 'string', 'max' => 255],
            [['mobile_phone'], 'string', 'max' => 15],
            [['email', 'username'], 'string', 'max' => 50],
            [['email'], 'unique'],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'birth_date' => 'Birth Date',
            'mobile_phone' => 'Mobile Phone',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'photo' => 'Photo',
        ];
    }
}
