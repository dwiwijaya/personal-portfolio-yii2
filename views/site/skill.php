<?php

/** @var yii\web\View $this */

use app\helpers\Utils;
use app\models\Skill;
use yii\helpers\Html;

$fe = Skill::find()->where(['type' => 'fe'])->orderBy(['order' => SORT_ASC])->all();
$be = Skill::find()->where(['type' => 'be'])->orderBy(['order' => SORT_ASC])->all();

?>
<style>
    .skill-img .card {
        background-color: #fcfcfc;
    }

    .skill-img .card:hover {
        background-color: white;
    }

    .line {
        position: absolute;
        /* Position the line absolute */
        top: 50%;
        /* Center the line vertically */
        left: 50%;
        /* Center the line horizontally */
        transform: translate(-50%, -50%);
        /* Shift the line back by 50% of its size to center it */
        width: 0;
        /* Set the width to 0 */
        height: 30%;
        /* Set the height of the line */
        border-left: 1px solid rgba(0, 0, 0, 0.1);
        ;
        /* Add a left border */
        margin: 0 auto;
        /* Center the line horizontally */
    }

    /* Skill page styling */

    .skill-names {
        font-size: smaller !important;
    }

    .icon-container .card {
        max-width: 5.5rem;
        flex-direction: column;
        padding: 0.6rem;
        border-radius: 0.7rem;
        flex-direction: column;
    }

    .icon-container .card:hover {
        position: relative;
        transform: translateY(-0.5rem) scale(1.03);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
        transition-timing-function: ease-out;
    }

    /* Skill page end */
    @media (max-width: 767px) {
        .text-center img{
            width: 50% !important;
        }
    }
</style>
<section id="skills" class="skill">
    <div class="center-y">

        <?= Utils::headerSection('Skills'); ?>

        <div class="row">
            <div class="col-lg-5 col-sm-12 mb-3">
                <div class=" text-center">
                    <h5 class="mx-auto u-animation fw-300 my-4">Frontend Developer</h5>
                    <div class="icon-container">
                        <div class="row">
                            <?php foreach ($fe as $s) : ?>
                                <div class="col-4 col-lg-4 grid-items mb-3 hidden skill-img">
                                    <div class="card mx-auto border-0">
                                        <div class="text-center">
                                            <img class="mx-auto center mb-1" style="width:60%" alt="<?= $s['name']; ?>" src="<?= Yii::$app->request->getBaseUrl() . '/img/skills/' . $s['svg']; ?>" alt="">
                                            <p class="skill-names fw-300 m-0"><?= $s['name']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">

                <div class="line"></div>
            </div>

            <div class="col-lg-5 col-sm-12 mb-3">
                <div class=" text-center">
                    <h5 class="mx-auto u-animation fw-300 my-4">Backend Developer</h5>
                    <div class="icon-container">
                        <div class="row">
                            <?php foreach ($be as $s) : ?>
                                <div class="col-4 col-lg-4 grid-items mb-3 hidden skill-img">
                                    <div class="card mx-auto border-0">
                                        <div class="text-center">
                                            <img class="mx-auto center mb-1" style="width:60%" alt="<?= $s['name']; ?>" src="<?= Yii::$app->request->getBaseUrl() . '/img/skills/' . $s['svg']; ?>" alt="">
                                            <p class="skill-names fw-300 m-0"><?= $s['name']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Skill end page -->