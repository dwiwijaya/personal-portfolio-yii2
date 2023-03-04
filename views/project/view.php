<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Project $model */
$this->title = $model->name;
// $this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<style>
    img {
        width: 100% !important;
    }
</style>
<div class="project-view">

    <div class="row">
        <div class="col">
            <h1 class="title-content"><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col">
            <p class="float-right">
               <?= Html::a('Update', ['update', 'id' => $model->idproject], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->idproject], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
        </div>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'detail',
            'architecture',
            'order',
            [
                'attribute' => 'color',
                'value' => function ($m) {
                    return $m->color ? "<span style='background-color:$m->color ;' class='badge text-white p-2'>$m->color</span>" : '-';
                },
                'format' => 'html'
            ]

        ],
    ]) ?>
    <hr>
    <?= DetailView::widget([
        'model' => $modeldet,
        'attributes' => [
            'date',
            'background',
            [
                'attribute' => 'description',
                'format' => 'html'
            ],

        ],
    ]) ?>
    <?php if ($modeldet->img != null) : ?>
        <img src="<?= Yii::$app->request->getBaseUrl() . '/img/project/' . $modeldet->img; ?>" alt="<?= $model->name; ?>" srcset="">


    <?php endif ?>

</div>