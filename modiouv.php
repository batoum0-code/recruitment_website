<?php 
	   session_start();
	   if(isset($_SESSION["CIN"])) 
       {
            require_once("Connexion.php");

            $cin=$_SESSION["CIN"];          
            $email=$_POST['email'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $tel=$_POST['tel'];
            $pass=$_POST['pass'];
            $Decription=$_POST['des'];
            $pdf=$_FILES['pdf']['name']; 
            if($pdf=="")
            {
                $sql = "UPDATE `ouvrier` SET `Email`='$email',`Tel`='$tel',`Pass`='$pass',`Prenom`='$prenom',`Nom`='$nom',`des`='$Decription' WHERE `Cin`='$cin'";
           
            }else
            {
                $upload1 = "images/".$pdf;
                move_uploaded_file($_FILES['pdf']['tmp_name'], $upload1);
                $sql = "UPDATE `ouvrier` SET `Email`='$email',`Tel`='$tel',`Pass`='$pass',`Prenom`='$prenom',`Nom`='$nom',`pdft`='$pdf',`des`='$Decription' WHERE `Cin`='$cin'";
            }
            

         

            


           if($m->query($sql))
           {
           	   echo '<SCRIPT language="Javascript">alert(\'Modification valide !\');</SCRIPT>';
           	   $m->close();
               header('Location: AccueilOuvrier.php');
           }else
           {
           		echo '<SCRIPT language="Javascript">alert( \'Modification echoue !\');</SCRIPT>';
           		$m->close();
               header('Location: AccueilOuvrier.php');
           }
           
                                         
         
   }

?>