<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Basher.com</title>

<!-- link css -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css"  href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css"  href="css/normalize.css">
<!-- link js -->
<script type="text/javascript" src="js/bootstrap.js"></script>

<body>

<div class="header" style="background-color:#dfdfdf; height:100px;">
	<div class="container">
		<div class="row">
		  <div class="col-md-16">
			<nav class="navbar navbar-default" role="navigation">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">Basher</a>
				</div>

				<!-- Collect the nav links for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="#">Empty</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Support</a></li>
					<li><a href="#">Stocklist</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		  </div>
		</div>
	</div>
</div>

<div>
	<div class="container" style="width:100%; height:200px;">
		<div class="row">
			<script src="js/slider/jquery-1.11.0.min.js"></script>		
			<script src="js/slider/jssor.slider.mini.js"></script>
			
			<script>
				jQuery(document).ready(function ($) {

					var options = {
						$DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
						$DirectionNavigatorOptions: {                       //[Optional] Options to specify and enable direction navigator or not
							$Class: $JssorDirectionNavigator$,              //[Requried] Class to create direction navigator instance
							$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
							$AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
							$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
						},
						$SlideDuration: 700,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
						$DirectionNavigatorOptions: {
							$Class: $JssorDirectionNavigator$,              //[Requried] Class to create direction navigator instance
							$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
							$AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
							$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
						},
						$AutoPlay: true
					};

					var jssor_slider1 = new $JssorSlider$("slider1_container", options);
					//responsive code begin
					//you can remove responsive code if you don't want the slider scales while window resizes
					function ScaleSlider() {
						var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
						if (parentWidth)
							jssor_slider1.$SetScaleWidth(parentWidth);
						else
							window.setTimeout(ScaleSlider, 30);
					}

					//Scale slider immediately
					ScaleSlider();

					if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
						$(window).bind('resize', ScaleSlider);
					}
					//responsive code end
				});
			</script>

			<div id="slider1_container" style="position: relative; width: 960px; height: 340px; overflow: hidden;">
			<!-- Slides Container -->
			<div u="slides" style="cursor: move; position: absolute; width: 960px; height: 340px; top: 0px; left: 0px; overflow: hidden;">
				<div><img u="image" src="images/slider/1.jpg" /></div>
				<div><img u="image" src="images/slider/2.jpg" /></div>
			</div>
			<!-- Direction Navigator Skin Begin -->
			<style>
				/* jssor slider direction navigator skin 20 css */
				/*
				.jssord20l              (normal)
				.jssord20r              (normal)
				.jssord20l:hover        (normal mouseover)
				.jssord20r:hover        (normal mouseover)
				.jssord20ldn            (mousedown)
				.jssord20rdn            (mousedown)
				*/
				.jssord20l, .jssord20r, .jssord20ldn, .jssord20rdn
				{
					position: absolute;
					cursor: pointer;
					display: block;
					background: url(images/slider/d20.png) no-repeat;
					overflow:hidden;
				}
				.jssord20l { background-position: -3px -33px; }
				.jssord20r { background-position: -63px -33px; }
				.jssord20l:hover { background-position: -123px -33px; }
				.jssord20r:hover { background-position: -183px -33px; }
				.jssord20ldn { background-position: -243px -33px; }
				.jssord20rdn { background-position: -303px -33px; }
			</style>
			<!-- Arrow Left -->
			<span u="arrowleft" class="jssord20l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
			</span>
			<!-- Arrow Right -->
			<span u="arrowright" class="jssord20r" style="width: 55px; height: 55px; top: 123px; right: 8px">
			</span>
			<!-- Direction Navigator Skin End -->
			<a style="" href="#">Responsive Slider</a>
		</div>

		</div>
	</div>
</div>

</body>
</html> 