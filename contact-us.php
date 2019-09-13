<?php 
$root = $_SERVER['DOCUMENT_ROOT'];

?><!DOCTYPE html>
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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>
<!-- Fonts
    ============================================= -->
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800%7CRoboto:300i,400,400i,500,500i,700" rel="stylesheet" type="text/css">

<!-- Stylesheets
    ============================================= -->
<link href="assets/css/external.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title>Consultivo | Consulting Business Consulting Finance Html5 Template</title>
</head>
<body>
    <div class="preloader">
	<div class="reverse-spinner"></div>
</div><!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="wrapper clearfix">

<?php include("$root/includes/header.php"); ?>

<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
        <img src="assets/images/page-titles/7.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="title title-6 text-center">
                    <div class="title--heading">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="index-2.html">about</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-lg-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->


<!-- Contact #1
============================================= -->
<section id="contact1" class="contact contact-1 pt-110 pb-110 text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-2 mb-50 text--center">
                    <p class="heading--subtitle">Have A Question?</p>
                    <h2 class="heading--title">Get in touch</h2>
                    <p class="heading--desc mb-0">We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.</p>
                </div>
            </div>
            <!-- .col-lg-6 end -->
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                <form class="mb-0" action="<?php $root;?>/assets/php/contact.php" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="Your Name" required="">
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="Email">
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <input type="text" class="form-control" name="contact-phone" id="contact-phone" placeholder="Phone">
                        </div>
                    </div>
                    
                                        <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <input type="text" class="form-control" name="contact-location" id="contact-location" placeholder="Your Location" required="">
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <input type="text" class="form-control" name="contact-company" id="contact-company" placeholder="Your Company Name">
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <select  class="form-control" name="contact-service" id="contact-service">
                            <option>-- Choose --</option>
                            <option value="Metriken Consulting">Metriken Consulting</option>
                            <option value="Metriken Digital">Metriken Digital</option>
                            <option value="Metriken Communications">Metriken Communications</option>
                            <option value="Metriken Analytics">Metriken Analytics</option>
                            <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                            <textarea class="form-control" name="contact-message" id="contact-message" rows="2" placeholder="Request Details:"></textarea>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="submit" value="Submit Request" name="submit" class="btn btn--primary">
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="contact-result"></div>
                        </div>
                    </div>
                </form>
                <!-- form end -->
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #contact1 end -->
<!-- Google maps
============================================= -->


<!-- Contact Info
============================================= -->
<section id="contactInfo" class="contact contact-info bg-white text--center pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="contact--info">
                    <h3>Our Address</h3>
                    <p>Metriken Integrated Business Solutions Pvt Ltd , New No. 10,  Gopalapuram 1st St, Chennai, Tamil Nadu 600086. <br/><br/>	
                    <b>Land Mark 1 </b>- Lane Adjacent to Late Shri Kalaignar Karunanidhi Home.<br/>	<br/>	
<b>Land Mark 2</b> -  Opposite to Chennai Central Cooperative Bank.</p>
                    <a class="link--styled" href="#">Get Directions</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3>Contact at</h3>
                    <p>Mobile : +91 9840537565</p>
                    <p>Email : Info@metrikensolutions.com</p>
                    <a class="link--styled" href="#">Send a Message</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
       
            <!-- .col-lg-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #contactInfo end -->


<section class="google-maps pb-0 pt-0">
    
        <div class="row" style="margin:3%;">
            <div class="col-xs-3  col-sm-3  col-md-3">
            <div class="fb-page" data-href="https://www.facebook.com/metriken/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/metriken/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/metriken/">Metriken</a></blockquote></div>
            </div>
              <div class="col-xs-1  col-sm-1  col-md-1"></div>
            <div class="col-xs-6 col-sm-6  col-md-6">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Metriken%20Solution&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
            </div>
             <div class="col-xs-2  col-sm-2  col-md-2">
            <!--<a class="twitter-timeline" href="https://twitter.com/Metriken1?ref_src=twsrc%5Etfw">Tweets by Metriken1</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
            
            </div>
    
    
    </div>
</section>



<!-- Footer #1
============================================= -->

<?php include("$root/includes/footer.php"); ?>


<div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
 </div><!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>