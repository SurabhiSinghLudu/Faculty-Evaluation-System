<?php
session_start();

?>
<?php 

include 'db_connect.php';	  
$result=" ";

if (isset($_POST['Submit']))
{

	$username = $_POST['username'];
	$password = $_POST['password'];	
	$result = mysql_query("Select * From login where username='$username'");
	$count=mysql_num_rows($result);
	if ($count==0)
	{
		$msg="Username Does Not Exists...";
	}
	else
	{
		while($row = mysql_fetch_array($result, MYSQL_BOTH))
		{
          			$usr_pwd=$row['password'];
	  		$type=$row['type'];
	       		if($usr_pwd!=$password ) 
			{
				$msg="Incorrect Password...";
		                  }			
			else
			{
				if($type=='student')
				{
					$_SESSION['username']=$_POST['username'];
					include "feedback.php";
					exit(0);
				
				}
		
				else
				{
					
					$_SESSION['username']="admin";
					include "admin/login_success.php";
					exit(0);

				}
			} 							   
		}
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>GIT</title>
<link rel="icon" href="logo.ico"/>
 <link href="css/1.css" type="text/css" rel="stylesheet"/>
 <link href="css/style.css" type="text/css" rel="stylesheet"/>
 <link href="script/script.js" type="text/javascript"/>
</head>
   
<body>
<div class="clear"></div>
<div id="mainn"><img src="images/logo.jpg" id="logo"/><font id="f1"> GLOBAL TECHNICAL CAMPUS</font></div>
<div class="content" style="margin-top:50px"><div class="ic"></div>
	<div class="container_12">
		<div class="grid_12">
		
		</div>
		<div class="boxes">
		<div class="grid_4">
					<figure>
						<div><img src="images/login.jpg" alt="" onclick="return login()"/></div>
						<figcaption>
                        
							<h3>LOGIN</h3>
							
                            <form name="form1" method="post" action="">
                        
        
   
         
          Enter your user name and password below<br \><br \>
           Username 
               <input name="username" type="text"  id="username" /><br \><br \>
           
               Password <br\>
                <input name="password" type="password"  id="password"/> <br \><br \>
    <input name="Submit" type="submit"  value="Submit">        

        	</form>					
						</figcaption>
					</figure>
				</div>
				<div class="grid_4">
					<figure>
						<div><img src="images/register.jpg" alt=""/></div>
						<figcaption>
							<h3>Register</h3>
							We have separate registeration corners for faculty and students. Once registered your rregisteration request form will be approved by the administration after that we will inform you through your email address.<br \><br \>
                          
							<a href="registerf.php" class="btn">Faculty Registeration</a><br \><br \>
                          
							<a href="registers.php" class="btn">Student Registeration</a>

						</figcaption>
					</figure>
				</div>
				<div class="grid_4">
					<figure>
						<div><img src="images/about.jpg" alt=""/></div>
						<figcaption>
							<h3>ABOUT</h3>
							 Global Institute of Technology is one of the renowned college of Rajasthan. Our emphasis is on maintaing our quality so we keep evaluating our services and faculty for better results.<br \><br \><br \>
                          <b><ul>   Management</ul></b><br \>
Sh. Anand Singhal (Chairman)<br \>
Sh. Raj Kumar Kandoi ( Vice Chairman)<br \>
Sh. Narendra Kr. Kandoi (Vice Chairman)<br \>
Prof. Renu Joshi (Director, GIT)<br \>
Prof. K. S. Rajanandam (Director, GCT)<br \>

						</figcaption>
					</figure>
				</div>
				<div class="clear"></div>
				</div>
</div>
</body>

</html>
