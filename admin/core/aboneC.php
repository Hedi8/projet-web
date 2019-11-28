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
        
        
      function supprimerAbonement($id)
	{
		$sql="DELETE FROM abonement where id=:id";
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
        function recupererAbonement($id){
		$sql="SELECT * from abonement where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        
        
    }
        function modifierAbonement($abonement,$id)
{
		$sql="UPDATE abonement SET id=:idd,nom=:nom,prenom=:prenom,age=:age,num=:num,type=:type,startdate=:startdate WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$abonement->getId();
        $nom=$abonement->getNom();
        $prenom=$abonement->getPrenom();
        $age=$abonement->getAge();
        $num=$abonement->getNum();
        $type=$abonement->getType();
        $startdate=$abonement->getStartdate();
		$datas = array(':idd'=>$idd,':id'=>$id,':nom'=>$nom,':prenom'=>$prenom,':age'=>$age,':num'=>$num,':type'=>$type,':startdate'=>$startdate);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
         $req->bindValue(':age',$age);
		$req->bindValue(':num',$num);
		$req->bindValue(':type',$type);
        $req->bindValue(':startdate',$startdate);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    }
        