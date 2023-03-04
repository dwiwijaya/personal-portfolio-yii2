<?php

use app\helpers\Utils;
use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Project $model */
$this->title = $model['name'];
$slug = Inflector::slug('ss');
\yii\web\YiiAsset::register($this);
?>
<style>
    p{
        font-weight: 300;
    }
</style>
<div class="project-view">
    <div class="row header-detail p-3 b-10" style="background-color: <?= $model['color']; ?>">
        <div class="col">
            <h1 style="text-transform:uppercase ;letter-spacing: 2px; font-weight: 100;" class=" text-white"><?= $model['name']; ?></h1> 
            <!-- <hr class="m-0 bg-white"> -->
            <p class="mt-2 mb-0 text-white"><?= $model['detail']; ?></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
        <?= Html::img( Utils::baseUploadproject($model['img']), ['style' => 'width:100%', ]);; ?>

        </div>
        <div class="col">
            <a href="btn btn-lg"><li class="fab fa-github"></li></a>
            <p class="mb-2"><?= $model['background']; ?></p>
            <p class="m-0"><strong>Year :</strong></p>
            <?= $model['date']; ?>
            <hr>
            <?= Html::decode($model['description']); ?>
        </div>
    </div>
</div>