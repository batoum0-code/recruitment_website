<?php 
	   session_start();
	   if(isset($_POST['signup'])) 
       {
            require_once("Connexion.php");

            $Proffession=$_POST['Proffession'];
           

            $sql = "INSERT INTO `proffession`(`Prof`) VALUES ('$Proffession')";


           if($m->query($sql))
           {
           	   echo '<script>alert("Ajout reussi");</script>';
           	   $m->close();
               header('Location: Proffession.php');
           }else
           {
           		echo '<script>alert("Ajout errone");</script>';
           		$m->close();
               header('Location: Proffession.php');
           }
           
                                         
         
       }

?>