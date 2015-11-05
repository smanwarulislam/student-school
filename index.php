<?php
	$link = mysql_connect("localhost", "root", "")
		or die(mysql_error());
	mysql_select_db("studentinformation")
		or die(mysql_error());

	include "include_function.php"; /* todo: create a file (footer.php) that includes some information and this information will show to index.php page and also all other pages */
?>

<form action="index.php" method="get"> <!-- todo: ekhon index page er moddhei Student Class er ekta drop-down list korte 	hobe. Pashapashi ekta search box/item korte hobe ejonno je drop-down list er je Student Class-ta select kore search korbo ta shei Student Class related onnanno information-gulo show korbe. -->
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
	// check if search value not found
	if (!isset($_GET['student_class'])) /* condition-ta amon je Student Class "search" deyar por drop-down list er selected Student Class er related information-e show korbe */ 
	{
		$studentsql = "SELECT * FROM studentinfo";
	}
	else
	{
		$studentsql = "SELECT * FROM studentinfo WHERE student_class = " . $_GET['student_class'];
	}
	
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
</table>