<?php if ($page != 'contact') { ?>
	<script src="js/bootstrap_plugin/bootstrap.js"></script>
<?php } ?>

<!-- script for ie compatible -->
<script type="text/javascript" src="js/respond.js"></script>
<script type='text/javascript' src="js/modernizr.min.js"></script>
<script type='text/javascript' src="js/html5.js"></script>
<!-- end scripts for ie compatible -->

<!-- script for menu -->
<script src="js/menu_plugin/classie.js"></script>
<script src="js/menu_plugin/sidebarEffects.js"></script>
<!-- end script for menu -->

<!-- fancy box -->
<script type="text/javascript" src="js/fancybox_plugin/jquery.fancybox.pack.js"></script>
<!-- end fancy box -->

<script type="text/javascript">
$('a.video_pop').on('click', function(event) {
    event.preventDefault();
    $.fancybox({
        'type' : 'iframe',
        // hide the related video suggestions and autoplay the video
        'href' : this.href.replace(new RegExp('watch\\?v=', 'i'), 'embed/') + '?rel=0&autoplay=1',
        'overlayShow' : true,
        'centerOnScroll' : true,
        'speedIn' : 100,
        'speedOut' : 50,
        'width' : 640,
        'height' : 480
    });
});

$(document).ready(function() {
	//script for colapse arrow toggle
	$('.accordion-toggle').on('click', function () {
		$('.red_arrow_down').removeClass('red_arrow_down').addClass('red_arrow');
		$(this).find('.red_sqr > div').toggleClass('red_arrow_down red_arrow');
	});

	//script for at least one colapse panel open
	$('.panel-heading a').on('click',function(e){
		if($(this).parents('.panel').children('.panel-collapse').hasClass('in')){
			e.stopPropagation();
		}
	});	
});
</script>
