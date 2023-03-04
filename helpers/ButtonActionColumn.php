<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\helpers;

use Yii;
use yii\grid\ActionColumn;
use yii\helpers\Html;


class ButtonActionColumn extends ActionColumn
{

    protected function initDefaultButtons()
    {
        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'View'),
                    'aria-label' => Yii::t('yii', 'View'),
                    'data-pjax' => '0',
                    'class' => 'btn btn-xss btn-primary btn-sm',
                    'style' => 'margin: 2px;'
                ], $this->buttonOptions);
                return Html::a('<i class="fa fa-search"></i>', $url, $options);
            };
        }
        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Update'),
                    'aria-label' => Yii::t('yii', 'Update'),
                    'data-pjax' => '0',
                    'class' => 'btn btn-xss btn-warning btn-sm',
                    'style' => 'margin: 2px;'
                ], $this->buttonOptions);
                return Html::a('<i class="fa fa-pen"></i>', $url, $options);
            };
        }
        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Delete'),
                    'aria-label' => Yii::t('yii', 'Delete'),
                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                    'class' => 'btn btn-xss btn-danger btn-sm',
                    'style' => 'margin: 2px;'
                ], $this->buttonOptions);
                return Html::a('<i class="fa fa-trash"></i>', $url, $options);
            };
        }
    }
}
