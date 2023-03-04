<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Certificate $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Certificates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<style>img{
    width: 100%;
}</style>
<div class="certificate-view">

    <div class="row">
        <div class="col">
            <h1 class="title-content"><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col">
            <p class="float-right">
               <?= Html::a('Update', ['update', 'id' => $model->idcertificate], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->idcertificate], [
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
            'date',
            'img',
            'order',
        ],
    ]) ?>

    <?php if ($model->img != null) : ?>
        <img src="<?= Yii::$app->request->getBaseUrl() . '/img/certificates/' . $model->img; ?>" alt="<?= $model->name; ?>" srcset="">
    <?php endif ?>

</div>