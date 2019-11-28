<?php
include "../entities/user1.php" ;
include "../core/user1C.php" ;

	if (isset($_POST['user']) and isset($_POST['email']) and isset($_POST['password']))
{
  $num = mysqli_num_rows($result);
        if($num == 1)
        {
            echo"Email already used"; 
        }else
        {
            $c=new user1(($_POST['user']),($_POST['email']),($_POST['password']));      
            $cC=new user1C() ;
            $cC->ajouterUser($c);
            header('location:index.html');
        }

}
else
	{
echo"verifier les champ" ; 
	}


?>
