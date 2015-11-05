<?php
// todo: UPDATE
	$link = mysql_connect("localhost", "root", "")
		or die("Could not connect: " . mysql_error());
	mysql_select_db('studentinformation', $link)
		or die(mysql_error());
		
	$schoolsql = "SELECT * FROM schoolinfo WHERE school_id = " . $_GET['id'];
	$result = mysql_query($schoolsql);
	// var_dump($schoolsql);
	/* if (false === $result) {
    echo mysql_error();
	} */
	
	$row = mysql_fetch_assoc($result); // for single(selected) input showing to edit form

?>

<form action="update_submit.php?id=<?php echo $_GET['id']; ?>" method="post">
<table width="750" border="1" cellspacing="1" cellpadding="3" align="center">
	<tr>
		<td width="30%">School Name</td>
		<td width="70%">
			<input type="text" name="school_name" value="<?php echo $row['school_name']; ?>">
		</td>
	</tr>
	<tr>
		<td>Phone Number</td>
		<td>
			<input type="text" name="school_phone_no" value="<?php echo $row['school_phone_no']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="SUBMIT" value="Add">
		</td>
	</tr>
</table>
</form>