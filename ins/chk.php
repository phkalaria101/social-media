<?php
session_start();
$cn=@mysql_connect("localhost","root","");
$db=@mysql_select_db("detail");
if(isset($_POST["crt"]))
{
	$un=$_POST["un"];
	echo $un;
	$p=$_POST["pass"];
	$res=mysql_query("select Username,Password from registration where Username='$un'");
	$r=@mysql_num_rows($res);
	if(!$r)
	{
		echo "<BR> User Not Exists";
	}
	else
	{
		$row=mysql_fetch_row($res);
		if($row[7]==$un&&$row[8]==$p)
		{
			$_SESSION["un"]=$un;
			
			header("location:main.php");
		}
		else
		echo "<br> Please Confirm Username or Password";
		
	}
}
?>

<html>
<body>
<table>
<form name="f1" method="post" action="#">
<tr><td>UserName</td><td>
<input type="text" name="un" /></td></tr>
<tr><td>Password</td><td>
<input type="password" name="pass" /></td></tr>
<tr><td><input type="submit" name="crt" value="Login" /></td></tr>
</form>
</table>
</body>
</html>