<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="MediaCenter, Template, eCommerce">
	<meta name="robots" content="all">
	<title>قالب اچ تی ام ال فروشگاهی مارازو</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>dist/css/bootstrap-rtl.min.css">

	<!-- Customizable CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>dist/css/main.css">
	<link rel="stylesheet" href="<?= base_url(); ?>dist/css/blue.css">
	<link rel="stylesheet" href="<?= base_url(); ?>dist/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url(); ?>dist/css/owl.transitions.css">
	<link rel="stylesheet" href="<?= base_url(); ?>dist/css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>dist/css/rateit.css">
	<link rel="stylesheet" href="<?= base_url(); ?>dist/css/bootstrap-select.min.css">

	<!-- Icons/Glyphs -->
	<link rel="stylesheet" href="<?= base_url(); ?>dist/css/font-awesome.css">

</head>

<body onload="writePHPscript()" class="cnt-home">
	<header class="header-style-1">

		<!-- ============================================== TOP MENU ============================================== -->
		<div class="top-bar animate-dropdown">
			<div class="container">
				<div class="header-top-inner">
					<div class="cnt-account">
						<ul class="list-unstyled">
							<li class="myaccount"><a href="#"><span>حساب من</span></a></li>
							<li class="wishlist"><a href="#"><span>علاقه مندیها</span></a></li>
							<li class="header_cart hidden-xs"><a href="#"><span>سبد خرید</span></a></li>
							<li class="check"><a href="#"><span>صورتحساب</span></a></span>
							</li>
							<li class="login"><a href="#"><span>ورود</span></a></li>
						</ul>
					</div>
					<!-- /.cnt-account -->

					<div class="cnt-block">
						<ul class="list-unstyled list-inline">
							<li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">دلار </span><b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">دلار</a></li>
									<li><a href="#">تومان</a></li>
									<li><a href="#">یورو</a></li>
								</ul>
							</li>
							<li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">انگلیسی</span><b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">انگلیسی</a></li>
									<li><a href="#">فرانسوی</a></li>
									<li><a href="#">آلمانی</a></li>
								</ul>
							</li>
						</ul>
						<!-- /.list-unstyled -->
					</div>
					<!-- /.cnt-cart -->
					<div class="clearfix"></div>
				</div>
				<!-- /.header-top-inner -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.header-top -->
		<div class="main-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
						<div class="logo"> <a href="home.html"> <img src="<?= base_url(); ?>dist/images/logo.png" alt="logo"> </a> </div>
						<!-- /.logo -->
					</div>
					<!-- /.logo-holder -->

					<div class="col-lg-9 col-md-6 col-sm-8 col-xs-12 top-search-holder">
						<!-- /.contact-row -->
						<div class="search-area">
							<form>
								<div class="control-group">
									<ul class="categories-filter animate-dropdown">
										<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">دسته بندیها <b class="caret"></b></a>
											<ul class="dropdown-menu" role="menu">
												<li class="menu-header">عنوان دسته بندی</li>
												<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- عنوان دسته بندی</a></li>
												<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- عنوان دسته بندی</a></li>
												<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- عنوان دسته بندی</a></li>
												<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- عنوان دسته بندی</a></li>
											</ul>
										</li>
									</ul>
									<input class="search-field" placeholder="جستجو در میان محصولات ..." />
									<a class="search-button" href="#"></a> </div>
							</form>
						</div>
						<!-- /.search-area -->
					</div>
					<!-- /.top-search-holder -->

				
					<!-- /.top-cart-row -->
				</div>
				<!-- /.row -->

			</div>
			<!-- /.container -->

		</div>
		<!-- /.main-header -->

		<!-- ============================================== NAVBAR ============================================== -->
		<div class="header-nav animate-dropdown">
			<div class="container">
				<div class="yamm navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">تعویض ناوبری</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					</div>
					<div class="nav-bg-class">
						<div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
							<div class="nav-outer">
								<ul class="nav navbar-nav">
									<li class="active dropdown"> <a href="<?= base_url(); ?>">صفحه اصلی</a> </li>
									<li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">دسته بندی کالا ها</a>
										<ul class="dropdown-menu container">
											<li>
												<div class="yamm-content ">
													<div class="row">
													<?php foreach($cate as $cate_value) { ?>
														<div class="col-xs-12 col-sm-6 col-md-2 col-menu">
															<h2 class="title"><?= $cate_value->cate_title; ?></h2>
															<?php if(!empty($cate_value->subs)) { ?>
															<ul class="links">
																<?php foreach ($cate_value->subs as $sub)  { ?>
																<li><a href="#"><?= $sub->sub_cate_title; ?></a></li>
																<?PHP } ?>
														
															</ul>
															<?php } ?>
														</div>
														<!-- /.col -->
														<?PHP } ?>
														<div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="<?= base_url(); ?>dist/assets/images/banners/top-menu-banner.jpg" alt=""> </div>
														<!-- /.yamm-content -->
													</div>
												</div>
											</li>
										</ul>
									</li>
								
									<li class="dropdown hidden-sm"> <a href="category.html">تخفیفات و پیشنهادات <span class="menu-label new-menu hidden-xs">جدید</span> </a> </li>
									<li class="dropdown hidden-sm"> <a href="category.html">تماس با ما</a> </li>
									<li class="dropdown"> <a href="contact.html">درباره ما</a> </li>
	
								
								</ul>
								<!-- /.navbar-nav -->
								<div class="clearfix"></div>
							</div>
							<!-- /.nav-outer -->
						</div>
						<!-- /.navbar-collapse -->

					</div>
					<!-- /.nav-bg-class -->
				</div>
				<!-- /.navbar-default -->
			</div>
			<!-- /.container-class -->

		</div>
		<!-- /.header-nav -->
		<!-- ============================================== NAVBAR : END ============================================== -->

	</header>
