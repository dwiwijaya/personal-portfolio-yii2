<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "project".
 *
 * @property string $name
 * @property string|null $img
 * @property string|null $detail
 * @property string|null $language
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * {@inheritdoc}
     */
    var $file;
    var $arch;
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['arch'] ,'safe'],
            [['name', 'detail', 'architecture','color'], 'string'],
            [['order'],'number'],
            [['name'], 'unique'],
            [['file'],'file','skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'img' => 'Img',
            'detail' => 'Detail',
            'language' => 'Language',
        ];
    }

    public static function getDetail($id){
        $query = (new Query())
        ->select(['p.*','d.*'])
        ->from(['p' => Project::tableName()])
        ->innerJoin(['d' => ProjectDetail::tableName()],'p.idproject=d.idproject')
        ->where(['p.idproject' => $id])
        ->one();
        return $query;
    }
    
}
