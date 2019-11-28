<?php 


session_start() ; 
 
include ('../config.php'); 


$nom = $_POST['nom'] ; 
$prenom = $_POST['prenom'];  
$age = $_POST['age'];
$num = $_POST['num'];
$type = $_POST['type'];



$s = "select * from abonement where nom ='$nom'"; 

$result = mysqli_query($con, $s); 

//$num = mysqli_num_rows($result); 

    $reg= " insert into abonement(nom , prenom , age , num , type) values ('$nom' , '$prenom' , '$age' , '$num' , '$type')" ; 
    mysqli_query($con, $reg) ; 
    //header('location:member.html') ; 
 



?>
<html>
    <head></head>
    <body>

<form method="post">
    <p>nom</p>
<input name="nom" type="text" >
    <p>prenom</p>
<input name="prenom" type="text" >
    <p>age</p>
<input name="age" type="number" >
    <p>num</p>
<input name="num" type="text" >
    <br/><br/>
    <select name="type">
                            <option>par an</option>
                            <option>par mois</option>
                            <option>par trimestre</option>
                            <option>par seance</option>
    
    
    
    </select>
    
    <br/><br/>
    <input type="submit" name="ajout" value="confirmer">


</form>
    </body></html>