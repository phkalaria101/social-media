<?php
mysql_connect("localhost","root","");
mysql_select_db("gati");
$res=mysql_query("select * from web ");
echo "<table border>";
while($row=mysql_fetch_row($res))
{
 echo "<tr>";
 foreach($row as $v)
  {
    echo "<td>".$v."</td>";
  }
 echo "<td><a href='update.php?id=$row[0]'>update</a></td><td><a href='delete.php?id=$row[0]'>Delete</a></td></tr>";
 }
  	
echo "</table>";
echo "<a href='add.php'>Add New Entity</a>";
?>
