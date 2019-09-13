
<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
$page_id="Packages";
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- Document Meta
    ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<meta name="author" content="zytheme"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Consulting Business Consulting Finance Html5 Template">
<link href="assets/images/favicon/favicon.png" rel="icon">

<!-- Fonts
    ============================================= -->
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800%7CRoboto:300i,400,400i,500,500i,700" rel="stylesheet" type="text/css">

<!-- Stylesheets
    ============================================= -->
<link href="<?php $root;?>/assets/css/external.css" rel="stylesheet">
<link href="<?php $root;?>/assets/css/style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title>Consultivo | Consulting Business Consulting Finance Html5 Template</title>
<style>
.list-group li{
text-align:left !important;
border:10% !important;

}
#active .list-group-item{
background-color:#0000 !important; 
color:#404040 !important;
}
.fa-check{
color:green;	
/*646668 */
}
.w-tick{
	color:#fff;	
}
.fa-times{
	color:#ff8200;
}
</style>
</head>
<body>
    <div class="preloader">
	<div class="reverse-spinner"></div>
</div><!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="wrapper clearfix">

            <?php include("$root/includes/header.php"); ?>
<!-- Page Title
============================================= -->
	<?php //include("$root/includes/services-top-section.php"); ?>
<!-- #page-title end -->




<!-- Pricing Table #1
============================================= -->
<section id="pricing1" class="pricing pricing-1 bg-overlay bg-overlay-dark pt-110 pb-0">
	<div class="bg-section">
		<img src="assets/images/background/2.jpg" al="bg">
	</div>
	<div class="container">
		<div class="row clearfix">
			<div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
				<div class="heading heading-1 text--center mb-40">
					<p class="heading--subtitle">Get Started Now</p>
					<h2 class="heading--title text-white">Our Pricing Plans</h2>
					<p class="heading--desc mb-0">Get started now with us to earn every day and forever in your business. We accept Investment from all over the world.</p>
				</div>
			</div><!-- .col-lg-6 end -->
		</div><!-- .row end -->
        
		</div>
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">

   				 <ol class="breadcrumb d-flex justify-content-center ">
                        <li class="breadcrumb-item">
                        <a href="<?php $root;?>/packages/metriken-consulting.php" id="sales-section">Metriken Consulting</a></li>
                        <li class="breadcrumb-item" aria-current="page" >
                        <a href="<?php $root;?>/packages/metriken-communication.php" id="model-section">Metriken Communication</a></li>
                        <li class="breadcrumb-item" aria-current="page" >
                        <a href="<?php $root;?>/packages/metriken-digital" id="market-section">Metriken Digital</a></li>
                        <li class="breadcrumb-item" aria-current="page" >
                        <a href="<?php $root;?>/packages/metriken-designing" id="market-section">Metriken Designing</a></li>
                        <li class="breadcrumb-item" aria-current="page" >
                        <a href="<?php $root;?>/packages/metriken-content" id="market-section">Metriken Content</a></li>
                    </ol>

</section>
		<div class="container pt-40">
		<div class="row">
			<!-- Pricing Packge #1
			============================================= -->
			<div class="col-sm-12 col-md-4 col-lg-4 price-table">
				<div class="pricing-panel">
					<!--  Pricing heading  -->
					<div class="pricing--heading text--center">
						<div class="pricing--icon">
							<i class="icon-global"></i>
						</div>
						<h4>Starter Plan</h4>
							
						<ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                         <i class="fa fa-check" aria-hidden="true" ></i> Sales &Marketing Audit 
                        </li>
                        <li class="list-group-item list-group-item-action">
                        <i class="fa fa-check" aria-hidden="true" ></i> Industry Study
                        </li>
                        <li class="list-group-item list-group-item-action">
                         <i class="fa fa-check" aria-hidden="true" ></i> Competitor Analysis
                        </li>
                        <li class="list-group-item ">
                        <i class="fa fa-times" aria-hidden="true"></i>
 Customer  Research</li>
                        <li class="list-group-item">
                        <i class="fa fa-times" aria-hidden="true"></i> Competitor Benchmarking</li>
                        <li class="list-group-item"> 
                        <i class="fa fa-times" aria-hidden="true"></i> Market Feasibility Study</li>
                        <li class="list-group-item">
                        <i class="fa fa-times" aria-hidden="true"></i> Channel Partner Research</li>
                        </ul>
						<!--<a class="btn btn--secondary btn--bordered btn--rounded" href="#">Get Started</a>-->
					</div>
					<!--  Pricing heading  -->
				</div>
			</div>
			<!-- .pricing-table End -->
			<!-- Pricing Packge #2
			============================================= -->
			<div class="col-sm-12 col-md-4 col-lg-4 price-table pricing-active">
				<div class="pricing-panel">
					<!--  Pricing heading  -->
					<div class="pricing--heading text--center">
						<div class="pricing--icon">
							<i class="icon-global"></i>
						</div>
						<h4>PRO+</h4>
						
						<div class="pricing--desc">
						<ul class="list-group" id="active">
                        <li class="list-group-item list-group-item-action"> 
                        <i class="fa fa-check w-tick" aria-hidden="true"  ></i> Sales &Marketing Audit 
                        </li>
                        <li class="list-group-item list-group-item-action"> 
                        <i class="fa fa-check w-tick" aria-hidden="true" ></i> Industry Study
                        </li>
                        <li class="list-group-item list-group-item-action">
                        <i class="fa fa-check w-tick" aria-hidden="true" ></i> Competitor Analysis
                        </li>
                        <li class="list-group-item list-group-item-action">
                        <i class="fa fa-check w-tick" aria-hidden="true" ></i> Customer  Research
                        </li>
                        <li class="list-group-item list-group-item-action">
                        <i class="fa fa-check w-tick" aria-hidden="true" ></i> Competitor Benchmarking
                        </li>
                        <li class="list-group-item list-group-item-action">
                        <i class="fa fa-check w-tick" aria-hidden="true" ></i> Market Feasibility Study</li>
                        <li class="list-group-item list-group-item-action">
                        <i class="fa fa-check w-tick" aria-hidden="true" ></i> Channel Partner Research</li>
                        
                        </ul>
                        <!--<a class="btn btn--primary btn--bordered btn--rounded" href="#">Get Started</a>-->
						</div>
						
					</div>
					<!--  Pricing heading  -->
				</div>
			</div>
			<!-- .pricing-table End -->
			<!-- Pricing Packge #3
			============================================= -->
			<div class="col-sm-12 col-md-4 col-lg-4 price-table">
				<div class="pricing-panel">
					<!--  Pricing heading  -->
					<div class="pricing--heading text--center">
						<div class="pricing--icon">
						<i class="icon-global"></i>
						</div>
						<h4>Advanced Plan</h4>
						<ul class="list-group">
                        <li class="list-group-item list-group-item-action"> 
                        <i class="fa fa-check" aria-hidden="true" ></i> Sales &Marketing Audit 
                        </li>
                        <li class="list-group-item list-group-item-action">
                        <i class="fa fa-check" aria-hidden="true" ></i> Industry Study
                        </li>
                        <li class="list-group-item list-group-item-action">
                        <i class="fa fa-check" aria-hidden="true" ></i> Competitor Analysis
                        </li>
                        <li class="list-group-item list-group-item-action">
                        <i class="fa fa-check" aria-hidden="true" ></i> Customer  Research
                        </li>
                        <li class="list-group-item list-group-item-action">
                        <i class="fa fa-check" aria-hidden="true" ></i> Competitor Benchmarking
                        </li>
                        <li class="list-group-item"> <i class="fa fa-times" aria-hidden="true"></i> Market Feasibility Study</li>
                        <li class="list-group-item"><i class="fa fa-times" aria-hidden="true"></i> Channel Partner Research</li>
                        </ul>
						<!--<a class="btn btn--secondary btn--bordered btn--rounded" href="#">Get Started</a>-->
					</div>
					<!--  Pricing heading  -->
				</div>
			</div>
			<!-- .pricing-table End -->
		</div><!-- .row end -->
	</div><!-- .container end -->
	<div class="section-divider"></div>
</section><!-- #pricing1 end -->




<!-- Footer #1
============================================= -->
            <?php include("$root/includes/footer.php"); ?>


<div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
 </div><!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="<?php $root;?>/assets/js/jquery-3.3.1.min.js"></script>
<script src=" <?php $root;?>/assets/js/plugins.js"></script>
<script src="<?php $root;?>/assets/js/functions.js"></script>
<script>$(document).ready(function(){$("#packages-menu, #consulting-package").addClass("active");});</script>
</body>
</html>