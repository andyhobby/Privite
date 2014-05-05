<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<head>
	<?php include 'head.php'; ?>
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
			<div class="st-content catalog_bg" >
				<div class="st-content-inner">
					<div class="container full_container">
						<?php include 'header_nosocial.php'; ?>
					</div>
					<!-- bootstrap main layout -->
					<div class="container catalog_bg_inner">
						<div class="row" style="margin-top:8px;">
							<div class="col-md-16">
								<?php include 'social.php'; ?>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-16">
								<div class="cata_title">
									<div class="red_sqr2">&nbsp;</div>
									<div class="text">Models</div>
								</div>							
							</div>
						</div>
						<!-- first row -->
						<div class="row">
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-#">
										<img class="sample" src="images/cata/nova.png">
										<div class="caption">
											<img class="new_item" src="images/cata/new.png" />
											<h4>Relentless</h4>
											<div>The ultimate Catamaran Racing Boat offering high speed, excellent handlin.</div>
										</div>
									</a>
									<a href=""><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+relentless" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-relentless.php">
										<img class="sample" src="images/cata/relentless.png">
										<div class="caption">
											<h4>Relentless</h4>
											<div>The ultimate Catamaran Racing Boat offering high speed, excellent handlin.</div>
										</div>
									</a>
									<a href="product-relentless.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+relentless" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
								
							</div>
							<div class="col-md-8 col-lg-6">						
								<div class="thumbnail right_caption">
									<a href="product-aquaholic.php">
										<img class="sample" src="images/cata/aquaholic.png">
										<div class="caption">
											<h4>Aquaholic</h4>
											<div>The ultimate Deep V Racing Boat offering high speed, excellent handling and killer good looks.</div>
										</div>
									</a>
									<a href="product-aquaholic.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+aquaholic" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-skull.php">
										<img class="sample" src="images/cata/skull.png">
										<div class="caption">
											<h4>Skull Crusher</h4>
											<div>Are you ready for the ultimate in bone breaking, dirt pounding R/C monster truck action?</div>
										</div>
									</a>
									<a href="product-skull.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+skull+crusher" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>

							<div class="col-md-8 col-lg-5">			
								<div class="thumbnail right_caption">
									<a href="product-vandal.php">
										<img class="sample" src="images/cata/vandal.png">
										<div class="caption">
											<h4>Vandal</h4>
											<div>Lightweight yet rigid offering a perfect combination of weight savings and strength.</div>
										</div>
									</a>
									<a href="product-vandal.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+vandal" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							<div class="col-md-8 col-lg-6">
								<div class="thumbnail right_caption">
									<a href="product-toxic.php">
										<img class="sample" src="images/cata/toxic.png">
										<div class="caption">
											<h4>Toxic</h4>
											<div>High speed performance and off road capabilities the Toxic Nitro.</div>
										</div>
									</a>
									<a href="product-toxic.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+toxic" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-eguana.php">
										<img class="sample" src="images/cata/eguana.png">
										<div class="caption">
											<h4>E-Guana</h4>
											<div>Equipped with a 35A brushless power system, oil filled shocks, and fully adjustable suspension,</div>
										</div>
									</a>
									<a href="product-eguana.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+-guana" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
						</div>
						
						
						<!-- Telemetry -->
						<div class="row">
							<div class="col-md-16">
								<div class="cata_title">
									<div class="red_sqr2">&nbsp;</div>
									<div class="text">Telemetry</div>
								</div>
							</div>
						</div>
						<!-- first row -->
						<div class="row">
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-telesys.php">
										<img class="sample" src="images/cata/telesys.png">
										<div class="caption">
											<h4>2.4Ghz Telemetry System</h4>
											<div>Real-time and accurate voltage, current, mAh and temperature display.</div>
										</div>
									</a>
									<a href="product-telesys.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+telemetry" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-addon.php">
										<img class="sample" src="images/cata/addon.png">
										<div class="caption">
											<h4>2.4Ghz Telemetry System Temp/AMP Add-on</h4>
											<div>Telemetry transmitter Current & Heat Sensor</div>
										</div>
									</a>
									<a href="product-addon.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+telemetry+add" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							<div class="col-md-8 col-lg-6">
								<div class="thumbnail right_caption">
									<a href="product-groundstation.php">
										<img class="sample" src="images/cata/groundstation.png">
										<div class="caption">
											<h4>Ground Station</h4>
											<div>DIY ground station in one case, it is the perfect base for your Ground Station Project.</div>
										</div>
									</a>
									<a href="product-groundstation.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+ground+station" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-alexmos3.php">
										<img class="sample" src="images/cata/alexmos3.png">
										<div class="caption">
											<h4>AlexMos Brushless Gimbal Controller 3</h4>
											<div>Set the mark in the industry for performance</div>
										</div>
									</a>
									<a href="product-alexmos3.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+alexmos+3" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-alexmos2.php">
										<img class="sample" src="images/cata/alexmos2.png">
										<div class="caption">
											<h4>AlexMos Brushless Gimbal Controller 2</h4>
											<div>Set the mark in the industry for performance</div>
										</div>
									</a>
									<a href="product-alexmos2.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+alexmos+2" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							<div class="col-md-8 col-lg-6">
								<div class="thumbnail right_caption">
									<a href="product-gpslogger.php">
										<img class="sample" src="images/cata/gps.png">
										<div class="caption">
											<h4>GPS Logger</h4>
											<div>Packs the power of a U-BLOX NEO-6 GPS receiver, and records everything</div>
										</div>
									</a>
									<a href="product-gpslogger.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+gps+logger" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
						</div>
						
						
						<!-- Fun Stuff -->
						<div class="row">
							<div class="col-md-16">
								<div class="cata_title">
									<div class="red_sqr2">&nbsp;</div>
									<div class="text">Fun Stuff</div>
								</div>
							</div>
						</div>
						<!-- first row -->
						<div class="row">
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-rtrbomb.php">
										<img class="sample" src="images/cata/rtrbomb.png">
										<div class="caption">
											<h4>RTR Bomb System 1/6</h4>
											<div>Ready to drop!</div>
										</div>
									</a>
									<a href="product-rtrbomb.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+rtr+bomb" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-snowski.php">
										<img class="sample" src="images/cata/ski.png">
										<div class="caption">
											<h4>Snow Ski 270mm</h4>
											<div>Can be used on variety of planes and comes with a spare spring</div>
										</div>
									</a>
									<a href="product-snowski.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+snow+ski" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							<div class="col-md-8 col-lg-6">
								<div class="thumbnail right_caption">
									<a href="product-sparebomb.php">
										<img class="sample" src="images/cata/rtrbomb_spare.png">
										<div class="caption">
											<h4>Spare Bomb for RTR Bomb System</h4>
											<div>Spare Bomb for RTR Bomb System</div>
										</div>
									</a>
									<a href="product-sparebomb.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+spare+rtr+bomb" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
						</div>
						
						
						<!-- FPV -->
						<div class="row">
							<div class="col-md-16">
								<div class="cata_title">
									<div class="red_sqr2">&nbsp;</div>
									<div class="text">FPV</div>
								</div>
							</div>
						</div>
						<!-- first row -->
						<div class="row">
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-2208motor.php">
										<img class="sample" src="images/cata/2208motor.png">
										<div class="caption">
											<h4>2208 Precision Brushless Gimbal Motor</h4>
											<div>Pre-wound for optimal torque and smoothness</div>
										</div>
									</a>
									<a href="product-2208motor.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+2208" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
								</div>
							</div>
							<div class="col-md-8 col-lg-5">
								<div class="thumbnail right_caption">
									<a href="product-4008motor.php">
										<img class="sample" src="images/cata/4008motor.png">
										<div class="caption">
											<h4>4008 Precision Brushless Gimbal Motor</h4>
											<div>Pre-wound for optimal torque and smoothness</div>
										</div>
									</a>
									<a href="product-4008motor.php"><div class="cata_view_btn">View More</div></a>
									<a href="http://www.hobbyking.com/hobbyking/store/RC_PRODUCT_SEARCH.asp?strSearch=quanum+4008" target="_blank"><div class="cata_buy_btn">Buy Now<img src="images/cata/cata_buy.png" /></div></a>
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

<?php include 'foot.php'; ?>

