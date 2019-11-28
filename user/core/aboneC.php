<?php 
include ("config.php") ; 

    class abonementC
{
    

    
   
        function afficherAbonement ($abonement){
        echo "id: ".$abonement->getId()."<br>";   
		echo "nom: ".$abonement->getNom()."<br>";
		echo "prenom: ".$abonement->getPrenom()."<br>";
        echo "age: ".$abonement->getAge()."<br>";
		echo "num: ".$abonement->getNum()."<br>";
		echo "type: ".$abonement->getType()."<br>";
        echo"startdate".$abonement->getStartdate()."<br>" ; 
	} 
       function ajouterAbonement($abonement)
        {
		$sql="insert into abonement (id, nom, prenom, age, num, type ,startdate) values (:id, :nom, :prenom, :age, :num, :type, :startdate)";
		$db = config::getConnexion();
        
		try{
        $req=$db->prepare($sql);
            
		$id=$abonement->getId();
        $nom=$abonement->getNom();
        $prenom=$abonement->getPrenom();
        $age=$abonement->getAge();
        $num=$abonement->getNum();
        $type=$abonement->getType();
        $startdate=$abonement->getStartdate();
            
        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':age',$age);
		$req->bindValue(':num',$num);
		$req->bindValue(':type',$type);
        $req->bindValue(':startdate',$startdate);
		
            $req->execute();
           
        }
        
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
        } 
        
        
        
        function afficherAbonement_return()
        {
		
		$sql="SElECT * From abonement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}
        
        
      function supprimerAbonement($Id)
	{
		$sql="DELETE FROM abonement where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}  
        
    }
        