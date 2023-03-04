<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\ContactForm $model */

use app\helpers\Utils;
use app\models\Project;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$project = Project::find()->count();
?>
<style>
    .fa {
        scale: 1.2;
    }

    .grid-center:nth-child(2){
        transition-delay: 200ms;
    }
    .grid-center:nth-child(3){
        transition-delay: 250ms;
    }

    @media (max-width: 576px) {
        .about-content .row {
            margin-top: 3%;
        }

        .fa {
            scale: 1.5;
        }

        .card-body {
            padding: .7rem 0;
        }

        .card-body h6 {
            font-size: small;
            margin-bottom: 4px;
        }

        .card-body p {
            font-size: x-small;
        }

        .flex-center {
            /* border-top: 1px solid rgba(0, 0, 0, 0.1); */

        }
    }
</style>
<section id="about" class="about ">
    <div class="center-y">

        <?= Utils::headerSection('About Me'); ?>

        <div class="row ">
            <div class="col-12 col-md-12 col-lg-6 about-content center-x">
                <img class="img shadow-1-sm rounded center d-block" style="width: 90%" src="<?= Yii::$app->request->getBaseUrl(); ?>/img/freelancer-2.jpg" alt="">
            </div>
            <div class="col-12 col-md-12 col-lg-6 about-content ">
                <div class="flex-center ">
                    <div class="card card-body grid-center b-10 hidden">
                        <i class="fa fa-regular fa-hourglass mt-2"></i>
                        <h6 class="mt-3">Experince</h6>
                        <p class="m-0 fw-300 text-muted">1+ Years</p>
                    </div>
                    <div class="card card-body grid-center b-10 hidden">
                    <i class="fa uil uil-window mt-2"></i>
                        <h6 class="mt-3">Complete</h6>
                        <p class="m-0 fw-300 text-muted"><?= $project; ?>+ Project</p>
                    </div>
                    <div class="card card-body grid-center b-10 hidden">
                        <i class="fa fa-headset mt-2"></i>
                        <h6 class="mt-3">Support</h6>
                        <p class="m-0 fw-300 text-muted">Online 24/7</p>
                    </div>
                </div>
                <!-- <h5 style="color: #f0544f ; margin-bottom: 1rem;" class="text-center mt-3"><li class="fas fa-hand-peace"></li> Hii There !</h5> -->
                <h6 class="text-muted mt-3 fw-300"> I'am a Junior Web Developer focus on Full-Stack Developer, I'am graduated from Software Engineering Vocational School from Indonesia.
                </h6>
            </div>
        </div>
    </div>
</section>

<!-- About end -->