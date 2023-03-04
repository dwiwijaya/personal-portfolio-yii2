<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\ContactForm $model */

use richardfan\widget\JSRegister;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

?>
<style>
    .d-flex {
        gap: 5%;
    }

    .fab {
        scale: 1.5;
    }

    .fab:hover {
        transition: all .2s ease-in-out;
        scale: 1.8;
    }

    .btn {
        padding: .6rem;
        border-radius: 10px;
        letter-spacing: 2px;
    }

    .btn:hover {
        color: white !important;
    }

    /* Home page styling */
    .text-group {
        display: flex;
        overflow: hidden;
    }

    .text-group .text {
        position: relative;
        font-size: larger;
    }

    .sec-text,
    .first-text {
        white-space: nowrap;
    }

    .text.sec-text:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: #fcfcfc;
        border-left: 2px solid #f0544f;
        animation: animate 4s steps(12) infinite;
    }

    @keyframes animate {

        40%,
        60% {
            left: 100%;
        }

        100% {
            left: 0%;
        }
    }

    .name {
        font-size: 4.2rem;
    }

    .hr {
        width: 10%;
        float: left;
        margin: 1rem;
        display: block;
    }

    @media screen and (max-width:767px) {
        .name {
            font-size: 3.2rem;
        }

    }

    /* Home page end */
</style>
<section id="home" class="home  hidden">
    <div class="content center-y">
        <div class="center-x mx-auto">
            <div class="content">

                <p class="mb-0"><b class="hii" style="font-size:xx-large; color:#5C3D2E;">Hii There .</b></p>
                <h1 class="name" style="font-weight:700; color:#5C3D2E"> <span style="color: #f0544f;">Dwi Wijaya</span></h1>
                <hr class="hr ">
                <div class="text-group mb-3">
                    <span class="text sec-text"> Fullstack Web Developer</span>
                </div>
            </div>
        </div>
    </div>
</section>


<?php JSRegister::begin() ?>
<script>
    $(document).ready(function() {
        const text = $(".sec-text");
        const textLoad = () => {
            setTimeout(() => {
                text.text("Fullstack Web Developer");
            }, 0);
            setTimeout(() => {
                text.text("Frontend Web Developer");
            }, 4000);
            setTimeout(() => {
                text.text("Backend Web Developer");
            }, 8000);
        }
        textLoad();
        setInterval(textLoad, 12000);
    });
</script>
<?php JSRegister::end() ?>