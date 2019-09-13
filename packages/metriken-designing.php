
<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
$page_id="Designing-Package";
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

.pricing-panel .pricing--heading {
	box-shadow: 0 10px 20px rgba(224, 224, 224, 0.4);
	border-radius: 2px;
	background-color: #ffffff;
	padding: 25px 40px;
	/*50px 64px; */
	margin-bottom: 30px;
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

 <?php include("$root/includes/packages-section.php"); ?>

<!-- #pricing1 end -->

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
<script>$(document).ready(function(){$("#packages-menu, #designing-package").addClass("active");});</script>
</body>
</html>