<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/** @var yii\web\View $this */
/** @var app\models\Skill $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skill-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <div class="row">
        <div class="col-2">
            <?= $form->field($model, 'order')->textInput() ?>
        </div>
        <div class="col">
            <?= $form->field($model, 'name')->textInput() ?>
        </div>

    </div>

    <?php
    $form->field($model, 'file[]')->widget(FileInput::class,[
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