<?php
/*Instead of having the variable $curpage on each of the .php files, the basename function with the superglobal $_SERVER['PHP_SELF'] will read the filename of the active .php file and then it can be placed only in the menu.php*/
$curpage = basename($_SERVER['PHP_SELF']);


/*Afterwards I've used a conditional statement that if the file .php (depending on which one is active) is the current/active page it should be in the class "active".*/
?>

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
			<li><a href="events.php" <?php if($curpage == 'events.php') {
				echo 'class="active"';
				} ?>>Street Bowl</a></li>
			</ul>
        </div><!-- /.navbar-collapse -->
    </nav>
  </div><!-- /.container-fluid -->

<!-- javascript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

