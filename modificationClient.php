<?php 
	   session_start();
	   if(isset($_POST['submit'])) 
       {
            require_once("Connexion.php");

            $cin=$_POST['cin'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $tel=$_POST['tel'];

            $sql = "UPDATE `client` SET `Email`='$email',`Tel`='$tel',`Pass`='$pass',`Prenom`='$prenom',`Nom`='$nom' where `Cin`='$cin'";


           if($m->query($sql))
           {
           	   $_SESSION["modif"] = true;
           	   $m->close();
               header('Location: Admin.php');
           }else
           {
           		$_SESSION["modif"] = False;
           		$m->close();
               header('Location: modifierClient.php');
           }
           
                                         
        
       }

?>