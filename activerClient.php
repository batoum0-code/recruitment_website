<?php 
	   session_start();
	   if(isset($_GET['idcl'])&&isset($_GET['etat'])) 
       {
            require_once("Connexion.php");

            $cin=$_GET['idcl'];
            $act = $_GET['etat'];
            if($act==0)
            $sql = "UPDATE `client` SET act=1 WHERE Cin = '$cin'";
            else
            $sql = "UPDATE `client` SET act=0 WHERE Cin = '$cin'";

           if($m->query($sql))
           {
           	   $m->close();
               header('Location: Admin.php');
           }
           
                                         
        
       }

?>