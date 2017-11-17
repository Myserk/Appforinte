<?php

	$page = $_SESSION['page'];
	$connection = mysqli_connect("localhost", "Rex", "123");
	$db = mysqli_select_db($connection,"tastystuff");
		// SQL query to fetch information of registerd users and finds user match.
	$query = mysqli_query($connection,"select * from comments where page='$page'");
	while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
		$content = $row['content'];
		$timestamp = $row['timestamp'];
		$username = $row['username'];
		if(!isset($_SESSION['username']))
			echo 	"<li>". htmlspecialchars($content) ."<p>By " . htmlspecialchars($row['username']) ." @" .$timestamp ."</li>";
		else if (strtolower(htmlspecialchars($_SESSION['username']) == strtolower(htmlspecialchars($row['username'])))){
			echo 	"<li>". htmlspecialchars($content) ."<p>By " . htmlspecialchars($row['username']) ." @" .$timestamp. 
			'</br><form action="" method="post">
			<input id="hidden" name="time" type="hidden" value="'. $timestamp . '">
			<input name="delete" type="submit" value=" Delete ">
			</p></li>';
		}
		else{
			echo 	"<li>". htmlspecialchars($content) ."<p>By " . htmlspecialchars($row['username']) ." @" .$timestamp ."</li>";
		}
	}
	if (isset($_POST['delete'])) {
		$timestamp = $_POST['time'];
		mysqli_query($connection,"delete from comments where timestamp='$timestamp'");
		mysqli_close($connection);
		header("location:" .$page);

	}
			mysqli_close($connection);

?>