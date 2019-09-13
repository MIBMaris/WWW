<?php
$root = $_SERVER['DOCUMENT_ROOT'];

if($page_id=="Consulting"){
	$bg_image='<img src="/assets/images/page-titles/8.jpg" alt="Background" />';
	$title="<h1>Metriken Consulting</h1>";
	$list='<li class="breadcrumb-item">
		   <a href="../metriken-consulting/sales-and-marketing.php" id="sales-section">Sales & Marketing</a></li>
           <li class="breadcrumb-item">
		   <a href="../metriken-consulting/business-model.php" id="model-section">Business Model</a></li>
           <li class="breadcrumb-item">
           <a href="../metriken-consulting/market-research.php" id="market-section">Market Research</a></li>';
		}
        
        
if($page_id=="Digital"){
	$bg_image='<img src="/assets/images/page-titles/8.jpg" alt="Background" />';
	$title="<h1>Metriken Digital</h1>";
	$list='<li class="breadcrumb-item">
		   <a href="../metriken-digital/website-development.php" id="website-section">Website Development</a></li>
           
		   <li class="breadcrumb-item">
		   <a href="../metriken-digital/search-engine-optimization.php" id="seo-section">Search Engine Optimization</a></li>
           <li class="breadcrumb-item">
           <a href="../metriken-digital/sem-pay-per-click.php" id="sem-section">SEM - Per pay click</a></li>
		    
			<li class="breadcrumb-item">
           <a href="../metriken-digital/social-media-marketing.php" id="smm-section">Social Media Marketing</a></li>

           <li class="breadcrumb-item">
           <a href="../metriken-digital/email-marketing.php" id="email-section">Email Marketing</a></li>';

		} 
		
if($page_id=="Communication"){
	$bg_image='<img src="/assets/images/page-titles/8.jpg" alt="Background" />';
	$title="<h1>Metriken Communication</h1>";
	$list='<li class="breadcrumb-item">
		   <a href="../metriken-communication/media-relation.php" id="media-section">Media Relation</a></li>
           <li class="breadcrumb-item">
		   <a href="../metriken-communication/content-marketing.php" id="content-section">Content Marketing</a></li>
           <li class="breadcrumb-item">
           <a href="../metriken-communication/event-and-experiential-marketing.php" id="event-section">Event & Experiential Marketing
</a></li>';
		}	
		
if($page_id=="Analytics"){
	$bg_image='<img src="/assets/images/page-titles/8.jpg" alt="Background" />';
	$title="<h1>Metriken Analytics</h1>";
	$list='<li class="breadcrumb-item">
		   <a href="../metriken-analytics/customer-engagement.php" id="customer-section">Customer Engagement</a></li>
           <li class="breadcrumb-item">
		   <a href="../metriken-analytics/data-driven-strategy.php" id="data-section">Data-driven Strategy</a></li>
           <li class="breadcrumb-item">
           <a href="../metriken-analytics/contact-management.php" id="contact-section">Contact Management</a></li>';
		}				
		?>
<!-- Page Title
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
     <?php echo $bg_image;?>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="title text-center">
                    <div class="title--heading">
                         <?php echo $title;?>
                    </div>
                    <div class="clearfix"></div> 
                    <ol class="breadcrumb d-flex justify-content-center">
                      <?php echo $list;?>
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