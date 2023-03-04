<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Navbar $model */

$this->title = 'Update Navbar: ' . $model->name;

?>
<div class="navbar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
