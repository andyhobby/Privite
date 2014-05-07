
<div class="row" style="margin-top:-20px;">
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
				if ($video == "null") {
			} else {
				echo "<a class='video_pop' href='http://www.youtube.com/watch?v=";
				echo $youtube_path;
				echo "'>";
			}
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
		echo "<div class='col-md-12 btn_fix2 notie' style='padding-right:10px;'>";
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
</div>
