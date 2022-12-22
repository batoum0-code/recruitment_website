<?php 
	   session_start();
	   if(isset($_GET['idcl'])) 
       {
            require_once("Connexion.php");

            $loc=$_GET['idcl'];

            $sql = "DELETE FROM `proffession` WHERE Idp = '$loc'";


           if($m->query($sql))
           {
           	   $_SESSION["sup"] = true;
           	   $m->close();
               header('Location: Proffession.php');
           }else
           {
           		$_SESSION["sup"] = False;
           		$m->close();
               header('Location: Proffession.php');
           }
           
                                         
        
       }

?>