<?php

	/* echo $_GET['id'];
	exit; */

// todo: EDIT
	$link = mysql_connect("localhost", "root", "")
		or die("Could not connect: " . mysql_error());
	mysql_select_db('studentinformation', $link)
		or die(mysql_error());
		
							$sql = "UPDATE studentinfo SET
									  student_name = '" . $_POST['student_name'] . "',
									  student_class = '" . $_POST['student_class'] . "',
									  student_roll = '" . $_POST['student_roll'] . "'
									WHERE student_id = " . $_GET['id'];
									
									/* echo $sql;
									exit; */
									   
							$result = mysql_query($sql)
							or die("Invalid query: " . mysql_error());

?>
<a href="index.php">Index</a>