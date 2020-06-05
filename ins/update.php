<?php
mysql_connect("localhost","root","");
mysql_select_db("gati");
$id=$_REQUEST["id"];
$res=mysql_query("select * from web where id=$id");
$row=mysql_fetch_row($res);
if(isset($_POST["update"]))
{ 
 $n=$_POST["n"];
 $a=$_POST["a"];
 $c=$_POST["c"];
 mysql_query("update web set name='$n' ,address='$a',city='$c' where id=$id");
 header("location:entity.php");
 }
 
?>
<html>
<body>
<table>
<form name="f1" action="#" method="post">
<tr><td>Name
<input type="text" name="n" value="<?php echo $row[1];?>"/></br></td></tr><tr><td>
Address
<input type="text" name="a" value="<?php echo $row[2];?>"/></br><td></tr><tr><td>
city
<input type="text" name="c" value="<?php echo $row[3];?>"/></br>
</td></tr>
<tr><td><input type="submit" name="update" value="add" /></td></tr>

</table>
</form>
</body>
</html>