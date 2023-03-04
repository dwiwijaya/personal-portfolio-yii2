<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Navbar $model */

$this->title = 'Create Navbar';
$this->params['breadcrumbs'][] = ['label' => 'Navbars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="navbar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
