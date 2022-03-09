<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Comments System</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="comments.css" rel="stylesheet" type="text/css">
	</head>
	<body>

	    <nav class="navtop">
	    	<div>
	    		<h1>Comments System</h1>
	    	</div>
	    </nav>

		<div class="content home">

			<h2>Review 1 - Dying Light 2 Stay Human  </h2>
			<h3> 3.5 out of 5 Stars<h3>
			<h3> Genre: Action </h3>
			<p> This game sequel to the original game that came out in early 2015 with a very lukewarm reception is by far a bigger, better and meaner game.  While, it has been a hot second is once this game was announced all the way back at E3 2018. Development issues staggered the game’s release date such as that the then creative director of the game left after accusations of misbehaviour caught up with him. But finally in 2022 it is here although very different to the originally promised and shown game which ain’t necessarily a bad thing…. 
				The game is a soft reboot of the series’ story arc with it being set in the exact set as the original although we fast-forward a decade and a half where the world is left in a primitive state. Villedor or more commonly known “The City” is used this time with its being done of the final large settlements in the world with Harran left behind. Players play the character of Aiden Caldwell in this game a “Pilgrim” who travels through the decreasing amount of settlements on a mission to find his long-lost sister. Both siblings were abused and used in experiements into a possible deadly vaccine by a doctor called Waltz and is likely that he is in hiding in Villedor.
				With the game story getting the player to locate him and maybe the sister which won’t be a walk in the park. 
				The plot of the story is easy to follow with it leading to a series of complications that expects the mission to becoming harder to follow. With an obstacle followed early on is  discovering that Waltz and character’s sister are more most likely to be in the downtown ‘Central Loop’ of the city. An area that is guarded which means discovering a way of passing them which gets you caught and issued into solving a complicated murder mystery which sets off a massive war between the Peacekeepers and Survivor factions. Getting to the ‘Central Loop’ is a lot more complex that it sounds which it taking longer than 10 hours of playtime. 
				While the story is simple and at times slow to follow through. It has some unforgettable characters and moments in the story and game. Techland do a very good job at making the city feel like a detailed living environment with it’s own politics and concern and the choices in the storyline are delivered well with the stereotype of a good and bad choice not existing here with sacrifices made such as cooperating with bad people to get the best for the city with the adventure and outcome not being predictable. </p>
		</div>
		<div class="comments"></div>

<script>
const comments_page_id = 1; // This number should be unique on every page
fetch("comments.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
	document.querySelector(".comments").innerHTML = data;
	document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
		element.onclick = event => {
			event.preventDefault();
			document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
		};
	});
	document.querySelectorAll(".comments .write_comment form").forEach(element => {
		element.onsubmit = event => {
			event.preventDefault();
			fetch("comments.php?page_id=" + comments_page_id, {
				method: 'POST',
				body: new FormData(element)
			}).then(response => response.text()).then(data => {
				element.parentElement.innerHTML = data;
			});
		};
	});
});
</script>

</body>
</html>