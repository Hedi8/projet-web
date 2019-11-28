<?php 


session_start() ; 
header('location:member.html') ; 
include('../config.php') ; 


 
$email = $_POST['email'];  
$pass = $_POST['password']; 



$s = " select * from usertable where email = '$email' && password = '$pass' "; 

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result); 

if($num == 1) {
    $_SESSION['username'] = $name; 
    header('location:index.html') ; 
} else{
    header('location:member.html') ;
} 



?>
    
    
    
    
    