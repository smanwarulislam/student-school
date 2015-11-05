<!-- todo: include statement -->
Student <a href="add_student.php">[ADD]</a>


<?php
	$link = mysql_connect("localhost", "root", "")
		or die(mysql_error());
	mysql_select_db("studentinformation")
		or die(mysql_error());

	$schoolsql = "SELECT * FROM schoolinfo";
	$result = mysql_query($schoolsql)
		or die("Invalid query: " . mysql_error());
	while ($row = mysql_fetch_array($result)) {
?>
	<div align="center">
		<font size="3">School Name: <?php echo $row['school_name']; ?></font><br>
		<font size="3">Phone Number: <?php echo $row['school_phone_no']; ?></font><br>
	
<!-- todo: eki Database-a i mean studentinformation Database-a arekti Table (suppose -> schoolinfo) create korte hobe ebong shei table-a school name, school phone no. store korte hobe. erpor eki page-a (suppose -> index page-a School Name, Phone Number er Update Information [UPDATE] dekhabe i mean eki page-a) -->
Update Information <a href="update_school.php?id=<?php echo $row['school_id']; ?>">[UPDATE]</a>
<?php
	}
?>
	</div>