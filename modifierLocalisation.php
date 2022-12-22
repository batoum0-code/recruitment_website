<?php
  require_once("Connexion.php");
      
 $idcl=isset($_GET['idcl'])?$_GET['idcl']:0;
 $requete="select * from localisation where Idl='$idcl'";
 $resultat=$m->query($requete);
 $row=$resultat->fetch_assoc();

 $ville=$row['Ville'];
 $Idre=$row['idre'];
 $Idl=$row['Idl'];
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="hamza dbani">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Modifier Localisation</title>

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
  <body style="background-image: url('images/RLQNm.jpg');">
    <br><br><br>
<div class="container">
    
  <div class="inscform">
     <form class="" id="" name="" method="post" action="modificationLocalisation.php">
                             <div class="row">
                          <div class="form-group col-12"> 
                            <input type="hidden" name="Idl" class="form-control" placeholder="id" value="<?php echo $Idl?>">
                                <label for="ville"><i class="zmdi zmdi-pin"></i></label>
                                <?php echo"<input type='text'class='form-control'  name='ville' value='$ville' id='ville' placeholder='Ville ...' required/>" ?>
                            </div>
                          </div>
                          <br>
                            <div class="row">
                            <div class="form-group col-12"> 
                                <select id="region" name="region" class='form-control' required>
                                <?php
                                     require_once("Connexion.php");
                                     $sql = 'select * from Region';
                                     $resultat = $m->query($sql);
                                     while($row=$resultat->fetch_assoc())
                                     {
                                        $id=$row['Idr'];
                                        $n=$row['Reg'];
                                        if($Idre==$id)
                                        {
                                          echo"<option value='$id'  selected>$n</option> ";
                                        }else
                                        {
                                          echo"<option value='$id' >$n</option> ";
                                        }
                                        
                                     }
                                ?>           
                                <option >choisissez votre Region</option>                    
                                </select>
                                <br>
                            </div>
                          </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" class="form-submit" value="Modifier" />
                            </div>  
     </form> 
  </div>      
  
  </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
