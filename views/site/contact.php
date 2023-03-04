<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use app\helpers\Utils;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

?>
<style>
    .btn {
        font-size: 1rem;
        border-radius: 0.25rem;
        letter-spacing: normal;
        padding: 0.375rem 0.75rem;
    }

    .form-group {
        position: relative;
        margin-bottom: 2rem;
        height: 5rem;

    }

    .form-group input,
    textarea {
        position: absolute;
        width: 100%;
        top: 0;
        bottom: 0;
        border-radius: .5rem !important;
        padding: 2rem;
        z-index: 1;
    }

    .form-group label {
        position: absolute;
        top: -0.75rem;
        left: 1.25rem;
        font-size: smaller;
        padding: 0.25rem;
        z-index: 10;
        background-color: white;
    }

    .invalid-feedback {
        position: absolute;
        bottom: -10px;
        padding-top: 10px;
        z-index: 11;
    }

    .card {
        color: hsl(250, 8%, 15%);
    }

    .contact-form {
        padding: 0;
    }

    .bx {
        transition: all .2s ease-out; 
        margin-bottom: 1rem;
    }

    .bx:hover {
        /* scale: 2.35; */
    }

    .c-link,
    a {
        /* color: #f0544f; */
    }

    .c-link
    a:hover {
        text-decoration: none;
    }

    .c-link .fa-long-arrow-right {
        /* color: #f0544f; */
        margin-left: 10px;
        transform: translateX(-6px);
        transition: all 0.3s ease;
    }

    .c-link:hover .fa-long-arrow-right {
        transform: translateX(0);
    }

    .c-link:active .fa-long-arrow-right {
        transform: scale(0.9);
    }

    .field-contactform-body .invalid-feedback {
        margin-bottom: -15px;
    }

    #contact-form {
        margin: 1rem;
    }

    #contact-form .form-group:nth-child(6) {
        /* Add your custom styles here */
        height: fit-content;
        margin-bottom: 0;
    }

    .fab {
        scale: 1;
    }

    .o-social {
        display: flex;
        place-items: center;
        justify-content: center;
    }

    p a:hover {
        text-decoration: none;
    }

    .contact-form {
        padding-left: 2rem
    }

    @media screen and(max-width:767px) {
        .contact-form {
            padding-left: 0;
        }
    }
</style>
<section id="contact" class="contact">
    <div class="center-y">
        <?= Utils::headerSection('Contact'); ?>
        <div class="row">
            <div class="col-12 col-md col-lg-4">
                <div class="text-center mb-5 section-title">
                    <h5 class="">Talk with me</h5>
                    <p>
                        <small>
                            Get connected with me on social networks
                        </small>
                    </p>
                </div>
                <div class="card card-body border text-center mb-4 b-10">
                    <i class='contact-icon bx bx-mail-send'></i>
                    <div class="contact-title">
                        Email
                    </div>
                    <div class="contact-info text-center">
                        11dwiwijaya@gmail.com
                    </div>
                    <div class="c-link mt-2">
                        <a class="text-muted" href="">Write me </a>
                        <i class="fas fa-long-arrow-right"></i>
                    </div>
                </div>
                <div class="card card-body border text-center mb-4 b-10">
                    <i class='contact-icon bx bxl-whatsapp'></i>
                    <div class="contact-title">
                        WhatsApp
                    </div>
                    <div class="contact-info text-center">
                        +628-770-030-4010
                    </div>
                    <div class="c-link mt-2">
                        <a class="text-muted" href="wa.me/6287700304010">Write me </a>
                        <i class="fas fa-long-arrow-right"></i>
                    </div>
                </div>
                <div class="card card-body border mb-4 b-10">
                    <div class="text-center contact-title">
                        Other Social network :
                    </div>
                    <div class="o-social mt-3">
                        <div class="social-content">
                            <p>
                                <a class="text-muted" href=""><span class="fab fa-facebook"></span> &nbsp;Facebook</a> <br>
                            </p>
                            <p>
                                <a class="text-muted" href=""><span class="fab fa-instagram"></span> &nbsp;Instagram</a> <br>
                            </p>
                            <p>
                                <a class="text-muted" href=""><span class="fab fa-linkedin"></span> &nbsp;Linked-in</a> <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12  col-md col-lg-8 contact-form">
                <div class="text-center mb-5 section-title">
                    <h5 class="">Tell me your project's</h5>
                    <p>
                        <small>

                            Please fill out the following form to contact me.
                        </small>
                    </p>
                </div>
                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')) : ?>

                    <div class="alert alert-success">
                        <small>
                            Thank you for contacting us. We will respond to you as soon as possible.
                        </small>
                    </div>
                    <p>
                        Note that if you turn on the Yii debugger, you should be able
                        to view the mail message on the mail panel of the debugger.
                        <?php if (Yii::$app->mailer->useFileTransport) : ?>
                            Because the application is in development mode, the email is not sent but saved as
                            a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                            Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                            application component to be false to enable email sending.
                        <?php endif; ?>
                    </p>
                <?php else : ?>
                    <div class="row">
                        <div class="col">
                            <div class="card card-body border b-10">

                                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'email') ?>

                                <?= $form->field($model, 'subject') ?>

                                <?= $form->field($model, 'body')->textarea(['rows' => 6,]) ?>



                                <div class="form-group">
                                    <?= Html::submitButton('<i class="fa fa-envelope"></i>&nbsp; Submit', ['style' => 'height:fit-content', 'class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                </div>

                                <?php ActiveForm::end(); ?>
                            </div>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>