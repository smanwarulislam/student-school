<?php
	$link = mysql_connect("localhost", "root", "")
		or die("Could not connect: " . mysql_error());
	mysql_select_db('studentinformation', $link)
		or die(mysql_error());
		
// todo: DELETE 
	if (isset($_GET['id'])) 
	{
		$studentsql = "DELETE FROM studentinfo WHERE student_id = " . $_GET['id'];
		mysql_query($studentsql);
	}
?>
<a href="index.php">Index</a>