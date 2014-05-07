<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<head>
	<?php include 'head.php'; ?>
	<!-- style for slider -->	
	<link rel="stylesheet" type="text/css" href="css/slider_plugin/slide.css" />
	
	<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" href="css/product_fix_ie.css" />
	<![endif]-->
	 
	<noscript>
	<style>
	.es-carousel ul{ display:block; }
	</style>
	</noscript>
	<!-- end style for slider -->
</head>

<?php 
$IE6 = (ereg('MSIE 6',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
$IE7 = (ereg('MSIE 7',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
$IE8 = (ereg('MSIE 8',$_SERVER['HTTP_USER_AGENT'])) ? true : false;

if (($IE6 == 1) || ($IE7 == 1)) {
?>
   <body><div style="color:#ffffff; font-size:25px; margin-top:20%; text-align:center;"><img src="images/logo.png" /><br />Your Browser is too old please change another browser or update broswer</div></body>
<?php 
} else { 
?>
<body>
	<div id="st-container" class="st-container">
		<?php include 'menu.php'; ?>

		<div class="st-pusher">
			<div class="st-content bg1">
				<div class="st-content-inner">	
					<div class="container full_container">
						<?php include 'header_nosocial.php'; ?>
					</div>
				
					<!-- bootstrap main layout -->
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<div class="back_cata">
									<a href="catalog.php"><img src="images/product/back_prod" />Products</a>
								</div>
							</div>
							<div class="col-md-13">
								<?php include 'social.php'; ?>
							</div>
						</div>
						
						<div class="row all_back">
						
							<div class="col-md-16">
								<div class="product_title">
									<div class="red_sqr2">&nbsp;</div>
									<div class="text">Relentless</div>
								</div>
							</div>
							
							<div class="col-md-16 col-lg-16 ie8_fix">
								<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 960px; height: 430px; overflow: hidden; background-color:#000000;">

									<!-- Loading Screen -->
									<div u="loading" style="position: absolute; top: 0px; left: 0px;">
										<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
											background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
										</div>
										<div style="position: absolute; display: block; background: url(images/slider/loading.gif) no-repeat center center; top: 0px; left: 0px;width: 100%;height:100%;">
										</div>
									</div>

									<!-- Slides Container -->
									<div u="slides" style="cursor: move; position: absolute; left: 280px; top: 0px; width: 640px; height: 426px; overflow: hidden;">
										<div>
											<img u="image" src2="images/product/relentless/1.png" />
											<img u="thumb" src="images/product/relentless/1s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/2.png" />
											<img u="thumb" src="images/product/relentless/2s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/3.png" />
											<img u="thumb" src="images/product/relentless/3s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/4.png" />
											<img u="thumb" src="images/product/relentless/4s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/5.png" />
											<img u="thumb" src="images/product/relentless/5s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/6.png" />
											<img u="thumb" src="images/product/relentless/6s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/7.png" />
											<img u="thumb" src="images/product/relentless/7s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/8.png" />
											<img u="thumb" src="images/product/relentless/8s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/9.png" />
											<img u="thumb" src="images/product/relentless/9s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/10.png" />
											<img u="thumb" src="images/product/relentless/10s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/11.png" />
											<img u="thumb" src="images/product/relentless/11s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/12.png" />
											<img u="thumb" src="images/product/relentless/12s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/13.png" />
											<img u="thumb" src="images/product/relentless/13s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/14.png" />
											<img u="thumb" src="images/product/relentless/14s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/relentless/15.png" />
											<img u="thumb" src="images/product/relentless/15s.png" />
										</div>
									</div>
									
									<!-- Arrow Navigator Skin Begin -->
									<!-- Arrow Left -->
									<span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 248px;">
									</span>
									<!-- Arrow Right -->
									<span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
									</span>
									<!-- Arrow Navigator Skin End -->
				
				
									<!-- Thumbnail Navigator Skin 02 Begin -->
									<div u="thumbnavigator" class="jssort02" style="position: absolute; width: 240px; height: 480px; left:0px; top:-10px;">
										<div u="slides" style="cursor: move;">
											<div u="prototype" class="p" style="position: absolute; width: 99px; height: 66px; top: 0; left: 0;">
												<div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
												<div class=c>
												</div>
											</div>
										</div>
										<!-- Thumbnail Item Skin End -->
									</div>
									<!-- Thumbnail Navigator Skin End -->
								</div>
								<!-- Jssor Slider End -->
								<img width=0 height=0 />

								<?php 
									$youtube_path =  "tt-jdNLJaLw";
									include 'video.php'; 
								?>
							</div>	


							<div class="col-md-16 col-lg-16">
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<h4 class="panel-title">
													<div class="red_sqr"><div class="red_arrow_down">&nbsp;</div></div>
													<div class="text">Overview</div>
												</h4>
											</a>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
											<div class="panel-body">
												<p>When it comes to brushless R/C boat action, it simply doesn’t get any better than this!</p>
												<p>The Quanum Relentless is the ultimate Catamaran Racing Boat offering high speed, excellent handling and killer good looks. The vibrant red paint scheme and expertly applied racing decals are sure to turn heads wherever you go!</p>
												<p>A potent watercooled brushless power system comes pre-installed providing extreme power to the prop. The motor is an outrunner which produces massive amounts of torque. This allows the boat to get on step almost instantly upon hitting the throttle. The precision machined alloy rudder and pre-installed high torque steering servo makes for crisp steering response and keeps the boat upright during hard cornering.</p>
												<p>The hull is constructed from lightweight yet durable ABS – this is where the Relentless differs from the others. The hull has a beautifully painted gloss finish just like fiberglass, yet it’s offered at a much lower cost. The decals are applied before the final clear coat, sealing them from the elements and providing a top quality look.</p>
												<p>This boat will be ready to run in about 10 minutes after opening the box thanks to the high level of pre-assembly. You will simply need to bolt on the rudder and propeller, connect the steering linkage, install your receiver and you’re ready to go!</p>
												<p>	This is hands down the most fun, exciting and easy to setup brushless race boat we’ve ever had our hands on here at the HobbyKing office, we know you’ll love it too!</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default">
										<div class="panel-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<h4 class="panel-title">
													<div class="red_sqr"><div class="red_arrow">&nbsp;</div></div>
													<div class="text">Feature</div>
												</h4>
											</a>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li>High performance watercooled brushless power system</li>
													<li>Vibrant race inspired paint scheme</li>
													<li>Lightweight ABS hull</li>
													<li>High torque steering servo</li>
													<li>3mm direct drive flex shaft</li>
													<li>Powered by a 3S 2200mAh lipoly battery pack (sold separately)</li>
													<li>Almost Ready to Run – simply add your own radio system and battery</li>
												</ul>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default">
										<div class="panel-heading">	
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<h4 class="panel-title">
													<div class="red_sqr"><div class="red_arrow">&nbsp;</div></div>
													<div class="text">Specs</div>
												</h4>
											</a>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li>Overall Length: 740mm</li>
													<li>Hull Length: 650mm</li>
													<li>Beam: 210mm</li>
													<li>Weight: 1200g (w/out battery)</li>
													<li>Motor: Watercooled 2815 brushless outrunner (included)</li>
													<li>ESC: 50A watercooled brushless (included)</li>
													<li>Servo: High torque standard size (included)</li>
													<li>Hull Material: ABS</li>
												</ul>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default">
										<div class="panel-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
												<h4 class="panel-title">
													<div class="red_sqr"><div class="red_arrow">&nbsp;</div></div>
													<div class="text">Included</div>
												</h4>
											</a>
										</div>
										<div id="collapseFour" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li>Quanum Relentless Brushless Catamaran Racing Boat (ARR)</li>
													<li>All necessary hardware</li>
													<li>User Manual</li>
													<li>Spare propeller</li>
													<li>XT60 plug</li>
													<li>Tools</li>
												</ul>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default">
										<div class="panel-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
												<h4 class="panel-title">
													<div class="red_sqr"><div class="red_arrow">&nbsp;</div></div>
													<div class="text">Required</div>
												</h4>
											</a>
										</div>
										<div id="collapseFive" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li>2CH transmitter and receiver</li>
													<li>3S 2200mAh lipoly battery</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>				
					</div>
					<!-- end bootstrap main layout -->
					<br /><br />
				</div>
			</div>
		</div>
		
	</div><!-- /st-container -->
</body>
<?php } ?>
</html>


<!-- script for slider -->
<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
	<div class="rg-image-wrapper">
		{{if itemsCount > 1}}
			<div class="rg-image-nav">
				<a href="#" class="rg-image-nav-prev">Previous Image</a>
				<a href="#" class="rg-image-nav-next">Next Image</a>
			</div>
		{{/if}}
		<div class="rg-image"></div>
		<div class="rg-loading"></div>
		<div class="rg-caption-wrapper">
			<div class="rg-caption" style="display:none;">
				<p></p>
			</div>
		</div>
	</div>
</script>

<script type="text/javascript" src="js/slider_plugin/slide.js"></script>
<script type="text/javascript" src="js/slider_plugin/jssor.core.js"></script>
<script type="text/javascript" src="js/slider_plugin/jssor.utils.js"></script>
<script type="text/javascript" src="js/slider_plugin/jssor.slider.js"></script>
<!-- end script for slider -->

<?php include 'foot.php'; ?>
