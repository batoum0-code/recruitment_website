<?php 
	   session_start();
	   if(isset($_POST['Idp']) && isset($_POST['Proffession'])) 
       {
            require_once("Connexion.php");

            $Idp=$_POST['Idp'];
             $Proffession=$_POST['Proffession'];
            $sql = "UPDATE `proffession` SET `Prof`='$Proffession' where `Idp`='$Idp'";


           if($m->query($sql))
           {
           	   $_SESSION["modif"] = true;
           	   $m->close();
               header('Location: Proffession.php');
           }else
           {
           		$_SESSION["modif"] = False;
           		$m->close();
               header('Location: Proffession.php');
           }
           
                                         
        
       }

?>