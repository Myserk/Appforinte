<?php

	if (isset($_POST['commentsubmit'])) {
		$page = $_SESSION['page'];
		$username = $_SESSION['username'];
		$comment = $_POST['comment'];
		$connection = mysqli_connect("localhost", "Rex", "123");
		$comment = stripslashes($comment);
		$comment = mysqli_real_escape_string($connection,$comment);
		$db = mysqli_select_db($connection,"tastystuff");
		mysqli_query($connection,"insert into comments (username,content,page) values('$username','$comment','$page')");
		mysqli_close($connection);
		header("location:" .$page);
	}
?>
<div class="wcomments">
	<form action="" method="post">
	<input id="comment" name="comment" placeholder="Write comment here" type="text">
	<input name="commentsubmit" type="submit" value="Comment">
</div>