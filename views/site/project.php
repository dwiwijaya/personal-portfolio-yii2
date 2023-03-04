<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */
use app\helpers\Utils;
use app\models\Project;
use richardfan\widget\JSRegister;
use yii\widgets\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$projects = Project::find()->orderBy(['order' => SORT_ASC])->all(); ?>
<style>
    .fas {
        color: #f0544f;
        transition: all .2s ease-out;
    }

    .fas:hover {
        scale: 1.04;
    }

    .card-img {
        padding: 1rem;
    }

    /* Project page styling */
    .card-img {
        height: 8rem;
    }

    .project .card-body {
        padding: 1rem 1rem 0 !important;
    }

    .card-img-text {
        margin-bottom: 0;
        letter-spacing: 4px;
        text-transform: uppercase;
    }

    .p-name {
        margin: 0 10px;
    }

    .p-name:hover {
        text-decoration: none;
    }

    .project-descriptopn {
        font-size: 1rem;
    }

    .project-descriptopn .fa-long-arrow-right {
        margin-left: 10px;
        transform: translateX(-6px);
        transition: all 0.3s ease;
    }

    .project-descriptopn:hover .fa-long-arrow-right {
        transform: translateX(0);
    }

    .project-descriptopn:active .fa-long-arrow-right {
        transform: scale(0.9);
    }

    .project-descriptopn:not(.collapsed) .fa-chevron-up {
        /* transform: rotate(180deg); */
    }

    /* Project page end */

    /* Mobile Size */
    @media (max-width: 767px) {
        .about-content .row {
            margin-top: 3%;
        }

        .card-img {
            height: 9rem;
        }

        .card {
            font-size: 2.5vw;
        }

    }

    /* Tabled */
    @media screen and (max-width:992px) {}

    @media screen and (min-width:1200px) {}
</style>
<section id="project" class="project">
    <div class="center-y">
        <?= Utils::headerSection('Projects'); ?>
        <div class="row ">
            <?php foreach ($projects as $p) : ?>
                <div class="col-md-4 col-12 col-lg-3 col-sm-6 col-xs-6  hidden project-img">
                    <div class="card card-body b-10">
                        <div style="background-color: <?= $p['color']; ?> ;" class="card-img b-10 center-yy text-center text-white">
                            <p class="card-img-text fw-300"><?= $p['name']; ?></p>
                        </div>
                        <hr class="line-break" style="width: 30%;">
                        <div class="">
                            <p style="margin: 0;">
                            <div class="project-descriptopn">
                                <a style="text-decoration: none;" class="chevron-btn" id="rotate-icon" data-toggle="collapse" href="#p<?= $p['idproject']; ?>" role="button" aria-expanded="true" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <a alt="detail" class="a-link p-name text-reset" href="<?= Url::to(['/project/detail', 'id' => $p['idproject']]); ?>"><?= $p['name']; ?></a>
                                <i class="fas fa-long-arrow-right"></i>
                            </div>
                            </p>
                            <div class="collapse text-collapse" id="p<?= $p['idproject']; ?>">
                                <p class="text-300"><?= $p['detail']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>



<?php JSRegister::begin() ?>
<script>
    $('.chevron-btn').click(function() {
        var $icon = $(this).find('i');
        if ($icon.hasClass('fa-chevron-down')) {
            $icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');
        } else {
            $icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');
        }

        // Remove the "fa-chevron-up" class from all sibling buttons
        $(this).siblings('.chevron-btn').find('i')
            .removeClass('fa-chevron-up')
            .addClass('fa-chevron-down');
    });
</script>
<?php JSRegister::end() ?>