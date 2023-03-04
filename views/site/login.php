<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Sign-in';
?>
<style>
    @media screen and(min-width:767px) {
        img{
            width: 50%;
        }
    }
</style>
<div class="sign-in container">
    <div class="center-y">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img class="mx-auto center-y d-block" style="width:100%" src="<?= Yii::$app->request->getBaseUrl(); ?>/img/freelancer.png" alt="">
            </div>
            <div class="col">
                <div class="center-y">

                    <h1><?= Html::encode($this->title) ?></h1>
        
                    <p>Please fill out the following fields to login:</p>
        
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'layout' => 'horizontal',
                        'fieldConfig' => [
                            'template' => "{label}\n{input}\n{error}",
                            'inputOptions' => ['class' => 'col-lg-3 ml-3 form-control'],
                            'errorOptions' => ['class' => 'col-lg-3 ml-3 invalid-feedback'],
                        ],
                    ]); ?>
        
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>
        
                    <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
        
                    <div class="form-group">
                        <div class="">
                            <?= Html::submitButton('<li class="fa fa-sign-in"></li>&nbsp; Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                    </div>
        
                    <?php ActiveForm::end(); ?>
        
                    
                </div>
            </div>
        </div>
    </div>
</div>