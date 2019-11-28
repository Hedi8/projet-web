<?php 


session_start() ; 
//header('location:page-login.html') ; 
$con = mysqli_connect('localhost','root','') ; 
mysqli_select_db($con, 'projet') ; 


 
$email = $_POST['email'];  
$pass = $_POST['password']; 



$s = " select * from usertable where email = '$email' && password = '$pass' "; 

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result); 

if($num == 1) {
    $_SESSION['username'] = $email;
    header('location:index.html') ; 
} else{
    header('location:page-login.html') ;
} 



?>
    