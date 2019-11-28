<?php 


session_start() ; 
 
include('../config.php'); 


$name = $_POST['user'] ; 
$email = $_POST['email'];  
$pass = $_POST['password']; 



$s = "select * from usertable where name ='$name' && email ='$email'"; 

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result); 

if($num == 1) {
    echo" Email OR Name Already Taken" ; 
} else{
    $reg= " insert into usertable(name , email , password) values ('$name' , '$email' , '$pass')" ; 
    mysqli_query($con, $reg) ; 
    header('location:member.html') ; 
} 



?>