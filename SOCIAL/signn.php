<?php


$connected= mysqli_connect("localhost","root","","social");
if(isset($_POST["sign"]))
{
 $u=$_POST["u"];
 $p=$_POST["p"];
 
 mysqli_query($connected , "insert into web values('$u','$p')");
  
 /* echo "<script> location.href='https://www.amazon.in/'</script>"; */
 
 
}
?>
 