<?php $curpage = basename($_SERVER['PHP_SELF']);?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>One Bowl Community Restaurant</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Owl Carousel Assets -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrapTheme.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="owl-carousel/owl.theme.css">
<link href="/assets/js/google-code-prettify/prettify.css" rel="stylesheet">

<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us10.list-manage.com","uuid":"631072c47d7f1c66933371e70","lid":"d3823ef213"}) })</script>
</head>



<body>

<?php include 'header.php'?>

<!--IMAGE SLIDER-->
<div id="demo" class="container-fluid">
  <div class="col-lg-12">
    <div id="owl-demo" class="owl-carousel">
      <div class="item"><a href="onebowlway.php"><img src="images/fullimage3.jpg" alt="One Bowl mission statement"></a></div>
      <div class="item"><a href="onebowlway.php"><img src="images/fullimage2.jpg" alt="One Bowl Volunteering"></a></div>
      <div class="item"><a href="volunteer.php"><img src="images/fullimage1.jpg" alt="Street Bowl"></a></div>
      <div class="item"><a href="onebowlway.php"><img src="images/fullimage4.jpg" alt="Mirror Edge"></a></div>
      <div class="item"><a href="restaurant.php"><img src="images/fullimage5.jpg" alt="Mirror Edge"></a></div>
    </div>
  </div>
</div>

<script>

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoPlay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
</script>
      
 <script src="assets/js/jquery-1.9.1.min.js"></script>
 <script src="owl-carousel/owl.carousel.js"></script>

   <script>   
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
      slideSpeed : 200,
      paginationSpeed : 300,
      singleItem : true,
	  autoPlay: true,
	  autoplayTimeout:400,
	  autoplayHoverPause:true, 
     });
    });
</script>
<!--END SLIDER-->

<div class="section sectiontext col-lg-1" id="indexpage">
	<div class="container-fluid">
	   <h1>One Bowl</h1>
	   <p class="type"> Welcome to One Bowl Community Restaurant.
		One Bowl is a non-profit 'pay-as-you-feel' community restaurant that enables people from all walks of life to have food, share stories and life together.
		<br><br>
		
		<!--MOTION GRAPHIC -->
			<div class="embed-container"><iframe src="https://player.vimeo.com/video/195442886?title=0&byline=0&portrait=0" frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		</p>
	</div>
</div>

<!--<div class="container-fluid">
	<div class="sectiontextsplit col-sm-6" id="indexsplit1">
	   <h1>Come dine with us</h1>
	   <p class="type">Information about where One Bowl is located, when there is open.</p>
	</div>

	<div class="sectiontextsplit col-sm-6" id="indexsplit2">
	   <h1>Pay as you feel</h1>
	   <p class="type">Why One Bowl has a “Pay As You Feel” Concept.  What does it mean and more about One Bowl as an organisation.</p>
	</div>
</div>-->

 <div class="section content col-lg-1" id="indexicons">
	<div class="container-fluid">
	  <div class="col-sm-3">
		<a href="onebowlway.php"><img src="images/the-one-bowl-way.png" alt="One Bowl Way" class="indeximg img-responsive"></a>
		<p class="textcenter type">What makes One Bowl, One Bowl and not just another Folkekøkken.</p>
	  </div>

	  <div class="col-sm-3">
		  <a href="events.php"><img src="images/street-bowl.png" alt="One Bowl Way" class="indeximg img-responsive"></a>
		  <p class="textcenter type">Meet us when we are out and about on the Copenhagen streets.</p>
	  </div>

	  <div class="col-sm-3">
		  <a href="restaurant.php"><img src="images/One-bowl-map.png" alt="One Bowl Way" class="indeximg img-responsive"></a>
		  <p class="textcenter type">How to find us when you are hungry!</p>
	  </div>

	  <div class="col-sm-3">
		  <a href="volunteer.php"><img src="images/heart_volunteer.png" alt="One Bowl Way" class="indeximg img-responsive"></a>
		  <p class="textcenter type">Join the team and make a difference today.</p>
	  </div>
	  <br>
	</div>
</div>

<?php include 'footer.php' ?>
</body>

</html>


