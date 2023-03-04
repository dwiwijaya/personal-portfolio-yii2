<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property string $gretting
 * @property string $focused
 * @property string $about
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gretting', 'focused', 'about'], 'required'],
            [['about'], 'string'],
            [['gretting'], 'string', 'max' => 20],
            [['focused'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gretting' => 'Gretting',
            'focused' => 'Focused',
            'about' => 'About',
        ];
    }
}
