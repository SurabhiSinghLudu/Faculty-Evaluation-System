
function check()
{

var username=document.login.usernmae.value;
var password=document.login.password.value;
if(password!=cpassword)
{
alert("Password not matched");
document.getElementById('password').value="";
document.getElementById('cpassword').value="";
document.getElementById('password').focus();
}
}
function login()
{

var username=document.index.login.value;
var password=document.index.login.value;
if (username==null || x=="")
  {
  alert("Username must be filled out");
  return false;
  }
if (password==null || x=="")
  {
  alert("Password must be filled out");
  return false;
  }
}

