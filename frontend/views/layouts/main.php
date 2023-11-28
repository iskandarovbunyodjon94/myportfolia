<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- ======= Mobile nav toggle button ======= -->
<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
<i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Главный</span></a></li>
            <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>О себя</span></a></li>
            <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Резюме</span></a></li>
            <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Портфолио</span></a></li>
            <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Услуги</span></a></li>
            <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Контакты</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1>Бунёджон Шухратович Искандаров</h1>
        <p>Я <span class="typed" data-typed-items="программист, фрилансер, водитель, добрый человек"></span></p>
        <div class="social-links">
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://t.me/bunyodjon_shuxratovich94" class="telegram"><i class="bx bxl-telegram"></i></a>
            <a href="https://www.facebook.com/bunyod.iskandarov.94" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

        <?= Alert::widget() ?>
        <?= $content ?>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>Бунёджон Шухратович Искандаров</h3>
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
        <div class="social-links">
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://t.me/bunyodjon_shuxratovich94" class="telegram"><i class="bx bxl-telegram"></i></a>
            <a href="https://www.facebook.com/bunyod.iskandarov.94" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        </div>
        <div class="copyright">
            &copy; Авторские права <strong><span>МойРезюме</span></strong>. Все права защищены
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: [license-url] -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
            <!-- Разработано <a href="#">BootstrapMade</a> -->
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
