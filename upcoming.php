<html DOCTYPE!>
<html>

<head>
<link rel="stylesheet" type="text/css" href="home.css"> <!--for external styling-->
</head>


<div class="header">
<header>
  <h1>Realist Gamers</h1>
  <h2>Upcoming Games</h2>

</div>

<nav class="topnav">
  <a href="index.php">Home</a>
  <a href="categories.php">Categories</a>
  <a href="trending.php">Trending Games</a>
  <a href="highestrated.php">Highest Rated Games</a>
  <a href="upcoming.php">Upcoming Games</a>
  <a href="aboutus.php">About Us</a>
</nav>


</header>
<body>

<div class ="nextgame" onclick="myFunction()">

<h2>Game Name Here </h2>
<div class="game-desc">Add a description of the game here</div>
<img src="img game here" alt="Game Name Here" width="25%" height="25%">

<br>
<br>

<h2>Game Name Here </h2>
<div class="game-desc">Add a description of the game here</div>
<img src="img game here" alt="Game Name Here" width="25%" height="25%">

<br>
<br>

<h2>Game Name Here </h2>
<div class="game-desc">Add a description of the game here</div>
<img src="img game here" alt="Game Name Here" width="25%" height="25%">

<br>
<br>

<h2>Game Name Here </h2>
<div class="game-desc">Add a description of the game here</div>
<img src="img game here" alt="Game Name Here" width="25%" height="25%">

<br>
<br>

<h2>Game Name Here </h2>
<div class="game-desc">Add a description of the game here</div>
<img src="img game here" alt="Game Name Here" width="25%" height="25%">

<br>
<br>
</div>

<div id="comingsoonmsg"> Coming Soon</div>

<script>
function myFunction() {
  var x = document.getElementById("comingsoonmsg");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
} 

</script>


<!-- CREDITS --> 
<div class="footer">
  <p>Footer</p>
  <p> type here </p>
</div>


</body>
</html>
{\rtf1}