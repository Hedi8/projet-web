<html>
    <head></head>
<body>
<?php
include "../entities/abone.php";
include "../core/aboneC.php";
if (isset($_GET['id'])){
	$abonementC=new abonementC();
    $result=$abonementC->recupererAbonement($_GET['id']);
	foreach($result as $donnee){
		$id=$donnee['id'];
		$nom=$donnee['nom'];
		$prenom=$donnee['prenom'];
        $age=$donnee['age'];
		$num=$donnee['num'];
		$type=$donnee['type'];
        $startdate=$donnee['startdate'];
?>
    
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>Id</td>
<td><input type="text" name="id" value="<?PHP echo $id ;?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ;?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ; ?>"></td>
</tr>
    <tr>
<td>age</td>
<td><input type="text" name="age" value="<?PHP echo $age ; ?>"></td>
</tr>
    <tr>
<td>num</td>
<td><input type="text" name="num" value="<?PHP echo $num ; ?>"></td>
</tr>
    <tr>
<td>type</td>
<td><input type="text" name="type" value="<?PHP echo $type ; ?>"></td>
</tr>
    <tr>
<td>start date</td>
<td><input type="text" name="startdate" value="<?PHP echo $startdate ; ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idd" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?php
	}
}
if (isset($_POST['modifier'])){
	$abonement=new abonement($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['num'],$_POST['type'],$_POST['startdate']);
	$abonementC->modifierAbonement($abonement,$_POST['idd']);
	echo $_POST['idd'];
	//header('Location: table-datatable');
}
    ?>
    <p>you can't</p>
</body>
</html>
