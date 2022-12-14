<?php
if (isset($_POST["post"]))
{
	include "database.php";

	$name = $_POST["name"];
	$comment = nl2br($_POST["comment"]); // nl2br: \n -> <br>

	$database->query("INSERT INTO posts (name, comment) VALUES ('$name', '$comment')");
}

header("Location: index.php");
?>
