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
									<div class="text">Ground Station</div>
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
											<img u="image" src="images/product/groundstation/1.png" />
											<img u="thumb" src="images/product/groundstation/1s.png" />
										</div>
										<div>
											<img u="image" src="images/product/groundstation/2.png" />
											<img u="thumb" src="images/product/groundstation/2s.png" />
										</div>
										<div>
											<img u="image" src="images/product/groundstation/3.png" />
											<img u="thumb" src="images/product/groundstation/3s.png" />
										</div>
										<div>
											<img u="image" src="images/product/groundstation/4.png" />
											<img u="thumb" src="images/product/groundstation/4s.png" />
										</div>
										<div>
											<img u="image" src="images/product/groundstation/5.png" />
											<img u="thumb" src="images/product/groundstation/5s.png" />
										</div>
										<div>
											<img u="image" src="images/product/groundstation/6.png" />
											<img u="thumb" src="images/product/groundstation/6s.png" />
										</div>
										<div>
											<img u="image" src="images/product/groundstation/7.png" />
											<img u="thumb" src="images/product/groundstation/7s.png" />
										</div>
										<div>
											<img u="image" src="images/product/groundstation/7.png" />
											<img u="thumb" src="images/product/groundstation/7s.png" />
										</div>
										<div>
											<img u="image" src="images/product/groundstation/8.png" />
											<img u="thumb" src="images/product/groundstation/8s.png" />
										</div>
										<div>
											<img u="image" src="images/product/groundstation/9.png" />
											<img u="thumb" src="images/product/groundstation/9s.png" />
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
												<p>The Quanum is a DIY ground station all in one case, it is the perfect base for your Ground Station Project, from just pure FPV to full PC based mission planning. This DIY Ground station comes equipped with everything from a system voltage monitor to an 8inch LCD display, and a range of internal power and cable connections, housed in a beautiful aluminum case with locks.</p>
												<p>The upper Case halve houses an 8inch LCD with a pop-out sun/glare shield. The LCD will accept everything from standard RCA video and audio as-well as up to 1024×768 VGA! There is also a nice LCD voltage monitor tied into the power bus for quick look at your supply voltage or internal battery. Under the face panel there are video and audio input cables that feed the monitor and lower case A/V ports and two SMA (male to female) antenna extensions that lead out to the top face plate, you can connect your choice of video receiver or even a video receiver on one lead and a telemetry radio on the other. All cleanly installed under a black brushed aluminum face panel with a porthole for accessibility.</p>
												<p>The lower case halve is fitted with 2 USB ports, A/V RCA style video in/out and power port tied to the Master switch and an access hatch for easy battery swaps or storage.</p>
												<p>This is a must for anyone serious about FPV With a big bright sun shielded LCD you will have a great view, or you can plug your goggles in the panel mounted A/V and power ports and let spectators get to watch on the monitor! There is plenty of room for a nano or pico ITX PC and with the VGA capable monitor and USB ports, it could make for an ultra-clean and durable commercial grade Telemetry driven ground station.</p>
												<p>*Note: This is a DIY Ground station and does not come with video receivers or PC components. It is dependent on your application for proper component selection and fitment.</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default">
										<div class="panel-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<h4 class="panel-title">
													<div class="red_sqr"><div class="red_arrow">&nbsp;</div></div>
													<div class="text">Connections</div>
												</h4>
											</a>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<b>(Upper)</b>
													<li>SMA extensions x 2 (male to female)for video and or telemetry antennas</li>
													<li>12v bullet x 2 (male)</li>
													<li>RCA video and audio</li>
													<b>(Lower)</b>
													<li>12v bullet 2 female and on male</li>
													<li>RCA video audio out for Goggle or DVR output</li>
													<li>USB extensions for possible micro ATX or antenna tracker X2</li>
													<li>Power Switch</li>
												</ul>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default">
										<div class="panel-heading">	
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<h4 class="panel-title">
													<div class="red_sqr"><div class="red_arrow">&nbsp;</div></div>
													<div class="text">Monitor Specs</div>
												</h4>
											</a>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li>Power Consumption: DC12V 400mA</li>
													<li>Panel Size and Aspect: 8inch 4:3</li>
													<li>Resolution: 800×600 pixel</li>
													<li>Viewing Angle: 130Deg</li>
													<li>Brightness: 250cd/m2</li>
													<li>contrast 400:1</li>
													<li>Response time: 12ms</li>
													<li>Input: BNC, RCA Video-audio, VGA, YUV</li>
													<li>VGA Inputs resolution: 640×480, 800×600, 1024×768 all 60Hz requires VGA 15 pin to 8 pinadapter</li>
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
													<li>Case</li>
													<li>LCD Monitor with sunshield</li>
													<li>Voltage display</li>
													<li>Power plug</li>
													<li>Keys</li>
													<li>Schematic and instructions</li>
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
