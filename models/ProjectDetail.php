<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_detail".
 *
 * @property int $iddetail
 * @property string|null $idproject
 * @property string|null $title
 * @property string|null $description
 * @property string|null $background
 * @property string|null $img
 */
class ProjectDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_detail';
    }

    /**
     * {@inheritdoc}
     */
    var $filedet;
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['idproject'], 'string'],
            [['background', 'img','date'], 'string', 'max' => 100],
            [['filedet'],'file','skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iddetail' => 'Iddetail',
            'idproject' => 'Idproject',
            'title' => 'Title',
            'description' => 'Description',
            'background' => 'Background',
            'img' => 'Img',
        ];
    }
}
