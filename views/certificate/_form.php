<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/** @var yii\web\View $this */
/** @var app\models\Certificate $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="certificate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>
    <div class="row">
        <div class="col">
            <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Date ...'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'startView' => 'year',
                    'minViewMode' => 'months',
                    'format' => 'yyyy-mm'
                ]
            ]); ?>
        </div>
        <div class="col">
            <?= $form->field($model, 'order')->textInput(); ?>
        </div>
    </div>
    <?php
    $form->field($model, 'file[]')->widget(FileInput::class, [
        'name' => 'file',
        'pluginOptions' => [
            'showPreview' => false,
            'showCaption' => true,
            'showRemove' => true,
            'showUpload' => false
        ]
    ]);
    ?>
    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>