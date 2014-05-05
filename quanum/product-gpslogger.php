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
									<div class="text">GPS Logger</div>
								</div>
							</div>
							
							<div class="col-md-16 col-lg-16 ie_fix1">

								<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 960px; height: 430px; background: #191919; overflow: hidden; background-color:#000000;">

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
											<img u="image" src="images/product/gpslogger/1.png" />
											<img u="thumb" src="images/product/gpslogger/1s.png" />
										</div>
										<div>
											<img u="image" src="images/product/gpslogger/2.png" />
											<img u="thumb" src="images/product/gpslogger/2s.png" />
										</div>
										<div>
											<img u="image" src="images/product/gpslogger/3.png" />
											<img u="thumb" src="images/product/gpslogger/3s.png" />
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
							</div>	

							<?php 
								$video = "null";
								include 'video.php'; 
							?>

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
												<p>We have all heard the “fishing stories” out at the field and on the track, “My RC car does 120mph” or “My ducted fan accelerates going vertical!”…well, it’s time to prove it!</p>
												<p>The Quanum GPS Logger V2 Is a stand-alone device that Packs the power of a U-BLOX NEO-6 GPS receiver, and records everything from; distance traveled, start and end positions, UTC time stamps, course and speed…and the infamous MAX speed the logger reached. The data can be viewed on the integrated backlit LCD or the NEMA data can be downloaded to a PC and plotted out on map sites such as Google Earth. To save weight the logger gets its power from a spare channel from your receiver so no additional battery is needed.</p>
												<p>There are endless uses, from finding your model’s maximum speed and utilizing the hard-data to refine your set-up, and of course there is provable bragging rights you could flaunt around on youtube! Heck, you could even attach a small battery pack and drop it in your kids backpack and see if they really went to the library after school or not…The Quanum GPS Logger is just one of those tools you should just have in your tool box for when hard-data is better than your calibrated eyeball.</p>
												<p>*Note: To download the NMEA file to your computer for history mapping, you will need a standard RS-232 cable – not included. All other information can be viewed via the integrated LCD and menu</p>
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
													<li>Receiver: NEO-6M U-BLOX</li>
													<li>Frequency: L1, 1575.42 MHz, C/A Code</li>
													<li>Channels: 50</li>
													<li>Max Speed Recording: 1000km/h</li>
													<li>Sensitivity: -161 dBm (Tracking & Navigation)</li>
													<li>Accuracy: 2.5 m (GPS), 2.0 m (SBAS)</li>
													<li>Cold Start: 27 s approx.</li>
													<li>Navigation: UTC date and time, geographic coordinates, time, speed, course</li>
													<li>Logging: geographic coordinates, date and time, speed, course, distance (up to 100km)</li>
													<li>Logging time: >1000 hours</li>
													<li>Logging ON/OFF Control: Manual, RC (1520us)</li>
													<li>Indicator: LCD, 2*16 with backlit</li>
													<li>Control: menu/page, enter</li>
													<li>Voltage: 4.5V ~ 6.5V</li>
													<li>Current: 80mA typical</li>
													<li>Size: 24 x 77 x 18mm</li>
													<li>Weight: 43g</li>
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
