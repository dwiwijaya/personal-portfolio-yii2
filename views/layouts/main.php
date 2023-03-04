<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\helpers\Utils;
use app\models\Navbar as ModelsNavbar;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></> src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100">

    <!-- Import Font awesome -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        li a {
            text-transform: capitalize;
        }
    </style>

    <?php $this->beginBody() ?>

    <header id="header" class="header">
        <?php
        $navtype = Yii::$app->user->identity == null ? Utils::GUEST : Utils::ADMIN;
        $navitem = ModelsNavbar::find()->where(['type' => $navtype])->orderBy(['order' => SORT_ASC, 'type' => SORT_ASC])->all()
        ?>
        <nav class="nav">
            <a href="#" class="navbar-brand"><b>Dwi Wijaya</b></a>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list m-0 p-0">
                    <?php foreach ($navitem as $nav) : ?>
                        <li class="nav-item">
                            <a href="<?= Url::to($nav['url']); ?>" class="nav-link">
                                <i class="uil <?= 'uil-' . $nav['icon']; ?> nav-icon"></i> <?= $nav['name']; ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                    <?php if ($navtype == Utils::ADMIN)
                        echo Html::a('Log-out&nbsp; <i style="scale:1.2" class="uil uil-signout"></i> ', ['/site/logout'], ['data' => ['confirm' => 'Apakah anda yakin ingin keluar ?', 'method' => 'post'], 'class' => 'nav-link nav-logout']);
                    ?>
                </ul>
                <i class="uil uil-times nav-close" id="nav-close"></i>
            </div>
            <div class="nav-btn">
                <div class="nav-toggle" id="nav-toggle">
                    <i class="uil uil-apps nav-icon"></i>
                </div>
            </div>
        </nav>
    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">

            <?php if (!empty($this->params['breadcrumbs'])) : ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>

        </div>
    </main>

    <footer id="footer" class="mt-auto py-3 bg-light">
        <div class="row text-muted">
            <div class="col text-center text-md-start">&copy; Dwi Wijaya <?= date('Y') ?></div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>