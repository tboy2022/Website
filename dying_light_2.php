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

			<h2>Article</h2>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique vel leo a vestibulum. Praesent varius ex elit, vitae pretium felis laoreet in. Nullam sit amet pretium nulla. Aliquam convallis sem vitae tincidunt pulvinar. Integer id ex efficitur, vulputate ante et, vulputate risus. Maecenas ac nunc est. Donec nisl turpis, aliquet quis turpis mollis, dictum pulvinar est. Vivamus ut suscipit turpis. Sed metus leo, dignissim non vehicula non, tincidunt ac velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

			<p>Nunc id lacinia mauris. Aliquam pellentesque orci et neque egestas, vel lobortis risus egestas. Curabitur non rhoncus nibh. Donec ante lorem, luctus eget ex eget, malesuada ornare nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam consectetur egestas magna non dignissim. Pellentesque sit amet mollis mauris. Nunc quis arcu ac diam tempus auctor. Proin nec commodo nisl. Duis gravida lorem quis ipsum mattis, id finibus tortor pretium. Nam maximus pretium nisi, ullamcorper tincidunt dolor sagittis ac. Donec suscipit neque lectus, id fringilla tortor pellentesque ut. Maecenas quam lectus, pharetra vitae commodo sit amet, iaculis quis massa. Aenean varius quam quis posuere viverra. Nullam varius condimentum sem, sit amet bibendum augue porttitor in.</p>

			<p>Morbi purus turpis, finibus vel fermentum nec, egestas eu elit. Fusce eleifend ac massa sit amet eleifend. Suspendisse sit amet facilisis augue. Praesent vitae dui lacus. Suspendisse sodales nisl massa, quis vehicula ante rutrum vitae. Proin scelerisque vestibulum purus, ac ultrices sapien malesuada vel. Proin sit amet tristique orci. Vestibulum in tortor ante.</p>
			
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