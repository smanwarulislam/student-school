<!-- todo: ekta application korte hobe jamon -> student information form i mean eai student information form-a student name, class, roll no, eai tin dhoroner data thakbe ebong nicher kajgulo korte hobe :
(1)database design, (2)insert form, (3)insert form input, (4)show list table, (5)edit form i.e. add, (6)edit database, (7)delete. -->

<?php
// connect to MySQL
$connect = mysql_connect("localhost", "root", "")
	or die("Hey loser, check your server connection.");
	
// create the main database if it doesn't already exit
$create = mysql_query("CREATE DATABASE IF NOT EXISTS studentinformation")
	or die (mysql_error());
	
// make sure our recently created database is the active one
mysql_select_db("studentinformation");

// create "studentinfo" table
$studentinfo = "CREATE TABLE IF NOT EXISTS studentinfo (
			   student_id int(11) NOT NULL auto_increment,
			   student_name varchar(255) NOT NULL,
			   student_class tinyint(2) NOT NULL default 0,
			   student_roll int(11) NOT NULL default 0,
			   PRIMARY KEY (student_id)
			   )";
			   
$results = mysql_query($studentinfo)
	or die(mysql_error());
	
echo "studentinformation Database successfully created!"
?>