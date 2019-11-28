
<?php
session_start() ; 
$con = mysqli_connect('localhost','root','') ; 
mysqli_select_db($con, 'projet') ; 

if(isset($_POST['subpass']))
{
    $o_password = $_POST['o_password'] ; 
    $n_password = $_POST['n_password'] ;
    $r_password = $_POST['r_password'] ;
    $name = $_POST['name']; 
    
    
     
    /*$query = mysqli_query($con,"SELECT * FROM usertable WHERE name='{$_POST['name']}' AND password='$o_password'") ; */
    
    $s = " select * from usertable where name = '$name' && password = '$o_password' "; 

     $result = mysqli_query($con, $s); 

   $rows = mysqli_num_rows($result); 
    //$rows = mysqli_num_rows($query) ; 
    
    
    
    if(empty($o_password))
    {
        echo 'veuillez saisir votre ancien mot de passe' ; 
    }else if($n_password != $r_password)
    {
        echo 'vos nouveau mots de passe son differents' ; 
    }else if ($rows == 0)
    {
        echo'lancien mot de passe est incorrect' ; 
    }else
    {
        
        $ss="update usertable set password='$n_password'WHERE name='$name' "; 
        mysqli_query($con,$ss) ; 
        
        
        
    }
}
?>

<form method="post">
    <a href="index.html">Home</a>
    <p>User name</p>
    <input type="text" name="name">
    
    <p>Ancien mot de passe</p>
    <input type="password" name="o_password">
    
    <p>Nouveau mot de passe</p>
    <input type="password" name="n_password">
    
    <p>Repeter nouveau mot de passe</p>
    <input type="password" name="r_password">
    
    <br/><br/>
    
    <input type="submit" name="subpass" value="Changer de mot de passe">





</form>