<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('sassets/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/flexslider.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/chosen.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/color-01.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Helpline: +880-123-45661" href="#" ><span class="icon label-before fa fa-mobile"></span>Helpline: +880-123-45661</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="assets/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="<?php echo e(asset('assets/images/lang-hun.png')); ?>" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="<?php echo e(asset('assets/images/lang-ger.png')); ?>" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="<?php echo e(asset('assets/images/lang-fra.png')); ?>" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="<?php echo e(asset('assets/images/lang-can.png')); ?>" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Taka (TK)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Dollar (USD)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
									</ul>
								</li>
								<?php if(Route::has('login')): ?>
								    <?php if(auth()->guard()->check()): ?>
									   <?php if(Auth::user()->ut === 'ADM'): ?>
										<li class="menu-item menu-item-has-children parent" >
											<a title="My Account" href="#">My Account (<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="submenu curency" >
												<li class="menu-item" >
													<a title="Dashboard" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
												</li>
												<li class="menu-item" >
													<a title="All Orders" href="<?php echo e(route('admin.orders')); ?>">All Orders</a>
												</li>
												<li class="menu-item" >
													<a title="Requested Item(s)" href="<?php echo e(route('product.requestedItemList')); ?>">Requested Item(s)</a>
												</li>
												<li class="menu-item" >
													<a title="Preferred Doctor(s)" href="<?php echo e(route('product.prefferedMechanicList')); ?>">Preferred Doctor(s)</a>
												</li>
												<li class = "menu-item">
														<a href ="<?php echo e(route('logout')); ?>" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
												</li>
												<form id = "logout-form" method = "POST" action ="<?php echo e(route ('logout')); ?>">
												  <?php echo csrf_field(); ?> 
	  
											</ul>
										  </li>
										<?php else: ?>
										<li class="menu-item menu-item-has-children parent" >
											<a title="My Account" href="#">My Account (<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="submenu curency" >
												<li class="menu-item" >
													<a title="Dashboard" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a>
												</li>
												<li class="menu-item" >
													<a title="My Orders" href="<?php echo e(route('user.orders')); ?>">My Orders</a>
												</li>
												<li class="menu-item" >
													<a title="Requested Item(s)" href="<?php echo e(route('product.requestedItemList')); ?>">Requested Item(s)</a>
												</li>
												<li class="menu-item" >
													<a title="Preffered Mechanic(s)" href="<?php echo e(route('product.prefferedMechanicList')); ?>">Preferred Doctor(s)</a>
												</li>
												<li class = "menu-item">
														<a href ="<?php echo e(route('logout')); ?>" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
												  </li>
												<form id = "logout-form" method = "POST" action ="<?php echo e(route ('logout')); ?>">
												  <?php echo csrf_field(); ?> 
												  
												</form>
											</ul>
										  </li>	  
										<?php endif; ?>   
									<?php else: ?>
									    <li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('login')); ?>">Login</a></li>
								        <li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('register')); ?>">Register</a></li>
									<?php endif; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="<?php echo e(asset('assets/images/homelogo.png')); ?>" alt="mercado"></a>
						</div>

						<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search-component')->html();
} elseif ($_instance->childHasBeenRendered('kksOYnI')) {
    $componentId = $_instance->getRenderedChildComponentId('kksOYnI');
    $componentTag = $_instance->getRenderedChildComponentTagName('kksOYnI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('kksOYnI');
} else {
    $response = \Livewire\Livewire::mount('search-component');
    $html = $response->html();
    $_instance->logRenderedChild('kksOYnI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
						<div class="wrap-icon right-section">
						
						<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('wishlist-count-component')->html();
} elseif ($_instance->childHasBeenRendered('vgfuqdw')) {
    $componentId = $_instance->getRenderedChildComponentId('vgfuqdw');
    $componentTag = $_instance->getRenderedChildComponentTagName('vgfuqdw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vgfuqdw');
} else {
    $response = \Livewire\Livewire::mount('wishlist-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('vgfuqdw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
						<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-count-component')->html();
} elseif ($_instance->childHasBeenRendered('EHf8tSW')) {
    $componentId = $_instance->getRenderedChildComponentId('EHf8tSW');
    $componentTag = $_instance->getRenderedChildComponentTagName('EHf8tSW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EHf8tSW');
} else {
    $response = \Livewire\Livewire::mount('cart-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('EHf8tSW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
							
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="/order" class="link-term mercado-item-title">Order</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

    <?php echo e($slot); ?>


	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Valid Coupon</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantee</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Safe Payment</h4>
								<p class="fc-desc">Safe your online payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">Providing support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Address</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Khilgaon, Dhaka</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">acubemedofficial@gmail.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header"><b>Hot Line</b></h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Contact Us</span>
										<b class="phone-number">+880-123-45661</b>
									</div>
								</div>
							</div>

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Sign up for newsletter</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
											<button class="btn-submit">Subscribe</button>
										</form>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Use Safe Payments</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="<?php echo e(asset('assets/images/pay.png')); ?>" style="max-width: 260px;"><br>
										<a href="https://www.bkash.com/bn/user" class='link-to-item'>BKash</a><br>
										<a href="https://www.mastercard.com/global/en/personal/find-card-products/click-to-pay.html" class='link-to-item'>Mastercard</a><br>
										<a href="https://vms.mynagad.com:8484/login" class='link-to-item'>Nagad</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Social Network</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fas fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fas fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fas fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fas fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Download Our App</h3>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<li><a href="https://www.apple.com/store" class="link-to-item" title="application on apple store"><figure><img src="<?php echo e(asset('assets/images/brands/apple-store.png')); ?>" alt="apple store" width="128" height="36"></figure></a></li>
											<li><a href="https://play.google.com/store/apps" class="link-to-item" title="application on google play store"><figure><img src="<?php echo e(asset('assets/images/brands/google-play-store.png')); ?>" alt="google play store" width="128" height="36"></figure></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="copy-right-box">
					<div class="copy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>								
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>								
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="<?php echo e(asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.flexslider.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/chosen.jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/functions.js')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH D:\11th Semester\CSE470\CSE470_AcubeMedicoStore\acube_medico_store\resources\views/layouts/base.blade.php ENDPATH**/ ?>