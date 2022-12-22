<?php 
	   session_start();
	   $img="";
       $pdf="";
	   if(isset($_POST['signup'])) 
       {
            require_once("Connexion.php");

            $cin=$_POST['cin'];
            $Decription=$_POST['Decription'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $tel=$_POST['tel'];
            $localisation=$_POST['localisation'];
            $proffession=$_POST['proffession'];
            $img=$_FILES['img']['name'];
            $upload = "images/".$img;
            move_uploaded_file($_FILES['img']['tmp_name'], $upload);

            $pdf=$_FILES['pdf']['name'];
            $upload1 = "images/".$pdf;
            move_uploaded_file($_FILES['pdf']['tmp_name'], $upload1);

            $sql = "INSERT INTO `ouvrier`(`Cin`, `Email`, `Tel`, `Pass`, `Prenom`, `Nom`, `ImgP`, `Imgc`, `Idlo`, `act`, `Idpr`, `des`) VALUES ('$cin','$email','$tel','$pass','$prenom','$nom','$img','$pdf','$localisation',0,'$proffession','$Decription')";


           if($m->query($sql))
           {
           	   echo "<script>alert('Ajout reussi');</script>";
           	   $m->close();
               header('Location: Admin2.php');
           }else
           {
           		echo "<script>alert(\"\");</script>";
           }
           
                                         
         }
?>