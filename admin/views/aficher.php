<?PHP
include "../core/aboneC.php";
$cC=new abonementC();
$listeabonement=$cC->afficherAbonement_return();

//var_dump($listeEmployes->fetchAll());
?>

<html>

<body>
<table border="1">
    <tr>
            <td>reference</td> <td>adresse</td> <td>superficie</td><td>prix mettre carre</td><td>date</td><td>aasba</td>
    </tr>
    <?php
    while($donnee=$listeabonement->fetch())
    {
    ?>
    
    <tr>
                <td><?php echo $donnee['id'];?></td>
                <td><?php echo $donnee['nom'];?></td>
                <td><?php echo $donnee['prenom'];?></td>
                <td><?php echo $donnee['age'];?></td>
                <td><?php echo $donnee['num'];?></td>
                <td><?php echo $donnee['type'];?></td>
               
        
	
    
    </tr>

  <?php
    }
    ?>
    
    
    
</table>
    <a href="#" >ajouter une maison</a>
</body>
</html>

