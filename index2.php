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

    <div class="row-fluid">
			<div class="camera_wrap pattern_4 camera_emboss" id="camera_wrap_4">
				<div data-src="assets/img/frc3.jpg">
					<div class="camera_caption fadeFromTop">
					</div>
				</div>
				<div data-src="assets/img/ftc1.jpg">
					<div class="camera_caption fadeFromRight">
					</div>
				</div>
        <div data-src="assets/img/frc1.jpg">
					<div class="camera_caption fadeFromRight">
					</div>
				</div>
        <div data-src="assets/img/ftc3.jpg">
					<div class="camera_caption fadeFromRight">
					</div>
				</div>
        <div data-src="assets/img/ftc2.jpg">
					<div class="camera_caption fadeFromRight">
					</div>
				</div>
        <div data-src="assets/img/frc2.jpg">
					<div class="camera_caption fadeFromRight">
					</div>
				</div>
        <div data-src="assets/img/outreach2.jpg">
					<div class="camera_caption fadeFromRight">
					</div>
				</div>

			</div>
			<div class="text-center">
				<img src="assets/biscaya/theme/img/sha.png" class="slidershadowcam" alt="">
			</div>
		</div>

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
<!-- Call opacity on hover images from recent news-->
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
