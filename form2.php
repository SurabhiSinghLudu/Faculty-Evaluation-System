
<?php
	include "db_connect.php";



	$name=$_POST['name'];		
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
mysql_query("Insert into login values('faculty','$username','$password')");		
$result=mysql_query("Insert into reg(`name`, `username`, `password`, `email`, `contact`) values('$name','$username','$password', '$email','$contact')");	
if($result)
	{
    		echo "<h1>faculty Registered</h1><br><a href=index.php>Back</a>";
	}
	else
	{
    		echo "<h1>faculty Registration rejected</h1><br><a href=register.php>Register Again</a>";
	}

	
?>