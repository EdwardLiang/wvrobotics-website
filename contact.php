<!DOCTYPE html>
<?php include('includes/header.php'); ?>

<body class="boxed">
<div class="body">
	<!-- Navigation -->
  <?php include('includes/navbar.php'); ?>

		<div class="text-center">
		<img src="assets/biscaya/theme/img/sha.png" class="slidershadow" alt="">
	</div>
	<!-- /end header -->
	<div class="container">
<div class="text-center">
	</div>
	<!-- /end header -->
	<div class="container">
		<div class="page-header">
			<h1>Contact Us</h1>
			<div class="headerdivider">
			</div>
		</div>
		<div class="row-fluid top30">
			<div class="span6">
				<form action="#" name="MYFORM" id="MYFORM">
					<input name="name" size="30" type="text" id="name" class="span12" placeholder="Name">
					<input name="email" size="30" type="text" id="email" class="span12" placeholder="E-mail Address">
					<textarea id="message" name="message" class="span12" placeholder="Message" rows="8"></textarea>
					<img src="contact/refresh.jpg" width="25" alt="" id="refresh"/><img src="contact/get_captcha.php" alt="" id="captcha"/>
					<br/><input name="code" type="text" id="code" placeholder="Enter Captcha" class="top10">
					<br/>
					<input value="Send" type="submit" id="Send" class="btn btn-primary top10">
				</form>
			</div>
			<div class="span6">
				<div class="box3">
<iframe class="gmap" style="width:98.2%;height:240px;" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Westview+High+School,+Camino+Del+Sur,+San+Diego,+CA&amp;aq=1&amp;oq=Westivew&amp;sll=32.824552,-117.108978&amp;sspn=0.81474,1.674042&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;iwloc=A&amp;ll=32.966979,-117.148054&amp;spn=0.006295,0.006295&amp;output=embed"></iframe>
					<i class="icon-map-marker"></i> &nbsp;&nbsp;<i>Location</i>: 13500 Camino Del Sur, San Diego, California, 92129
					<p>
					</p>
					<p>
					</p>
					<i class="icon-envelope"></i> &nbsp;<i>E-mail</i>: &nbsp;<a href="mailto:wvrobotics@gmail.com">wvrobotics@gmail.com</a>
					<p>
					</p>
				</div>
			</div>
		</div>
</div>

	</div>
<?php include('includes/footer.php'); ?>

<script type="text/javascript">
$(document).ready(function() { 
	 $('#Send').click(function() {  
			// name validation
			var nameVal = $("#name").val();
			if(nameVal == '') {
				$("#name_error").html('');
				$("#name").after('<label class="error" id="name_error">Please enter your name.</label>');
				return false
			}
			else
			{
				$("#name_error").html('');
			}
			/// email validation
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var emailaddressVal = $("#email").val();
			if(emailaddressVal == '') {
				$("#email_error").html('');
				$("#email").after('<label class="error" id="email_error">Please enter your email address.</label>');
				return false
			}
			else if(!emailReg.test(emailaddressVal)) {
				$("#email_error").html('');
				$("#email").after('<label class="error" id="email_error">Enter a valid email address.</label>');
				return false
			}
			else
			{
				$("#email_error").html('');
			}
			// message validation
			var nameVal = $("#message").val();
			if(nameVal == '') {
				$("#message_error").html('');
				$("#message").after('<label class="error" id="name_error">Please enter your message.</label>');
				return false
			}
			else
			{
				$("#message_error").html('');
			}
			$.post("post.php?"+$("#MYFORM").serialize(), {
			}, function(response){
			if(response==1)
			{
				$("#after_submit").html('');
				$("#Send").after('<div class="alert alert-success success" id="after_submit"><button type="button" class="close" data-dismiss="alert">×</button>Thank you! Your message has been sent.</div>');
				change_captcha();
				clear_form();
			}
			else
			{
				$("#after_submit").html('');
				$("#Send").after('<label class="error" id="after_submit">Wrong captcha! Refresh and try again.</label>');
			}
		});
		return false;
	 });
	 // refresh captcha
	 $('img#refresh').click(function() {  
			change_captcha();
	 });
	 function change_captcha()
	 {
	 	document.getElementById('captcha').src="contact/get_captcha.php?rnd=" + Math.random();
	 }
	 function clear_form()
	 {
	 	$("#name").val('');
		$("#email").val('');
		$("#message").val('');
	 }
}); 	
</script>
</body>
</html>
