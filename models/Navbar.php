<?php

namespace app\models;

use Yii;
use yii\bootstrap4\Html;

/**
 * This is the model class for table "navbar".
 *
 * @property string $name
 * @property string|null $url
 */
class Navbar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'navbars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','type',], 'required'],
            [['name', 'url','order','icon'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'url' => 'URL',
        ];
    }
    public static function getMenu($menu){
        foreach ($menu as $m) {
            $item[] = ['label' => $m['name'], 'url' => $m['url']];
        }
        return $item;
    }

    public static function getFooterMenu($menu){
        foreach($menu as $m){
            $item = Html::a($m['name'],$m['url']);
        }
        // echo '<pre>';print_r($item);die;
        return $item;
    }
}
