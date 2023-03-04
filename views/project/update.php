<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Project $model */

$this->title = 'Update Project: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'name' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-update">
    <div class="card card-body">
        <?= $this->render('_form', [
            'model' => $model,
            'modeldet' => $modeldet,
            'urlfrom' => $urlfrom,
            ]) ?>
    </div>

</div>