<?php 
	include('functions.php');
?>
<html DOCTYPE!>
<html>
<header>
	<title> Home</title>
	<link rel="stylesheet" type="text/css" href="home.css"> <!--for external styling-->

<div class="header">
  <h1>Title of Website</h1>
</div>

<div class="topnav">
  <a class= "" href="">Home</a>
  <a href="catagories.php">Categories</a>
  <a href="trending.php">Trending Games</a>
  <a href="highestrated.php">Highest Rated Games</a>
  <a href="upcoming.php">Upcoming Games</a>
  <a href="aboutus.php">About Us</a>
</div>

</header>
<body>

<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
	

<h1> Homepage</h1>

<!-- LOGIN LINK , SIGN UP LINK -->
<br>

<center>
<button href="signup.php" class="button button2">Sign Up</button>
<button href="http://localhost/login.php" class="button button2">Sign in</button>
</center>

<br>

<!--Slideshow Of Top Games -->

<div class="topgames">
  <div class="gallery">
    <a target="_blank" href="INSERT IMG LINK">
      <img src="INSERT IMG" alt="INSERT GAME NAME" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="topgames">
  <div class="gallery">
    <a target="_blank" href="INSERT IMG LINK">
      <img src="INSERT IMG" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="topgames">
  <div class="gallery">
    <a target="_blank" href="INSERT IMG LINK">
      <img src="INSERT IMG" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="topgames">
  <div class="gallery">
    <a target="_blank" href="INSERT IMG LINK">
      <img src="INSERT IMG" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="clearfix"></div>
<br> 

<!-- Article Section -->
<p>

<p>
<!-- CREDITS --> 
<div class="footer">
  <p>Footer</p>
  <p> type here </p>
</div>
<div>
<h2>


</div>
<br>

</body>
</html>
