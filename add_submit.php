<?php
// todo: add_submit
	$link = mysql_connect("localhost", "root", "")
		or die("Could not connect: " . mysql_error());
	mysql_select_db('studentinformation', $link)
		or die(mysql_error());
		
							$sql = "INSERT INTO studentinfo
							   (student_name,
							   student_class,
							   student_roll)
							VALUES
							   ('" . $_POST['student_name'] . "',
							   '" . $_POST['student_class'] . "',
							   '" . $_POST['student_roll'] . "')";
							   
							$result = mysql_query($sql)
							or die("Invalid query: " . mysql_error());

?>
<a href="index.php">Index</a>
