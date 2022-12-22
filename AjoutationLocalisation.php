<?php 
	   session_start();
	   if(isset($_POST['signup'])) 
       {
            require_once("Connexion.php");

            $ville=$_POST['ville'];
            $reg=$_POST['region'];

            $sql = "INSERT INTO `localisation`( `Ville`, `idre`) VALUES ('$ville','$reg')";


           if($m->query($sql))
           {
           	   echo "<script>alert('Ajout reussi');</script>";
           	   $m->close();
               header('Location: Localisation.php');
           }else
           {
           		echo "<script>alert('Ajout errone');</script>";
           		$m->close();
               header('Location: Localisation.php');
           }
           
                                         
         }else{
            echo"<option selected>En premier choisissez votre Region</option>";
       }

?>