<?php
include "../entities/abone.php" ;
include "../core/aboneC.php" ;
session_start();

	if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['age']) and isset($_POST['num']) and isset($_POST['type']) and isset($_POST['startdate']))
{
        
        
$c=new abonement(($_POST['id']),($_POST['nom']),($_POST['prenom']),($_POST['age']),($_POST['num']),($_POST['type']), ($_POST['startdate']));
        
        
$cC=new abonementC() ;
$cC->ajouterAbonement($c);
        $session['date']=($_POST['startdate']) ; 
header('location:services.html');
}
else
	{
		echo "verifier les champs";	
	}


?>
