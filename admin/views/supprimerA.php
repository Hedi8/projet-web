<?PHP
include "../core/aboneC.php";
$abonementC=new abonementC();
if (isset($_POST["id"])){
	$abonementC->supprimerAbonement($_POST["id"]);
	header('Location: table-datatable.php');
}

?>