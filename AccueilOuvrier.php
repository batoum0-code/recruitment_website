<?php
session_start();
  if(!isset($_SESSION["page"]))
        header('Location: Login.php');
    else
    {
        if($_SESSION["page"]!="ouvrier")
        {
            header('Location: deconnexion.php');
        }
    }
  require_once("Connexion.php");
      $cin="";
    $email="";
     $prenom="";
     $nom="";
     $tel="";
     $pass="";
     $act="";
     $img="";
     $des="";
 if(isset($_SESSION["CIN"])?$_SESSION["CIN"]:0)
 {
    $cin=$_SESSION["CIN"];
   $requete="select * from Ouvrier where Cin='$cin'";
   $resultat=$m->query($requete);
   if($row=$resultat->fetch_assoc())
   {
     $email=$row['Email'];
     $prenom=$row['Prenom'];
     $nom=$row['Nom'];
     $tel=$row['Tel'];
     $pass=$row['Pass'];
     $act=$row['act'];
     $des=$row['des'];
     $img = $row['ImgP'];
   }
 }
 



?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="hamza dbani">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Mon Espace</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
  
    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .inscform{
            background: white;
            width: 55%;
            height: 100%;
            padding: 25px 25px 25px 25px;
            border-radius: 20px;
            margin-left: 300px;
          }
      .container img{
              width: 120px;
              height: 120px;
              margin-top: -30px;
              margin-bottom: 30px;
              margin-right: 100px;
              margin-left: 550px;
          }
          h1{
              text-align: center;
              margin-left: 100px;
          }
          .insc{
           text-align: right;
           margin-top: -30px;
          }

    </style>
 <link href="navbar-top.css" rel="stylesheet">
    
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

  </head>
  <body style="background-image: url('images/RLQNm2.jpg');">
    <br><br><br>
    <div class="container">
    
  <div class="inscform">
      
    
         
      <div class="row">
        
          <?php
          if($act==1)
          {
                 echo "<div class='form-group col-12'>  <img src='images/$img' alt='Cinque Terre' width='600' height='400' style='margin-left: 40%;'><br>";
                echo "<label>Cin</label>";
                echo "<input readonly='readonly' name='cin' class='form-control' placeholder='Cin' value=\"$cin\" >" ;
                echo "<label>Email</label>";
                echo "<input type='email' readonly='readonly' name='email' class='form-control' placeholder='Email' value='$email' required></div>";
                echo '<div class="form-group col-12">';
                echo "<label>Nom</label>";
                echo "<input type='text'readonly='readonly' name='nom' class='form-control' placeholder='Nom' value='$nom'required>";
                echo "</div> </div>";
                echo "<div class='row'>
          <div class='form-group col-12'>
                  <label>Prénom</label>
                <input type='text'readonly='readonly' name='prenom' class='form-control' placeholder='Preom d\'utilisateur' value='$prenom'required>   
             </div>
         <div class='form-group col-12'>
                 <label>Téléphone</label>
                <input type='tel'readonly='readonly' name='tel' class='form-control' placeholder='Téléphone' value='$tel' pattern='[0-9]{10}' required>   
             </div>
             </div>
         <div class='row'>
          <div class='form-group col-12'>
                  <label>Description</label>
                <input type='text'readonly='readonly' name='pass' class='form-control' placeholder='Déscription' value='$des'required>   
             </div>
         
             </div>
         
        <br>     
        <div class='row'>
        <div class='form-group col-6'>
        <input type='submit' onclick=\"window.location.href='modouv.php';\"class=\"btn btn-success\" value='Modifier' name='submit' style=\"margin-left:50%;\">
        <input type='submit' onclick=\"window.location.href='deconnexion.php';\"class=\"btn btn-success\" value='Deconnecter' name='submit' style=\"margin-left:120%; margin-top: -24%;\">
        </div>    
        </div> ";
      }else
      {
        echo "<div class='form-group col-12' style=\"margin-left:-8%; color:red;\"> ";
        echo "<h1>Votre</h1><br>";
        echo "<h1>Compte</h1><br>";
        echo "<h1>n'est pas</h1><br>";
        echo "<h1>Activé</h1><br>";
        echo"<input type='submit' onclick=\"window.location.href='deconnexion.php';\"class=\"btn btn-success\" value='Deconnecter' name='submit' style=\"margin-left:49%; \">";
        echo "</div></div> ";
      }
           
      
            
        ?>
             
            
          
            
            
  
            
               
         
          
             
                 
         
       
  </div>      
  
  </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
