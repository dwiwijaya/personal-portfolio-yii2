<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "social".
 *
 * @property string $name
 * @property string|null $icon
 */
class Social extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'socials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'icon'], 'string'],
            [['order'],'number'],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'icon' => 'Icon',
        ];
    }
}
