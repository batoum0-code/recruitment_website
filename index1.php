<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon service</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
   
         <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <style type="text/css">
            select {

              /* styling */
              background-color: white;
              border: thin solid blue;
              border-radius: 4px;
              display: inline-block;
              font: inherit;
              line-height: 1.5em;
              padding: 0.5em 3.5em 0.5em 1em;

              /* reset */

              margin: 0;      
              -webkit-box-sizing: border-box;
              -moz-box-sizing: border-box;
              box-sizing: border-box;
              -webkit-appearance: none;
              -moz-appearance: none;
            }


           

            select.round {
              background-image:
                linear-gradient(45deg, transparent 50%, gray 50%),
                linear-gradient(135deg, gray 50%, transparent 50%),
                radial-gradient(#ddd 70%, transparent 72%);
              background-position:
                calc(100% - 20px) calc(1em + 2px),
                calc(100% - 15px) calc(1em + 2px),
                calc(100% - .5em) .5em;
              background-size:
                5px 5px,
                5px 5px,
                1.5em 1.5em;
              background-repeat: no-repeat;
            }

            select.round:focus {
              background-image:
                linear-gradient(45deg, white 50%, transparent 50%),
                linear-gradient(135deg, transparent 50%, white 50%),
                radial-gradient(gray 70%, transparent 72%);
              background-position:
                calc(100% - 15px) 1em,
                calc(100% - 20px) 1em,
                calc(100% - .5em) .5em;
              background-size:
                5px 5px,
                5px 5px,
                1.5em 1.5em;
              background-repeat: no-repeat;
              border-color: green;
              outline: 0;
            }


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script >   

                               /* var ind;
                                function ind()
                                {
                                    ind = document.getElementById("region").value;
                                }*/
                                $(document).ready(function(){
                                    $('#region').on('change',function(){
                                        var regionid = $(this).val();
                                        if(regionid)
                                        {
                                            $.get(
                                                "loc.php",
                                                {region : regionid},
                                                function(data){
                                                    if(data!=0)
                                                        $('#localisation').html(data);
                                                    else
                                                        $('#localisation').html("<option selected>En premier choisissez votre Region</option> ");
                                                }
                                                );
                                        }else
                                        {
                                            $('#localisation').html("<option selected>En premier choisissez votre Region</option> ");
                                        }
                                    });
                                });
                                     
                            </script>
</head>

<body>
    
  



<!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="indexm.php"><img src="assets/img/logo/logoo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                           
                                        <li><a href="indexm.php">Accueil</a></li>
                                         
                                         <li><a href="Accueil.php">Trouver un service </a></li>
                                         <li><a href="about.php">À propos</a></li>
                                        
                                         <li><a href="contact.php">Contact</a></li>
                                     </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                <a href="Index1.php" class="btn head-btn1">S'inscrire</a>
                                    <a href="Login.php" class="btn head-btn2">Se connecter</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>



    <!-- Sing in  Form -->
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">S'inscrire</h2>
                        <form action="AjoutOuvrier.php" method="POST"  class="register-form" id="register-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="cin"><i class="zmdi zmdi-account-box-mail"></i></label>
                                <input type="text" name="cin" id="cin" placeholder="Votre Cin" required/>
                            </div>
                            <div class="form-group">
                                <label for="nom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom" id="nom" placeholder="Votre Nom" required/>
                            </div>
                             <div class="form-group">
                                <label for="prenom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="prenom" id="prenom" placeholder="Votre Prénom" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="tel"><i class="zmdi zmdi-phone-in-talk"></i></label>
                                <input type="tel" name="tel" id="tel" placeholder="Votre tel" pattern="[0-9]{10}" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Mot de passe " required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Répétez votre mot de passe" required/>
                            </div>
                            
                            <div class="form-group">
                                <select id="region" name="region" class="round" required>
                                <?php
                                     require_once("Connexion.php");
                                     $sql = 'select * from Region';
                                     $resultat = $m->query($sql);
                                     while($row=$resultat->fetch_assoc())
                                     {
                                        $id=$row['Idr'];
                                        $n=$row['Reg'];
                                        echo"<option value='$id'>$n</option> ";
                                     }
                                ?>           
                                <option selected >choisissez votre Region</option>                    
                                </select>
                            </div>

                            <div class='form-group'>
                            <select id="localisation" name='localisation' class='round' required>    
                             <option selected>En premier choisissez votre Region</option>                                                      
                             </select>
                           </div>
                           <div class="form-group">
                                <select id="proffession" name="proffession" class="round" required>
                                <?php
                                     require_once("Connexion.php");
                                     $sql1 = 'select * from proffession';
                                     $resultat1 = $m->query($sql1);
                                     while($row1=$resultat1->fetch_assoc())
                                     {
                                        $id=$row1['Idp'];
                                        $n=$row1['Prof'];
                                        echo"<option value='$id'>$n</option> ";
                                     }
                                     $m->close();
                                ?>           
                                <option selected>Choisissez votre proffession</option>                    
                                </select>
                            </div>
                           <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-camera-add"></i></label>
                                <input type="file" name="img" id="img"  required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-camera-add"></i></label>
                                <input type="file" name="img1" id="img1"  required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-folder-person"></i></label>
                                <input type="file" name="pdf" id="pdf"  required/>

                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-camera-add"></i></label>
                                <input type="file" name="img2" id="img2"  required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-camera-add"></i></label>
                                <input type="file" name="img3" id="img3"  required/>
                            </div>
                            <div class="form-group">
                                <label for="Decription"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Decription" id="Decription" placeholder="descriptez vous" required/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" onclick="verification();" class="form-submit" value="S'inscrire" />
                            </div>
                            
                        </form>
                    </div>
                    
                    <div class="" style="margin-top: 25%; width:70%">
                        <figure><img src="images/ensemble-travailleur.jpg" alt="sing up image"></figure>
                        <a href="Login.php" class="signup-image-link">Je suis déja membre</a>
                    </div>

                </div>
            </div>
       </section>

    </div>

  <!-- Modal content -->
  

<script type="text/javascript">
            function verification()
            {
             var mess = "";
             var pass = document.getElementById('pass').value ;
             var repass = document.getElementById('re_pass').value ;

             if(pass != repass) {
               mess+="Erreur correspondance mot de passe";
              }
                if(mess!="")
                {
                    alert(mess);
                    return false;
                }
            } 
        </script>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>