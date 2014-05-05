<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<head>
	<!-- style for tile -->
	<link rel="stylesheet" type="text/css" href="css/tile_plugin/MetroJs.lta.css" />
	<!-- end style for tile -->
	<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" href="css/index_fix_ie.css" />
	<![endif]-->
	<?php include 'head.php'; ?>
	
	<style>
	.container { width: 100%; }
	</style>
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
			<div class="st-content">
				<?php include 'header.php'; ?>				
				<div class="st-content-inner index_bg check1">	
					<a href="#" class="view_btn"><img src="images/index/view_btn.png" /></a>
				
					<!-- bootstrap main layout -->
					<div class="container">						
						<div class="row">
							<div class="col-md-16">
								<div class="a1600">1600</div>
								<div class="a1400">1400</div>
								<div class="a992">992</div>
								<div class="a768">768</div>
								<div class="a767">max 767</div>
								
								<div class="all_tile">
									<div class="tiles tile-group">
										<a href="product-skull.php">
											<div class="live-tile" data-mode="flip" data-delay="5000">
												<div class="tile_pic"><img src="images/index/tile1.png" /></div>						
												<div class="tile_back">Skull<br />Crusher</div>
											</div>
										</a>
										<a href="product-relentless.php">
											<div class="live-tile tile_marleft" data-direction="horizontal" data-mode="flip" data-delay="4000">           
												<div class="tile_back" style="background-color:#595959;">Relentless</div>
												<div class="tile_pic"><img src="images/index/tile2.png" /></div>
											</div>
										</a>
									</div>
									
									<div class="tiles tile-group">
										<a href="product-groundstation.php">
											<div class="live-tile tile_marleft" data-direction="horizontal" data-mode="flip" data-delay="7000"> 
												<div class="tile_back">Ground<br />Station</div>
												<div><img src="images/index/tile3.png" /></div>
											</div>
										</a>
										<a href="product-telesys.php">
											<div class="live-tile tile_marleft" data-mode="flip" data-delay="8000">
												<div class="tile_pic"><img src="images/index/tile4.png" /></div>
												<div class="tile_back" style="background-color:#343434;">Telemetry System</div>
											</div>
										</a>
									</div>
									
									<div class="tiles tile-group">
										<a href="#" target="_blank">
											<div class="live-tile" data-direction="horizontal" data-mode="flip" data-delay="5000"> 
												<div class="tile_back" style="background-color:#595959;">GPS Logger</div>
												<div><img src="images/index/tile5.png" /></div>
											</div>
										</a>
										<a href="product-toxic.php">
											<div class="live-tile tile_marleft" data-mode="flip" data-delay="4000">           
												<div class="tile_back" style="background-color:#343434;">Toxic</div>
												<div><img src="images/index/tile6.png" /></div>
											</div>
										</a>
									</div>
									
									<div class="tiles tile-group">
										<a href="product-rtrbomb.php">
											<div class="live-tile tile_marleft" data-mode="flip" data-delay="7000">
												<div class="tile_pic"><img src="images/index/tile7.png" /></div>
												<div class="tile_back">RTR Bomb<br />System</div>	
											</div>
										</a>
										<a href="product-4008motor.php">
											<div class="live-tile tile_marleft" data-direction="horizontal" data-mode="flip" data-delay="8000">
												<div class="tile_back" style="background-color:#787878;">4008 Motor</div>
												<div><img src="images/index/tile8.png" /></div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end bootstrap main layout -->
					<br /><br />
					<div class="large_fix"><br /><br /><br /></div>
						
					<div class="slide_group">
						<div class="slide1" onclick="change_slide(1)">&nbsp;</div>
						<div class="slide2" onclick="change_slide(2)">&nbsp;</div>
						<div class="slide3" onclick="change_slide(3)">&nbsp;</div>
					</div>
				</div>
				
				<div class="row mobile_layout" style="margin-right:0;">
					<div class="col-xs-8 col-sm-4">								
						<a href="product-skull.php">
							<div class="live-tile" data-direction="horizontal" data-mode="flip" data-delay="5000">
								<div><img src="images/index/tile1.png" /></div>			
								<div class="tile_back">Skull Crusher</div>
							</div>
						</a>
					</div>
					
					<div class="col-xs-8 col-sm-4">								
						<a href="product-relentless.php">
							<div class="live-tile tile_marleft" data-mode="flip" data-delay="4000">           
								<div class="tile_back" style="background-color:#595959;">Relentless</div>
								<div><img src="images/index/tile2.png" /></div>
							</div>
						</a>
					</div>
					
					<div class="col-xs-8 col-sm-4">								
						<a href="product-groundstation.php">
							<div class="live-tile tile_marleft" data-mode="flip" data-delay="7000"> 
								<div class="tile_back">Ground Station</div>
								<div><img src="images/index/tile3.png" /></div>
							</div>
						</a>
					</div>
					
					<div class="col-xs-8 col-sm-4">								
						<a href="product-telesys.php">
							<div class="live-tile tile_marleft" data-direction="horizontal" data-mode="flip" data-delay="8000">
								<div><img src="images/index/tile4.png" /></div>
								<div class="tile_back" style="background-color:#343434;">Telemetry System</div>
							</div>
						</a>
					</div>
					
					<div class="col-xs-8 col-sm-4">								
						<a href="#" target="_blank">
							<div class="live-tile" data-mode="flip" data-delay="5000"> 
									<div class="tile_back" style="background-color:#595959;">GPS Logger</div>
									<div><img src="images/index/tile5.png" /></div>
							</div>
						</a>
					</div>
					
					<div class="col-xs-8 col-sm-4">								
						<a href="product-toxic.php">
							<div class="live-tile tile_marleft" data-direction="horizontal" data-mode="flip" data-delay="4000">           
								<div class="tile_back" style="background-color:#343434;">Toxic</div>
								<div><img src="images/index/tile6.png" /></div>
							</div>
						</a>
					</div>
					
					<div class="col-xs-8 col-sm-4">								
						<a href="product-rtrbomb.php">
							<div class="live-tile tile_marleft" data-mode="flip" data-delay="7000">
								<div><img src="images/index/tile7.png" /></div>
								<div class="tile_back">RTR Bomb System</div>	
							</div>
						</a>
					</div>
					
					<div class="col-xs-8 col-sm-4">								
						<a href="product-4008motor.php">
							<div class="live-tile tile_marleft" data-mode="flip" data-delay="8000">
								<div class="tile_back" style="background-color:#787878;">4008 Motor</div>
								<div><img src="images/index/tile8.png" /></div>
							</div>
						</a>
					</div>
				</div>
						
			</div>
		</div>
		
	</div><!-- /st-container -->
</body>
<?php } ?>
</html>

<?php include 'foot.php'; ?>
<!-- script for tile -->
<script src="js/tile_plugin/MetroJs.lta.js"></script>
<!-- end script for tile -->

<script>
	$(".live-tile, .flip-list").not(".exclude").liveTile();
</script>

<script>
var slide_num = 1;
var $body = $('.st-content-inner');
var posit_y, posit_x = "";
var link = "";

setInterval(function() {
	if ($body.hasClass('check' + slide_num)) {
		
		var next_slide_num = slide_num + 1;
		if (next_slide_num > 3) {
			next_slide_num = 1
		}
		
		if (next_slide_num == 1) { posit_y = "31%";	posit_x = "3.5%"; link="#1"; } 
		else if (next_slide_num == 2) { posit_y = "20%"; posit_x = "3.5%"; link="product-relentless"; } 
		else if (next_slide_num == 3) {	posit_y = "16%"; posit_x = "6%"; link="product-eguana"; }
		
		$('.index_bg').css('background-image', 'url(images/index/bg' + next_slide_num + '.png)');
		$('.view_btn').css('margin-top', posit_y);
		$('.view_btn').css('margin-left', posit_x);
		$('.view_btn').attr("href",link);
		
		$('.slide_group div').css('background-position', '0 0');
		$('.slide' + next_slide_num).css('background-position', '0 -47px');
		$body.removeClass('check1');
		$body.removeClass('check2');
		$body.removeClass('check3');
		$body.addClass('check' + next_slide_num);
		slide_num = slide_num + 1;
		if (slide_num > 3) {
			slide_num = 1
		}
	}
}, 6000);

function change_slide(num) {
	if (num == 1) { posit_y = "31%";	posit_x = "3.5%"; link="#1"; } 
	else if (num == 2) { posit_y = "20%"; posit_x = "3.5%"; link="product-relentless"; } 
	else if (num == 3) {	posit_y = "16%"; posit_x = "6%"; link="product-eguana"; }
		
	$('.index_bg').css('background-image', 'url(images/index/bg' + num + '.png)');
	$('.view_btn').css('margin-top', posit_y);
	$('.view_btn').css('margin-left', posit_x);
	$('.view_btn').attr("href",link);
	
	$('.slide_group div').css('background-position', '0 0');
	$('.slide' + num).css('background-position', '0 -47px');
	$body.removeClass('check1');
	$body.removeClass('check2');
	$body.removeClass('check3');
	$body.addClass('check' + num);
}
</script>
