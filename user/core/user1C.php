<?php 
include ("config.php") ; 

    class user1C
{
    

    
   
        
	 
        function ajouterUser($usertable)
        {
		$sql="insert into usertable (name,email,password) values (:name, :email, :pssword)";
		$db = config::getConnexion();
        
		try{
        $req=$db->prepare($sql);
		
        $name=$usertable->getName();
        $email=$usertable->getEmail();
        $password=$usertable->getPassword();
       
		$req->bindValue(':name',$name);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		
            $req->execute();
           
        }
        
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
        } 
        
        
        
    }