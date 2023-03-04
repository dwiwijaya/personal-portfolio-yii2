<?php

use app\models\Certificate;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Certificates';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="certificate-index">

    <div class="row mt-3">
        <div class="col">
            <h2 class="title-content"><?= Html::encode($this->title) ?></h2>
        </div>
        <div class="col">
            <p class="float-right">
                <?= Html::a('<i class="fa fa-plus"></i>&nbsp;Certificate', ['/certificate/create'], ['class' => 'btn trans fw-300 text-upper create-btn btn-success', 'style' => 'float:right;']) ?>
            </p>
        </div>
    </div>
    
    <hr>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'date',
            'img',
            'order',
            [
                'class' => 'app\helpers\ButtonActionColumn',
                'contentOptions' => ['class' => 'text-center', 'style' => 'min-width:200px !important;vertical-align:middle'],
                'urlCreator' => function ($action, Certificate $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->idcertificate]);
                }
            ],
        ],
    ]); ?>


</div>