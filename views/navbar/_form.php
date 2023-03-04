<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Navbar $model */
/** @var yii\widgets\ActiveForm $form */
$type = [
    '0' => 'Guest',
    '1' => 'Admin'
]
?>

<div class="navbar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'url')->textInput() ?>
    
    <?= $form->field($model, 'order')->textInput() ?>
    <?= $form->field($model, 'icon')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList($type, ['prompt' => 'Choose one . . .']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>