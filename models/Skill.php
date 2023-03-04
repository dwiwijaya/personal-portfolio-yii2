<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skills".
 *
 * @property string $name
 * @property string|null $svg
 */
class Skill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skills';
    }

    /**
     * {@inheritdoc}
     */
    var $file;
    
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'svg'], 'string'],
            [['name'], 'unique'],
            [['order'],'number'],
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
            'svg' => 'SVG',
        ];
    }
}
