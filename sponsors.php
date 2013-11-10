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

<div class="page-header">
			<h1>Sponsor Us</h1>
			<div class="headerdivider">
			</div>
		</div>
<p>The FIRST Robotics Competition is a program that requires funding from multiple sources; the entrance fee to a competition is $5,000.  We raise this money mainly through sponsorships and grants from various companies, corporations, or individuals. Those who sponsor us have their name on the robot and on our T-shirts. This provides publicity for the company, as well as funding for the team. Sponsorships generally range from $2,000 to $5,000, but any amount is appreciated. If you would like to sponsor us, please send an email to <a href="mailto:wvrobotics@gmail.com">wvrobotics@gmail.com</a> with the subject as "Sponsorship". Thank you for your consideration, and we look forward to partnering with you!</p>
<br>
<br>
 <div class="page-header">
			<h1>Our Sponsors</h1>
			<div class="headerdivider">
			</div>
		</div>

<center>
<a href="http://www.baesystems.com/" title="BAE Systems"><img src="assets/img/sponsors/bae_logo.png" alt="BAE Systems" width="320"></a>
<a href="http://www.saic.com/" title="SAIC"><img src="assets/img/sponsors/SAIC_logo.png" alt="SAIC"></a>
<a href="http://www.teradata.com/" title="Teradata"><img src="assets/img/sponsors/teradata_logo.png" width="200" alt="Teradata"></a>
<a href="http://www.viasat.com/" title="Viasat"><img src="assets/img/sponsors/ViaSat Logo.jpg" alt="Viasat"></a>
<a href="http://www.qualcomm.com/" title="Qualcomm"><img src="assets/img/sponsors/Qualcomm_logo.png" alt="Qualcomm"></a>
<a href="http://www.carefusion.com/" title="Raytheon"><img src="assets/img/sponsors/CareFusion_2.png" alt="CareFusion"></a>
<a href="http://www.raytheon.com/" title="Northrop Grumman"><img src="assets/img/sponsors/RTN_RGB_RED.jpg" alt="Raytheon"></a>
</center>

	</div>
<?php include('includes/footer.php'); ?>

<script>
	jQuery(function(){
		jQuery('#camera_wrap_4').camera({
			height: 'auto',
			loader: 'bar',
			pagination: false,
			thumbnails: false,
			hover: false,
			opacityOnGrid: false,
			imagePath: 'img/'
		});
	});
</script>
<!-- CALL FEATURED WORK -->
<script type="text/javascript">
$(window).load(function(){			
			$('#recent-projects').carouFredSel({
				responsive: true,
				width: '100%',
				auto: true,
				circular	: true,
				infinite	: false,
				prev : {
					button		: "#car_prev",
					key			: "left",
						},
				next : {
					button		: "#car_next",
					key			: "right",
							},
				swipe: {
					onMouse: true,
					onTouch: true
					},
				scroll : 1500,
				items: {
					visible: {
						min: 1,
						max: 1
					}
				}
			});
		});	
</script>
<!-- CALL ACCORDION -->
<script type="text/javascript">
	$(".accordion h3").eq(0).addClass("active");
	$(".accordion .accord_cont").eq(0).show();
	$(".accordion h3").click(function(){
		$(this).next(".accord_cont").slideToggle("slow")
		.siblings(".accord_cont:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings("h3").removeClass("active");
	});	
</script>
<!-- Call opacity on hover assets/img/sponsors from recent news-->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>

</body>
</html>
