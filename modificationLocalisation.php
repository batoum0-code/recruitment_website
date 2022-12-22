<?php 
	   session_start();
	   if(isset($_POST['ville']) && isset($_POST['region']) && isset($_POST['Idl'])) 
       {
            require_once("Connexion.php");

            $ville=$_POST['ville'];
             $Idre=$_POST['region'];
             $Idl=$_POST['Idl'];
            $sql = "UPDATE `localisation` SET `Ville`='$ville',`idre`='$Idre' where `Idl`='$Idl'";


           if($m->query($sql))
           {
           	   $_SESSION["modif"] = true;
           	   $m->close();
               header('Location: Localisation.php');
           }else
           {
           		$_SESSION["modif"] = False;
           		$m->close();
               header('Location: Localisation.php');
           }
           
                                         
        
       }

?>