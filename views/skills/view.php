<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Skill $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Skills', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skill-view">

    <div class="row">
        <div class="col">
            <h1 class="title-content"><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col">
            <p class="float-right">
               <?= Html::a('Update', ['update', 'id' => $model->idskill], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->idskill], [
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
            'order',
            [
                'attribute' => 'svg',
                'value' => function ($model) {
                    if (!$model->svg == null) {
                        return Html::img(Yii::$app->request->getBaseUrl().'/img/skills/' . $model->svg, ['width' => '100', 'height' => '100']);
                    } else {
                        return  '-';
                    }
                },
                'format' => 'html',
            ],
        ],
    ]) ?>

</div>