<?php
$con=mysqli_connect('localhost','root','') ; 
 mysqli_select_db($con,'projet') ;

$n=$_GET['nm']; 

$req="DELETE FROM usertable where name='".$n."'"; 
 echo ($req) ;

mysqli_query($con,$req) ;
header("location:table-basic.php") ; 
?>