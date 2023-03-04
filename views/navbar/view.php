<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Navbar $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Navbars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="navbar-view">
    <div class="row">
        <div class="col">
            <h1 class="title-content"><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col">
            <p class="float-right">
               <?= Html::a('Update', ['update', 'id' => $model->idnav], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->idnav], [
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
            'order',
            'name',
            'url:url',
            [
                'attribute' => 'type',
                'value' => function ($m) {
                    if ($m->type == 1) {
                        return 'Admin';
                    } else {
                        return 'Guest';
                    }
                }
            ]
        ],
    ]) ?>

</div>