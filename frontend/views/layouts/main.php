<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="page-top">
<?php $this->beginBody() ?>
<!-- Header Start-->
<?= $this->render('header.php')?>
        <?= $content ?>
  <!-- Footer Start -->
	<footer class="footer">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<img src="images/main_logo.svg" alt="">
					<h2>Cursus | LMS &amp; Online Courses Marketplace HTML Template</h2>
					<h4>Cursus is ready to use .Get It</h4>
					<p>Don't forget to appreciate our work. Rate us now!</p>
					<ul>
						<li><i class="uil uil-favorite"></i></li>
						<li><i class="uil uil-favorite"></i></li>
						<li><i class="uil uil-favorite"></i></li>
						<li><i class="uil uil-favorite"></i></li>
						<li><i class="uil uil-favorite"></i></li>
					</ul>
					<a class="buy_btn2" href="https://themeforest.net/item/cursus-lms-online-courses-marketplace-html-template/26418463" target="_blank">Purchase Now</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
