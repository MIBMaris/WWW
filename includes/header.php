<?php $root = $_SERVER['DOCUMENT_ROOT'];?>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>
	<header id="navbar-spy" class="header header-1 header-transparent">
	<nav id="primary-menu" class="navbar navbar-expand-lg navbar-light navbar-bordered navbar-static-top navbar-dark fixed-top"  style="background-color:#000 !important; opacity: 0.8;">
		<div class="container">
		<a class="navbar-brand" href="index.php">
		<img class="logo logo-light" src="<?php $root;?>/assets/images/logo/MIB.png" alt="Consultivo Logo" height="90vh";width="690vw;">
		<img class="logo logo-dark" src="<?php $root;?>/assets/images/logo/MIB.png" alt="Consultivo Logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
		</button>
							
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbarContent">
			<ul class="navbar-nav ml-auto">
				<!-- Home Menu-->
    <li class="has-dropdown" id="home-menu">
      <a href="<?php $root;?>/index.php"  class="dropdown-toggle menu-item" >Home</a>
    </li>
    <!-- li end -->
    
    <!-- Pages Menu -->
    <li class="has-dropdown" id="about-menu">
        <a href="<?php $root;?>/about.php"   class="dropdown-toggle menu-item">About Us</a>
    </li>
    

   <li class="has-dropdown" id="services-menu">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">services</a>
    <ul class="dropdown-menu">
        <li>
            <a href="<?php $root;?>/services/metriken-consulting/sales-and-marketing.php">Metriken Consulting</a>
        </li>
        <li>
            <a href="<?php $root;?>/services/metriken-digital/website-development.php">Metriken Digital</a>
        </li>
        <li>
            <a href="<?php $root;?>/services/metriken-communication/media-relation.php">Metriken Communications</a>
        </li>
        
          <li>
            <a href="<?php $root;?>/services/metriken-analytics/customer-engagement.php">Metriken Analytics</a>
        </li>
    </ul>
</li>
   <li class="has-dropdown" id="packages-menu">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Packages</a>
    <ul class="dropdown-menu">
        <li>
            <a href="<?php $root;?>/packages/metriken-consulting.php">Metriken Consulting</a>
        </li>
        <li>
            <a href="<?php $root;?>/packages/metriken-digital.php">Metriken Digital</a>
        </li>
        <li>
            <a href="<?php $root;?>/packages/metriken-communication.php">Metriken Communications</a>
        </li>
        
          <li>
            <a href="<?php $root;?>/packages/metriken-designing.php">Metriken Designing</a>
        </li>
         <li>
            <a href="<?php $root;?>/packages/metriken-content.php">Metriken Content</a>
        </li>
    </ul>
</li>
    
    <!-- li end -->
    <!-- Studies Menu-->
    <li class="has-dropdown" id="contact-menu">
        <a href="<?php $root;?>/contact-us.php"  class="dropdown-toggle menu-item">Contact Us</a>
    
    </li>

<div class="module-container">
				<!-- Module Consultation  -->
<div class="module module-consultation pull-left">
	<a class="btn" href="tel: +91 9840537565" style="width:100%;"><i class="fa fa-phone" style="font-size:12px" aria-hidden="true"></i> +91 9840537565</a>
</div>				
<div class="module module-cart pull-left"></div>
<!-- .module-cart end -->				
</div>
</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
</header>

