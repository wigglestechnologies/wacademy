<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Kazini';
?>
	<!-- Masthead Start-->
	<header class="masthead">
		<img class="intro-promo__img" src="<?= Yii::$app->request->baseUrl;?>/images/banner/banner-2.png" alt="img">
		<div class="container">
			<div class="row">				
				<div class="col-lg-7 col-xl-6">
					<div class="align-container">
						<div class="align-container__item">
							<h6 class="intro-promo__pre-title">Cursus</h6>
							<h2 class="intro-promo__title">LMS &amp; Online <br>Courses Marketplace <br><span>HTML Template</span></h2>
							<p class="intro-promo__subtitle">Cursus is an all-in-one solution for creating online education marketplaces like Udemy, Skillshare, Coursera, Youtube etc.</p>
							<a class="button intro-promo__button" href="<?= Url::to(['student-application/create'])?>">Application</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Masthead End -->
	<!-- Inner Pages Start -->
	<section class="inner-demos" id="inner-pages">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section_title">
						<h2>Inner Pages Demos</h2>
					</div>
				</div>
				<div class="col-md-12">
					<div class="course_tabs">
						<nav>
							<div class="nav nav-tabs tab_crse justify-content-center" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-frontend-tab" data-toggle="tab" href="#nav-frontend" role="tab" aria-selected="true">Frontend Demo</a>
								<a class="nav-item nav-link" id="nav-instructor-tab" data-toggle="tab" href="#nav-instructor" role="tab" aria-selected="false">Instructor Dashboard Demo</a>
								<a class="nav-item nav-link" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab" aria-selected="false">Student Dashboard Demo</a>
							</div>
						</nav>						
					</div>
					<div class="course_tab_content">
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-frontend" role="tabpanel">
								<div class="row">
									<div class="col-lg-4 col-md-6">
										<div class="demo-item">
											<a href="http://gambolthemes.net/html-items/cursus_demo_f12/certification_test_view.html" class="demo-img" target="_blank">
												<img class="img-fluid" src="<?= Yii::$app->request->baseUrl;?>/images/inner_pages/img-24.jpg" alt="">
											</a>
											<p class="demo-title">Web & Mobile Development</p>
											<a href="http://gambolthemes.net/html-items/cursus_demo_f12/certification_test_view.html" class="demo-link" target="_blank">Live Preview</a>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="demo-item">
											<a href="http://gambolthemes.net/html-items/cursus_demo_f12/certification_test__result.html" class="demo-img" target="_blank">
												<img class="img-fluid" src="<?= Yii::$app->request->baseUrl;?>/images/inner_pages/img-25.jpg" alt="">
											</a>
											<p class="demo-title">Data Science</p>
											<a href="http://gambolthemes.net/html-items/cursus_demo_f12/certification_test__result.html" class="demo-link" target="_blank">Live Preview</a>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="demo-item">
											<a href="http://gambolthemes.net/html-items/cursus_demo_f12/membership.html" class="demo-img" target="_blank">
												<img class="img-fluid" src="<?= Yii::$app->request->baseUrl;?>/images/inner_pages/img-26.jpg" alt="">
											</a>
											<p class="demo-title">Digital Marketing</p>
											<a href="http://gambolthemes.net/html-items/cursus_demo_f12/membership.html" class="demo-link" target="_blank">Live Preview</a>
										</div>
									</div>
								</div>
							</div>						
						</div>
					</div>
				</div>		
			</div>
		</div>
	</section>
	<!-- Inner Pages End -->
	