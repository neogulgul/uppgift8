<?php
include "database.php";
$posts = $database->query("SELECT * FROM posts");
$post_array = [];
while ($post = $posts->fetch_assoc())
{
	array_push($post_array, $post);
}

$sorting = "new";
if ($_GET["sort"] == "old")
{
	$sorting = "old";
}
?>

<h2>Posts (<?php echo sizeof($post_array); ?>)</h2>
<div id="sort">
	<p>New</p>
	<p>Old</p>
	<div id="ball" <?php if ($sorting == "old") { echo "class='old'"; } ?>></div>
</div>

<?php
for ($i = 0; $i < sizeof($post_array); $i++)
{
	$index;

	switch ($sorting)
	{
		case "new":
			$index = sizeof($post_array) - $i - 1;
			break;

		case "old":
			$index = $i;
			break;
	}

	$post = $post_array[$index];

	$name    = $post["name"];
	$comment = $post["comment"];
	$time    = $post["time"];

	echo "<div class='post'>";
		echo "<div class='info'><span>By <i>$name</i></span><span>$time</span></div>";
		echo "<p class='comment'>$comment</p>";
	echo "</div>";
}
?>
