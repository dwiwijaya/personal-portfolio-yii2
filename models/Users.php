<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string|null $iduser
 * @property string|null $name
 * @property string|null $username
 * @property string|null $password
 * @property string|null $authkey
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iduser', 'name', 'username', 'password', 'authkey'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iduser' => 'Iduser',
            'name' => 'Name',
            'username' => 'Username',
            'password' => 'Password',
            'authkey' => 'Authkey',
        ];
    }
}
