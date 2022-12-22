<?php 
       session_start();
       $img="";
       $img1="";
       $img2="";
       $img3="";
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
            $img1=$_FILES['img1']['name'];
            $upload = "images/".$img1;
            move_uploaded_file($_FILES['img1']['tmp_name'], $upload);
            $img2=$_FILES['img2']['name'];
            $upload = "images/".$img2;
            move_uploaded_file($_FILES['img2']['tmp_name'], $upload);
            $img3=$_FILES['img3']['name'];
            $upload = "images/".$img3;
            move_uploaded_file($_FILES['img3']['tmp_name'], $upload);

            $pdf=$_FILES['pdf']['name'];
            $upload1 = "images/".$pdf;
            move_uploaded_file($_FILES['pdf']['tmp_name'], $upload1);

            $sql = "INSERT INTO `ouvrier`(`Cin`, `Email`, `Tel`, `Pass`, `Prenom`, `Nom`, `ImgP`, `Imgc`, `Idlo`, `act`, `Idpr`, `des`,`Imgc1`,`Imgc2`,`Imgc3`) VALUES ('$cin', '$email', '$tel', '$pass', '$prenom', '$nom', '$img', '$pdf', '$localisation', 0, '$proffession', '$Decription','$img1','$img2','$img3')";


           if($m->query($sql))
           {
               $_SESSION["ajout"] = true;
               $m->close();
               header('Location: Login.php');
           }else
           {
                $_SESSION["ajout"] = False;
                $m->close();
               header('Location: Index1.php');
           }
           
                                         
         }
?>