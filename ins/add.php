<?php
mysql_connect("localhost","root","");
mysql_select_db("user");
if(isset($_POST["crt"]))
{
 $un=$_POST["u"];
 $psw=$_POST["p"];
 
 mysql_query("insert into web values(null,'$un','$psw')");

}
	
?>
<html>
<body>	
<form name="f1" action="#" method="post">
username
<input type="text" name="n"/></br>
password
<input type="text" name="a"/></br>
</form>
</body>
</html>
