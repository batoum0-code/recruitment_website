<?php 
	   session_start();
	   $img="";
	   if(isset($_POST['signup'])) 
       {
            require_once("Connexion.php");

            $cin=$_POST['cin'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $tel=$_POST['tel'];
            $localisation=$_POST['localisation'];
            $img=$_FILES['img']['name'];
            $upload = "images/".$img;
            move_uploaded_file($_FILES['img']['tmp_name'], $upload);

            $sql = "INSERT INTO `client`(`Cin`, `Email`, `Tel`, `Pass`, `Prenom`, `Nom`, `ImgP`, `Idlo`, `act`) VALUES ('$cin',     '$email','$tel','$pass','$prenom','$nom','$img','$localisation',0)";


           if($m->query($sql))
           {
           	   $_SESSION["ajout"] = true;
               echo "<script>alert('Ajout reussi');</script>";
           }else
           {
           		$_SESSION["ajout"] = False;
                echo "<script>alert('Ajout faild');</script>";
           		
           }
           $m->close();
           header('Location: Admin.php');
                                         
         }else{
            echo"<option selected>En premier choisissez votre Region</option>";
       }

?>