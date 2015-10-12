
<?php
include "db_connect.php";


	$name=$_POST['name'];		
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$semester=$_POST["semester"];
	$branch=$_POST["branch"];
	$contact=$_POST['contact'];
	
mysql_query("Insert into login values('student','".$username."','".$password."')");
		
$result=mysql_query("Insert into reg values('".$name."','".$username."','".$password."', '".$email."','".$semester."',
'".$branch."','".$contact."')");	
if($result)
	{
    		echo "<h1>student Registered</h1><br><a href=index.php>Back</a>";
	}
	else
	{
    		echo "<h1>student Registration rejected</h1><br><a href=register.php>Register Again</a>";
	}


	
?>