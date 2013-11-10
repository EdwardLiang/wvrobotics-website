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
    <?php 
        if(isset($_GET['id'])){
            include "ftc/" . $_GET['id'] . ".php";
        }
        else{
            include "ftc/2013.php";
        }
    ?>
	</div>
<?php include('includes/footer.php'); ?>

<script type="text/javascript">
  $(window).load(function() {
	$('.flexslider').flexslider({
	pauseOnHover: false,    
	slideshow: true,                //Boolean: Animate slider automatically
	slideshowSpeed: 4000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
	animationSpeed: 1300,
	animation: "slide",              //String: Select your animation type, "fade" or "slide"
	easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
	direction: "horizontal",
	controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
	directionNav: true
	});
  });
</script>
<!-- CALL CAROUSEL LIST -->
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
							min: 4,
							max: 4
						}
					}
				});
			});	
	</script>
<!-- Call opacity on hover images from carousel-->
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
