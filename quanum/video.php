
<!--[if lte IE 9]>
	<style>
	.notie { display:none; }
	</style>
	
	<div class="col-md-4 btn_fix2">
		<div class="btn_height">&nbsp;</div>
	</div>
	<div class="col-md-12" style="background-color:#191919; height:70px; padding-bottom:10px; padding:18px 0;">		
		<a href="http://www.hobbyking.com" target="_blank">	
			<div class="prod_buy_btn">
				<div class="icon">&nbsp;</div>&nbsp;Buy Now
			</div>
		</a>
	</div>
<![endif]-->

<!--[if gt IE 9]>
<style>
.ie { display:block; }
</style>
<![endif]-->

<div class="col-md-4 btn_fix1 notie">
	<div class="btn_height">&nbsp;</div>
</div>

<?php 
if ($video == "null") {
	echo "<!--";
}
?>
<div class="col-md-3 btn_fix2 notie">
	<div class="btn_height2">
		<?php
		echo "<a class='video_pop' href='http://www.youtube.com/watch?v=";
		echo $youtube_path;
		echo "'>";
		?>
			<div class="video_btn">
				<div class="icon">&nbsp;</div>&nbsp;Video Here
			</div>
		</a>
	</div>
</div>
<?php 
if ($video == "null") {
	echo "-->";
	echo "<div class='col-md-3 btn_fix2 notie'>";
} else {
	echo "<div class='col-md-9 btn_fix3 notie'>";
}
?>

	<div class="btn_height2">
		<a href="http://www.hobbyking.com" target="_blank">	
			<div class="prod_buy_btn">
				<div class="icon">&nbsp;</div>&nbsp;Buy Now
			</div>
		</a>
	</div>
</div>


<?php
if ($video != "null") {
	echo "<!--";
}
?>
<div class="col-md-9 btn_fix3 notie">
	<div class="btn_height2">&nbsp;</div>
</div>
<?php 
if ($video != "null") {
	echo "-->";
}
?>
