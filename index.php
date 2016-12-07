<?php $curpage = basename($_SERVER['PHP_SELF']);?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>One Bowl Community Restaurant</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php require 'header.php'?>
<?php require 'nav.php'?>

 <div class="section content sectiontext col-lg-1" id="indexpage">
   <h1>One Bowl</h1>
   <p> Welcome to One Bowl Community Restaurant.
One Bowl is a non-profit 'pay-as-you-feel' community restaurant that enables people from all walks of life to have food, share stories and life together.
<br><br>
</p>
</div>

<div class="container-fluid">
 <div class="sectiontextsplit col-sm-6" id="indexsplit1">
   <h1>Come dine with us</h1>
   <p>Information about where One Bowl is located, when there is open.</p>
</div>

<div class="sectiontextsplit col-sm-6" id="indexsplit2">
   <h1>Pay as you feel</h1>
   <p>Why One Bowl has a “Pay As You Feel” Concept.  What does it mean and more about One Bowl as an organisation.</p>
</div>
</div>

 <div class="section content col-lg-1" id="indexicons">
  <div class="container-fluid">
  <div class="col-sm-3">
  	<a href="onebowlway.php"><img src="images/the-one-bowl-way.png" alt="One Bowl Way" class="indeximg img-responsive"></a>
  	<p class="textcenter">What makes One Bowl, One Bowl and not just another Folkekøkken.</p>
  </div>
  
  <div class="col-sm-3">
  <a href="events.php"><img src="images/street-bowl.png" alt="One Bowl Way" class="indeximg img-responsive"></a>
  <p class="textcenter">Meet us when we are out and about on the Copenhagen streets.</p>
  </div>
  
  <div class="col-sm-3">
  <a href="restaurant.php"><img src="images/One-bowl-map.png" alt="One Bowl Way" class="indeximg img-responsive"></a>
  <p class="textcenter">How to find us when you are hungry!</p>
  </div>
  
  <div class="col-sm-3">
  <a href="volunteer.php"><img src="images/heart_volunteer.png" alt="One Bowl Way" class="indeximg img-responsive"></a>
  <p class="textcenter">Join the team and make a difference today.</p>
  </div>
  <br>
  </div>
</div>
<?php require 'footer.php' ?>
</body>
</html>


