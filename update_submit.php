<?php
// todo: update_submit
	$link = mysql_connect("localhost", "root", "")
		or die("Could not connect: " . mysql_error());
	mysql_select_db('studentinformation', $link)
		or die(mysql_error());
		
							$sql = "UPDATE schoolinfo SET
									  school_name = '" . $_POST['school_name'] . "',
									  school_phone_no = '" . $_POST['school_phone_no'] . "'
									WHERE school_id = " . $_GET['id'];
								
							$result = mysql_query($sql)
							or die("Invalid query: " . mysql_error());
							
?>
<a href="index.php">Index</a>