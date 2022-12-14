<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="./assets/icon/icon.png">
	<title>Neo's Guestbook :)</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div id="site-wrapper">
		<h1>Neo's Guestbook :)</h1>
		<form action="./handleForm.php" method="POST" autocomplete="off">
			<label for="name">Name</label>
			<input type="text" name="name" maxlength="50" placeholder="...">
			<label for="comment">Comment</label>
			<textarea name="comment" cols="30" rows="10" placeholder="..."></textarea>
			<input type="submit" name="post" value="Post">
		</form>
		<?php include "posts.php"; ?>
	</div>
	<script src="./script.js"></script>
</body>
</html>
