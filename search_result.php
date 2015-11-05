<?php
	$link = mysql_connect("localhost", "root", "")
		or die(mysql_error());
	mysql_select_db("studentinformation")
		or die(mysql_error());

	include "include_function.php";
?>

<form action="search_result.php" method="get"> <!-- ei php file-ta (search_result.php) eai jonno kora hoichilo je prothom dike index.php file-ta te action="search_result.php" chilo. pore index.php file-ta te action="index.php deya hoichilo eai jonno je search korle index.php file-ta tei jate show kore -->
Student Class:
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

	<input type="submit">
</form>

<table border="1" cellpadding="2" cellspacing="2" align="center">
	<tr>
		<th>Student Name</th>
		<th>Student Class</th>
		<th>Student Roll</th>
		<th>Action</th>
	</tr>
	
<?php
	$studentsql = "SELECT * FROM studentinfo WHERE student_class = " . $_GET['student_class'];
	$result = mysql_query($studentsql)
		or die("Invalid query: " . mysql_error());
	while ($row = mysql_fetch_array($result)) {
?>
	<tr>
		<td><?php echo $row['student_name']; ?></td>
		<td><?php echo $row['student_class']; ?></td>
		<td><?php echo $row['student_roll']; ?></td>
		<td>
			<a href="edit_student.php?id=<?php echo $row['student_id']; ?>">[EDIT]</a>
			<a href="delete.php?id=<?php echo $row['student_id']; ?>">[DELETE]</a>
		</td>
	</tr>
<?php
	}
?>	