
<?php 
       session_start();
     
       if(isset($_POST['contact'])) 
       {

            require_once("Connexion.php");

            $name=$_POST['name'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            $email=$_POST['email'];
           

            $sql = "INSERT INTO `contact`(`nom`, `message`, `email`, `objet`) VALUES ('$name','$message','$email','$subject')";
$m->query($sql);
  $m->close();
  header('Location: Login.php');
}
?>