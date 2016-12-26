 <footer id="footer">
	  <div class="col-sm-4"><p>Mågevej 33<br> 2400 Copenhagen NV <br> info@onebowl.dk <br>+4552794387 </p></div>

	   <div class="col-sm-4"><p>Student Project<br> CPH Business Academy <br> CVR: 37241407 <br><a href="faq.php">FAQ</a></p></div>

		<div class="col-sm-4"><p>For volunteers: 			
			<?php
			if (isset($_SESSION['id'])){
				echo "<form id='loginform' action='logout.php'>
						<button>LOG OUT</button>
						</form>";
			} else {
				echo "<form id='loginform' action='login.php' method='POST'>
						<input type='email' name='email' placeholder='Email'><br>
						<input type='password' name='pwd' placeholder='Password'><br>
						<button type='submit'>LOGIN</button>
					</form>";
			}
			?>
         </div>
  </div>
 </footer>




