<?php

use app\models\Skill;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\color\ColorInput;
use kartik\date\DatePicker;
use richardfan\widget\JSRegister;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\file\FileInput;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\Project $model */
/** @var yii\widgets\ActiveForm $form */
$language = ArrayHelper::map(Skill::find()->all(), 'name', 'name');
$model->arch = explode(', ', $model->architecture);
?>
<style>
    .ck-editor__editable_inline {
        min-height: 200px;
    }

    a {
        text-decoration: none;
        color: rgba(0, 0, 0, 0.5);

    }

    a:hover {
        text-decoration: none;
        color: rgba(0, 0, 0, 0.9);
        letter-spacing: 1px;
        transition: .2s;
    }

    a:active {
        letter-spacing: 1px;
        transition: .4s;
    }

    .trans::-webkit-validation-bubble-message {
        background-color: cyan;
    }

    .nav .active {
        background-color: #f0544f;
        border-radius: 12px;
        transition: 0.3s;
        color: white !important;
        padding: .5rem
    }

    #project-color {
        height: auto;
    }
</style>
<div class="project-form">
    <ul style="" class="nav site-menu nav-tabs mb-4" id="tabContent">
        <li class=" col text-center trans mb-3"><a class="active" href="#project" data-toggle="tab">PROJECT</a></li>
        <li class="col text-center inc mb-3"><a class="" href="#detail" data-toggle="tab">DETAIL</a></li>
    </ul>
    

    <?php $urlfrom == 'create' ? 
    $form = ActiveForm::begin(['action' => Url::to(['create']),'id' => 'form-id','enableClientValidation' => true,'options' => ['enctype' => 'multipart/form-data']]) :
    $form = ActiveForm::begin(['action' => Url::to(['update','id' => $model->idproject]),'options' => ['enctype' => 'multipart/form-data']]) ?>

    <div class="tab-content">
        <div class="tab-pane active " id="project">
            <div class="card">
                <div class="card-body">
                    <?= $form->field($model, 'name')->textInput() ?>
                    <div class="row">
                        <div class="col">
                            <?= $form->field($model, 'order')->textInput() ?>
                        </div>
                        <div class="col">
                            <?= $form->field($model, 'color')->widget(ColorInput::classname(), [
                                'useNative' => true,
                                'options' => ['placeholder' => 'Choose your color ...']
                            ]); ?>
                        </div>
                    </div>

                    <?= $form->field($model, 'detail')->textInput() ?>

                    <?= $form->field($model, 'arch')->widget(Select2::classname(), [
                        'data' => $language,
                        'options' => ['placeholder' => 'Select Architecture . . .'],
                        'pluginOptions' => [
                            'allowClear' => true,
                            'multiple' => true
                        ],
                    ])->label('Architecture'); ?>

                    <?php $form->field($model, 'file')->fileInput()->label('Thumbnail') ?>

                </div>
            </div>
        </div>

        <div class="tab-pane " id="detail">
            <div class="card">
                <div class="card-body">

                    <?= $form->field($modeldet, 'date')->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'Date ...'],
                        'pluginOptions' => [
                            'autoclose' => true,
                            'startView' => 'year',
                            'minViewMode' => 'months',
                            'format' => 'yyyy-mm'
                        ]
                    ]); ?>

                    <?= $form->field($modeldet, 'background')->textInput() ?>

                    <?= $form->field($modeldet, 'description', ['inputOptions' => ['id' => 'editor']])->textarea(['rows' => 6]) ?>
                    <?php
                    $form->field($modeldet, 'filedet[]')->widget(FileInput::class, [
                        'name' => 'filedet',
                        'pluginOptions' => [
                            'showPreview' => false,
                            'showCaption' => true,
                            'showRemove' => true,
                            'showUpload' => false
                        ]
                    ]);
                    ?>
                    <?= $form->field($modeldet, 'filedet')->fileInput()->label('Detail Image') ?>

                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-block btn-success mt-4']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php JSRegister::begin() ?>
<script>
    ClassicEditor.create(document.querySelector("#editor"), )
        .then((editor) => {
            // console.log( editor );
        })
        .catch((error) => {
            console.error(error);
        });


    // var selector = ".site-menu li ";

    // $(selector).click(function() {
    //     $(selector).removeClass('active');
    //     $(this).addClass('active');
    // });
    $('#form-id').validate({
    rules: {
        order: {
            required: true,
            number: true,
        },
    },
    submitHandler: function (form) {
        // Submit the form
    }
});
</script>
<?php JSRegister::end() ?>