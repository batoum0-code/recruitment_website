<?php

   session_start();
  if(!isset($_SESSION["page"]))
        header('Location: Login.php');
    else
    {
        if($_SESSION["page"]!="admin")
        {
            header('Location: deconnexion.php');
        }
    }

    if(isset($_SESSION["modif"]))
    {
        echo "<script type=\"text/javascript\"> alert(\"Modification est Validé \"); </script>";
        unset($_SESSION["modif"]);
    }else
    {

        if(isset($_SESSION["supp"]))
        {
            echo "<script type=\"text/javascript\"> alert(\"Suppression est Validé \"); </script>";
            unset($_SESSION["supp"]);
        }
    }

     require_once("Connexion.php");
     

     if(isset($_POST['nom']) && $_POST['nom']!="")
     {
        $nom1 = $_POST['nom'];
          
         $sql1 = "select * from ouvrier where Nom like '$nom1%' or Prenom like '$nom1%'";
         $resultat1 = $m->query($sql1);
     }else
     {
         $sql1 = 'select * from ouvrier';
         $resultat1 = $m->query($sql1);
     }
      
   /* while($row=$resultat->fetch_assoc())
    {
          $id=$row['Idr'];
          $n=$row['Reg'];

     }*/
 ?>  
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="hamza dbani">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   
    <link rel="stylesheet" href="chercherStyle.css">
      
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        


    

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
      .lignecolor{
        background: white;
        text-align: center;
    }
      .tablecolor{
        background: #228B22;
        color: white;
        font-weight: bold;
        font-family:serif;
        padding: 12px 15px;
        text-align: center;
    }
      .tablecontent{
        border-radius: 10px 10px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.15);
        width: 100%;
        height: 100%;
    }
    .pagination {
     display: inline-block;

     
     }

   .pagination a {
     color: green;
     background-color: white;
     float: left;
     margin-top: 20%;
     padding: 8px 16px;
     text-decoration: none;
     border-radius: 30px 30px 30px 30px;
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
     nav div ul li ul li{
        display: none;
        
    }
    nav div ul li:hover ul li{
        display: block;
    }
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #666;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
    </style>
  </head>
  <body style="background-image: url('images/RLQNm.jpg');">
<form method="post" action="Admin2.php">

     <ul>
     
    
    <li>
       <button type="button" onclick="window.location.href='Admin2.php';"  style="background-color:#666; margin-left: 10px; margin-top: 8px;">Ouvriers</button>
    </li>
    <li>
        <button type="button" onclick="window.location.href='localisation.php';" style="background-color:#666; margin-left: 10px; margin-top: 8px;">Villes</button>
    </li>
     <li>
        <button type="button" onclick="window.location.href='Proffession.php';" style="background-color:#666; margin-left: 10px; margin-top:8px;">Proffessions</button>

    </li>
    <li>
        <button type="button" onclick="window.location.href='contactform.php';" style="background-color:#666; margin-left: 10px; margin-top:8px;">Contacts</button>
    </li>
    <li>
        <input type="text" name="nom" placeholder="Nom....."  style="background-color:#666; margin-left: 10px; margin-top:8px;" > 
    </li>
    <li>
        <button type="submit" style="background-color:#666; margin-left: 10px; margin-top: 10px;"><i class="fa fa-search"  ></i></button>
    </li>
    
    <li><a href="deconnexion.php"   class="icon-signout" style="margin-left: 300px;">Deconnexion</a></li>  

  </ul>
</form>
  <div class="container">
      
       <div class="panel panel-success margetop">
    <center><div  class="panel-heading" style=" display: inline-block;width: 500px;height: 100px;color:white; font-size:xx-large;">Liste des Ouvriers</div></center>
  
    <form method="get" action="modifieremployes.php">
    <div class="panel panel-primary margetop">

    <div class="panel-body">
    <a href="AjoutAdminOuvrier.php"style=" margin-left:  93%;" >Ajout</a>
        <table class=tablecontent>
        <thead class=tablecolor>
         <tr>
            <th></th>
            <th>CIN</th>
            <th>NOM</th>
            <th>EMAIL</th>
            <th>TELEPHONE</th>
            <th>POSTE</th>
            <th>ACTION</th>
            </tr>
        
        </thead>
        <tbody>
            <?php while($Row1=$resultat1->fetch_assoc()){ ?>
            <tr class=lignecolor>
            <td><img style="width:80px;height:80px;border-radius:500px;" src="images/<?php echo $Row1['ImgP']?>"/></td>
            <td><?php echo $Row1['Cin'] ?></td>
            <td><?php echo $Row1['Nom']." ".$Row1['Prenom'] ?></td>
            <td><?php echo $Row1['Email'] ?></td>
            <td><?php echo $Row1['Tel'] ?></td>
            <td><?php echo "Ouvrier" ?></td>
            <td>
             <a href="modifierOuvrier.php?idcl=<?php echo $Row1['Cin']?>" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
             <a onclick="return confirm('Etes vous sûr de vouloir Supprimer Ouvrier ? ')" href="supprimerOuvrier.php?idcl=<?php echo $Row1['Cin'] ?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
             <a href="activerOuvrier.php?idcl=<?php echo $Row1['Cin']?>&etat=<?php echo $Row1['act']?>">
            <?php
                if ($Row1['act']==0) {?>
                    <span class="material-icons">done</span>
              <?php }?>  
            <?php
                if ($Row1['act']==1) {?>
                    <span class="material-icons">close</span>
              <?php }?>
             </a>
              </td>
            </tr>
            <?php } ?>
            </tbody>
       
            
        </table>
    </div></div>
    </form>
  
      </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>