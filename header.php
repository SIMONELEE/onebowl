<?php 
session_start();
$curpage = basename($_SERVER['PHP_SELF']);
?>
<meta name="viewport" content="width=device-width, initial-scale=1">  
  
<div class="container"> 
  
  <!--LOGO-->
   <div class="col-sm-2"><a href="index.php"><img src="images/onebowl_logo.png" width="130" alt= "One Bowl Logo" class="img-responsive"></a></div>
  
  <!--LANGUAGE SWITCH-->
   	<div id="language" class="col-sm-5 img-responsive">   
   <a href="index.php"><img src="images/uk.png" width="20 "alt="One Bowl English Website"></a>
   <img src="images/dk.png" width="13"  alt=""> </div> 
  
  <!--SOCIAL MEDIA-->
    <div class="imagewrap col-sm-5 img-responsive">
    <a href="https://www.facebook.com/1bowl/" target="_blank"><img src="images/facebook-logo.png" width="25" alt="One Bowl Facebook Icon"  class="socialmediaicons"></a>     
    
    <a href="https://www.instagram.com/onebowl.dk/" target="_blank"><img src="images/instagram-logo.png" width="25" alt="One Bowl Meetup Icon"  class="socialmediaicons"></a>     
    
    <a href="https://www.meetup.com/One-Bowl-Community-Restaurant/" target="_blank"><img src="images/meetup-logo.png" width="25" alt="One Bowl Meetup Icon"  class="socialmediaicons"></a></div>

</div>


  

<!--NAVIGATION-->
<div class="container-fluid">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

          <div class="collapse navbar-collapse" id="navbar-collapse-1"> 
			<ul class="nav navbar-nav">
			  <li><a href="index.php" <?php if($curpage == 'index.php') {
				echo 'class="active"';
				} ?>>Home</a></li>
			  <li><a href="onebowlway.php" <?php if($curpage == 'onebowlway.php') {
				echo 'class="active"';
				}?>>The One Bowl Way</a></li>
			  <li><a href="restaurant.php" <?php if($curpage == 'restaurant.php') {
				echo 'class="active"';
				}?>>Restaurant</a></li>
			  <li><a href="volunteer.php" <?php if($curpage == 'volunteer.php') {
				echo 'class="active"';
				} ?>>Volunteer</a></li>
				<?php
					if($_SESSION['id']) { 
					  echo '<li><a href="volunteerpage.php"';
						if($curpage == 'volunteerpage.php') {
						   echo ' class="active"';
				        } 
					  echo '>User</a></li>';
				 }?>
			<li><a href="events.php" <?php if($curpage == 'events.php') {
				echo 'class="active"';
				} ?>>Events</a></li>
			</ul>
        </div><!-- /.navbar-collapse -->
    </nav>
  </div><!-- /.container-fluid -->

<!-- javascript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
	$(document).ready(function($){
          var parPosition = [];
        $('.par').each(function() {
            parPosition.push($(this).offset().top);
        });
        
		$('a').click(function(){
			$('html, body').animate({
				scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 500);
			return false;
		});
        
        	$('.vNav ul li a').click(function () {
			$('.vNav ul li a').removeClass('active');
				$(this).addClass('active');
		}); 
        
       $('.vNav a').hover(function() {
           $(this).find('.label').show();
           }, function() {
           $(this).find('.label').hide();
       });
        
           $(document).scroll(function(){
        var position = $(document).scrollTop(),
                index; 
                for (var i=0; i<parPosition.length; i++) {
                if (position <= parPosition[i]) {
                    index = i;
                    break;
                }
            }
      $('.vNav ul li a').removeClass('active');
            $('.vNav ul li a:eq('+index+')').addClass('active');
        });
        
        	$('.vNav ul li a').click(function () {
			$('.vNav ul li a').removeClass('active');
				$(this).addClass('active');
		});   
	});
</script>

   
