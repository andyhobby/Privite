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
				<div class="st-content-inner" style="padding-bottom:0;">
					<div class="container full_container">
						<?php include 'header_nosocial.php'; ?>
					</div>
				</div>
						
				<style>
				.form_style1 { width:100%; }
				</style>
				<div class="container catalog_bg_inner">
					<form name="contact" method="post" >
						<br />
						<div class="row">
							<div class="col-md-16" style="margin-bottom:10px;">
								Have any questions, feedback or suggestions?
							</div>
						
							<div class="col-md-2">
								<label for="name">Name :</label>
							</div>
							<div class="col-md-6" style="margin-bottom:10px;">
								<input class="form_style1" type="text" value="Name" id="name" name="name" onfocus="if(this.value == 'Name') {this.value = '';}"/>
							</div>
							
							<div class="col-md-1">
								<label for="email">E-mail :</label>
							</div>
							<div class="col-md-7" style="margin-bottom:10px;">
								<input class="form_style1" type="text" value="Email" id="email" name="email" onfocus="if(this.value == 'Email') {this.value = '';}" />
							</div>
							
							
							<div class="col-md-2">
								<label for="email">Comment :</label>
							</div>
							<div class="col-md-14" style="margin-bottom:10px;">
								<textarea class="form_style1" cols="25" rows="7" id="comments" name="comments" style="resize: none;"></textarea>
							</div>
							
							<div class="col-md-16" style="text-align:center;">
								<span id="BotBootCaptcha" style="font-family:'Arial';"></span>
								<input type="text" value="Captcha" id="BotBootInput" name="BotBootInput" onfocus="if(this.value == 'Captcha') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Captcha';}" />
					
								<button type="submit" id="email_submit" class="button alignLeft">SEND</button>
								<div id="reply_message" ></div>
							</div>
						</div>
						<br />
					</form>
				</div>
				<!-- end bootstrap main layout -->
				<br /><br />
			</div>
		</div>
	</div>
	
	<script type="text/javascript">	
	/* Site Main plug-in initilize */
	$(document).ready(function(){
		// init captcha
		window.BotBootInputa = Math.ceil(Math.random() * 10);
		window.BotBootInputb = Math.ceil(Math.random() * 10);
		window.BotBootInputc = BotBootInputa + BotBootInputb;
		console.log(window.BotBootInputc);
		jQuery('#BotBootCaptcha').text("What is "+ window.BotBootInputa + " + " + window.BotBootInputb +"? ");
		
		
		// Email submit action
		$("#email_submit").click(function() {
			$('#reply_message').removeClass();
			$('#reply_message').html('')
			var regEx = "";
			
			// validate Name
			var name = $("input#name").val();
			regEx=/^[A-Za-z .'-]+$/;
			if (name == "" || name == "Name"  || !regEx.test(name)) {
				$("input#name").val('');
				$("input#name").focus();
				return false;
			}
			
			// validate Email
			var email = $("input#email").val();
			regEx=/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
			if (email == "" || email == "Email" || !regEx.test(email)) {
				$("input#email").val('');
				$("input#email").focus();
				return false;
			}
			
			// validate comment
			var comments = $("textarea#comments").val();
			if (comments == "" || comments == "Comments..." || comments.length < 2) {
				$("textarea#comments").val('');
				$("textarea#comments").focus();
				return false;
			}
			
			// validate Captcha
			var captcha = parseInt($("input#BotBootInput").val(),10);
			if (captcha == "" || captcha == "Captcha"  || captcha !== window.BotBootInputc) {
				$("input#BotBootInput").val('');
				$("input#BotBootInput").focus();
				return false;
			}
			
			var dataString = 'name='+ $("input#name").val() + '&email=' + $("input#email").val() + '&comments=' + $("textarea#comments").val();
			$('#reply_message').addClass('email_loading');
			
			// Send form data to mailer.php
			$.ajax({
				type: "POST",
				url: "mailer.php",
				data: dataString,
				success: function() {
					$('#reply_message').removeClass('email_loading');
					$('#reply_message').addClass('list3');
					$('#reply_message').html("Mail sent sucessfully")
					.hide()
					.fadeIn(1500);
				}
			});
			return false;
		});
	});
	</script>
</body>
<?php } ?>
</html>
<?php
	$page = 'contact';
	include 'foot.php'; 
?>


