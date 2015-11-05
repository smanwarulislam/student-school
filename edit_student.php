<?php
include "include_function.php";
?>

<?php
	/* echo $_GET['id'];
	exit; */

// todo: EDIT
	$link = mysql_connect("localhost", "root", "")
		or die("Could not connect: " . mysql_error());
 	/* print_r($link);
	exit; */
	mysql_select_db('studentinformation', $link)
		or die(mysql_error());
		
	$studentsql = "SELECT * FROM studentinfo WHERE student_id = " . $_GET['id'];
	$result = mysql_query($studentsql);
	
	$row = mysql_fetch_assoc($result); /* index.php-a (home/mul page-a) jei table row er [EDIT] link-a click korbo shudhu oi row er single(selected) information oi database er oi table theke ane edit form-a (edit_student.php) show korbe / for single(selected) input showing to edit form */ 
	
	/* print_r($row);
	exit; */
	
?>

<form action="edit_submit.php?id=<?php echo $_GET['id']; ?>" method="post">
<table width="750" border="1" cellspacing="1" cellpadding="3" align="center">
	<tr>
		<td width="30%">Student Name</td>
		<td width="70%">
			<input type="text" name="student_name" value="<?php echo $row['student_name']; ?>">
		</td>
	</tr>
	<tr>
		<td>Student Class</td>
		<td>
			<select name="student_class">
			
<?php
	for ($class = 1; $class <= 10; $class++) 
	{
			if($row['student_class'] == $class) 
			{
?>
				<option value="<?php echo $class; ?>" selected><?php echo $class; ?></option> <!-- value = "selected" deyar ortho hocchhe index.php-a (home/mul page-a) jei table row er [EDIT] link-a click korbo edit_student.php&id=... r shathe mil rekhe table form a Student Roll er value-r shathe Student Class er value-ta thikvabe show kora (i mean index.php-a table er ekta row er name, valu-gulor related maan show kora) -->
<?php
			}
			else 
			{
?>
				<option value="<?php echo $class; ?>"><?php echo $class; ?></option>
<?php				
			}
?>	

<?php
	}
?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Student Roll</td>
		<td>
			<input type="text" name="student_roll" value="<?php echo $row['student_roll']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="SUBMIT" value="Add">
		</td>
	</tr>
</table>
</form>