<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "certificate".
 *
 * @property string $name
 * @property string|null $date
 * @property string|null $img
 */
class Certificate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'certificates';
    }

    /**
     * {@inheritdoc}
     */
    var $file;
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'date', 'img'], 'string'],
            [['order'],'number'],
            [['name'], 'unique'],
            [['file'],'file','skipOnEmpty' => true, 'extensions' => 'png, svg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'date' => 'Date',
            'img' => 'Img',
        ];
    }
}
