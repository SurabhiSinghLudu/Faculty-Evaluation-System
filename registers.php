<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Register</title>
</head><script type="text/javascript" language="javascript" src="scrit.js">
</script>
<body>
<form method="post" action="form1.php" name="form1" id="form1">
<table align="center" width="600px"; height="300px" id="register">
<tr><td>Name</td><td><input type="text" name="name" id="name"/></td></tr>
<tr><td>Roll No</td><td><input type="text" name="username" id="username" onblur="chkuname(this.value)/"></td></tr>
<tr><td>Password</td><td><input type="password" name="password" id="password"/></td></tr>
<tr><td>Confirm Password</td><td><input type="password" name="cpassword" id="cpassword" onblur="return check()"/></td></tr>
<tr><td>Email id</td><td><input type="text" name="email" id="email" onblur="return checkEmail(this.value)"/></td></tr>
<tr><td>Semester</td><td><select id="semester" class="semester" name="semester"><option>I</option><option>II</option><option>III</option><option value="IV">IV</option><option value="V">V</option><option>VI</option><option>VII</option><option>VIII</option></select></td></tr>
<tr><td>Branch</td><td><select id="branch" name="branch" class="branch"><option value="CS">Computer Science</option><option value="IT">Information Technology</option><option value="EC">Electronics & Communication</option><option value="EE">Electrical Engineering</option><option value="ME">Mechanical Engineering</option><option value="EIC">Instrumental Control</option></select></td></tr>
<tr><td>Contact No</td><td><input type="text" name="contact" id="contact" onkeypress="return isNumberKey(event)"/></td></tr>
<tr><td><input type="submit" value="Submit" onclick="return submit()"/></td></tr>

</table></form>
</body>

</html>
