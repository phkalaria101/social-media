<?php
mysql_connect("localhost","root","");
mysql_select_db("gati");
$id=$_REQUEST["id"];
mysql_query("delete from web where id=$id");
header("location:entity.php");
?>