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
									<div class="text">2.4Ghz Telemetry System Temp/AMP Add-on</div>
								</div>
							</div>
							
							<div class="col-md-16 col-lg-16 ie_fix1">

								<!--[if lte IE 9]>
								<div id="slider1_container" style="position: relative; top: 0px; left: 0px; min-width: 1140px; height: 430px; background: #191919; overflow: hidden; background-color:#000000; margin-bottom:0px;">
								<![endif]-->
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
											<img u="image" src2="images/product/telemetry_sys_add/1.png" />
											<img u="thumb" src="images/product/telemetry_sys_add/1s.png" />
										</div>
										<div>
											<img u="image" src2="images/product/telemetry_sys_add/2.png" />
											<img u="thumb" src="images/product/telemetry_sys_add/2s.png" />
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
									$youtube_path =  "BpwqYKws0js";
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
												<p>Quanum 2.4Ghz voltage telemetry transmitter Current & Heat Sensor to be used with Quanum transmitter V2 module.</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default">
										<div class="panel-heading">	
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<h4 class="panel-title">
													<div class="red_sqr"><div class="red_arrow">&nbsp;</div></div>
													<div class="text">Spec</div>
												</h4>
											</a>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li>Direct DC Only.</li>
													<li>Current Sensor: 100A Max</li>
													<li>Temp Measurement: -20~80Deg C</li>
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
