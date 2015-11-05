<?php
// connect to MySQL
$connect = mysql_connect("localhost", "root", "")
	or die("Hey loser, check your server connection.");

// make sure we're using the right database
mysql_select_db("studentinformation");

// insert data into "studentinfo" table
$insert = "INSERT INTO studentinfo (student_id, student_name, " .
		  "student_class, student_roll) " .
		  "VALUES (1, 'Alif', 8, 3), " .
		  "(2, 'Brian', 9, 4), " .
		  "(3, 'Chris', 10, 5)";

$results = mysql_query($insert)
	or die(mysql_error());
	
echo "Data inserted successfully!";
?>