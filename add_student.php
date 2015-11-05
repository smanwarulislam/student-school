<!-- todo: ADD -->
<html>
<head>
	<title>Add student</title>
</head>
<body>
<form action="add_submit.php" method="post">
<table width="750" border="1" cellspacing="1" cellpadding="3" align="center">
	<tr>
		<td width="30%">Student Name</td>
		<td width="70%">
			<input type="text" name="student_name">
		</td>
	</tr>
	<tr>
		<td>Student Class</td>
		<td>
			<select name="student_class">
				<option value="" selected>Select a Class...</option>
<?php
	for ($class = 1; $class <= 10; $class++) 
	{
?>	
				<option value="<?php echo $class; ?>"><?php echo $class; ?></option>
<?php
	}
?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Student Roll</td>
		<td>
			<input type="text" name="student_roll">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="SUBMIT" value="Add">
		</td>
	</tr>
</table>
</form>
</body>
</html>