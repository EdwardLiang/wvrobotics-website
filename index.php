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
<div class="titleborder">
            <div>
                Recent Activity 
            </div>
        </div>
    <div class="row-fluid">
        <div class="span4">
            <div class="boxblog" style="height: 570px">
                <h5><a href="#">Announcements</a></h5>
                <p class="small datepost">
                     Last Posted on 2013-11-9 <span class="floatright" title="3 responses"></span>
                </p>
                <div class="innerblogboxtwo">
                    <p>
                    </p>
                </div>
            </div>
            </div>

        <div class="span4">
<div class="fb-like-box" data-href="https://www.facebook.com/FIRSTWVRobotics" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
        </div>
        <div class="span4">
<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/option_16" data-widget-id="399375027914567682">Tweets by @option_16</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=114615118645359";
      fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
