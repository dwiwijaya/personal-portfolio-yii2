<?php

use app\models\Social;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Socials';
?>
<div class="social-index">

    <div class="row mt-3">
        <div class="col">
            <h2 class="text-upper fw-300"><?= Html::encode($this->title) ?></h2>
        </div>
        <div class="col">
            <p class="float-right">
                <?= Html::a('<i class="fa fa-plus"></i> Social', ['/social/create'], ['class' => 'btn trans fw-300 text-upper create-btn btn-success', 'style' => 'float:right;']) ?>
            </p>
        </div>
    </div>

    <hr>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'icon',
            [
                'class' => 'app\helpers\ButtonActionColumn',
                'contentOptions' => ['class' => 'text-center', 'style' => 'min-width:175px;vertical-align:middle'],
                'urlCreator' => function ($action, Social $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'name' => $model->name]);
                }
            ],
        ],
    ]); ?>


</div>