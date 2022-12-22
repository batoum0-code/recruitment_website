<?php 
	   session_start();
	   if(isset($_GET['idcl'])) 
       {
            require_once("Connexion.php");

            $cin=$_GET['idcl'];

            $sql = "DELETE FROM `client` WHERE Cin = '$cin'";


           if($m->query($sql))
           {
           	   $_SESSION["sup"] = true;
           	   $m->close();
               header('Location: Admin.php');
           }else
           {
           		$_SESSION["sup"] = False;
           		$m->close();
               header('Location: Admin.php');
           }
           
                                         
        
       }

?>