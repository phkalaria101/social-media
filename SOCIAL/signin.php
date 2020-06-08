<?php
echo "<h1><I><center> YOU ARE LOG IN SOCIAL WORLD SUCCESSFULLY </I></center></h1>";

echo "<h4><I><center><a href='./homepage.php'>click here to enter home page</center></I></h4>";

$connected= mysqli_connect("localhost","root","","social");

if(isset($_POST["sign"]))
{
 $u=$_POST["u"];
 $p=$_POST["p"];
 
 mysqli_query($connected , "insert into web values('$u','$p')");
  
 /* echo "<script> location.href='https://www.amazon.in/'</script>"; */
}
?>