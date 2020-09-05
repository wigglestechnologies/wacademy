<?php 
use yii\helpers\Url;

?>
<!-- Navigation Start -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		<div class="container-fluid">
			<a class="navbar-brand logo_brand js-scroll-trigger" href="#page-top">
				<img src="images/main_logo.svg" alt="">
			</a>
			<button class="navbar-toggler navbar-toggler-right ml-auto trigger-rgt" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav mlt-auto my-2 my-lg-0">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= Url::to(['site/index'])?>">Home</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= Url::to(['site/contact'])?>">Contact</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= Url::to(['site/about'])?>">About Us</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#features">Courses</a></li>
				</ul>
			</div>
			<a class="buy_btn" href="<?= Url::to(['student-registration/create'])?>" target="_blank">Register&Login</a>
		</div>
	</nav>
	<!-- Navigation End -->