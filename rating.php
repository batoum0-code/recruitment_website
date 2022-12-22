
<?php
session_start();
require 'Connexion.php';
if($_SESSION["page"]="client"){

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
 $rating = $_POST["rating"];
 $Cin = $_POST["Cin"];
 $nom = $_POST["nom"];
 $nomm = $_POST["nomm"];
 $prenom = $_POST["prenom"];
 $des = $_POST["des"];
 $photo = $_POST["photo"];
 $photo2 = $_POST["photo2"];
 $photo3 = $_POST["photo3"];
 $tel = $_POST["tel"];
 $reg = $_POST["reg"];
 $ville = $_POST["ville"];
 $prof = $_POST["prof"];
 $comm = $_POST["commentaire"];
 $email = $_POST["email"];
 

 echo "<h1>$comm</h1>";

 $sql = "INSERT INTO `rate`(`comm`,`score`, `Nom`,`Cino`,`email`) VALUES ( '$comm','$rating','$nomm','$Cin','$email')";

 if ($m->query($sql))
 {
     $succes= "New Rate addedddd successfully";

     header("Location: job_details.php?Cin=$Cin&des=$des&prenom=$prenom&nom=$nom&photo=$photo&photo2=$photo2&photo3=$photo3&tel=$tel&reg=$reg&ville=$ville&prof=$prof&err=$succes"); 

 }
 else
 {
    $msg="erreur";
     echo "Error: " . $sql . "<br>" . mysqli_error($m);
 }
 mysqli_close($m);
}
else{

header("Location:Login.php");


}

}
?>

