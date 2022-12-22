<?php 
session_start();
 		if(isset($_POST['signin'])) 
         {
             require_once("Connexion.php");
             
            $cin=$_POST['your_name'];
            $pass=$_POST['your_pass'];

            $sql = "select * from client where Cin = '$cin' && Pass = '$pass'";
            $resultat = $m->query($sql);
           if($row=$resultat->fetch_assoc())
           {
               
               $_SESSION["CIN"] = $cin;
               $_SESSION["page"] = "client";
               header('Location: validation.php');   

           }else
           {	
           		$sql = "select * from ouvrier where Cin = '$cin' && Pass = '$pass'";
          	    $resultat = $m->query($sql);
           		if($row=$resultat->fetch_assoc())
           		{
	               $_SESSION["CIN"] = $cin;
	               $_SESSION["page"] = "ouvrier";
	               header('Location: AccueilOuvrier.php'); 
           		}else
           		{
           			$sql = "select * from admin where Cin = '$cin' && Pass = '$pass'";
          	   		$resultat = $m->query($sql);
          	   		if($row=$resultat->fetch_assoc())
          	   		{
			            $_SESSION["CIN"] = $cin;
			            $_SESSION["page"] = "admin";
			            header('Location: Admin2.php'); 
          	   		}else
          	   		{
          	   			echo "<script>alert(\"User ou mot de pass est incorrect !!!\");</script>";
          	   			header('Location: Login.php'); 
          	   		}
           		}
           }
           $m->close();
                                         
         }
?>