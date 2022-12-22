<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Mon service </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="job.css" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.1/jquery.rateyo.min.js"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
   </head>
<style>
    {
    width: 200px; /* You can set the dimensions to whatever you want */
    height: 200px;
    object-fit: cover;
}
</style>
   <body>
    <!-- Preloader Start -->
  
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
                                          
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="Index1.php" class="btn head-btn1">Register</a>
                                    <?php

if($_SESSION["page"]="client")
{     
    $Cin =  $_GET["Cin"];
    $nom =  $_GET["nom"];
    $prenom =  $_GET["prenom"];
    $des =  $_GET["des"];
    $photo =  $_GET["photo"];
    $photo2 =  $_GET["photo2"];
    $photo3 =  $_GET["photo3"];
    $tel =  $_GET["tel"];
    $reg =  $_GET["reg"];
    $ville =  $_GET["ville"];
    $prof =  $_GET["prof"];
        echo "<a href='logoutclient.php?Cin=$Cin&des=$des&prenom=$prenom&nom=$nom&photo=$photo&photo2=$photo2&photo3=$photo3&tel=$tel&reg=$reg&ville=$ville&prof=$prof' class='btn head-btn2'>logout</a>"   ;             
}
else{
    echo "<a href='Login.php' class='btn head-btn2'>login</a>";
}
?>
                                    
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
    <br>
    <br>
    <main>
<div class="d-flex justify-content-center">
<p class="border-btn2 d-flex justify-content-center"><?php echo $_GET['prenom']; echo " ";echo $_GET['prenom'];?></a>
<h4></h4>

</div>
<br>
<div class="row">
    <div class="column">
    <img class="mainn" style="width:100%; height: 300px;" src="images/<?php echo $_GET['photo'];?>">
    </div>
    <div class="column">
    <img class="mainn" style="width:100%; height: 300px;" src="images/<?php echo $_GET['photo3'];?>">
    </div>
    <div class="column">
    <img class="mainn" style="width:100%; height: 300px;" src="images/<?php echo $_GET['photo2'];?>">
    </div>
</div>
<br>
<!-- <div class="row">
    <div class="column">
   
  
    </div>
    <div class="column">


    </div>
 
</div> -->
<br>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Informations Personnels</h5>
        <p><i class='fa fa-user'></i><?php echo "   " ; echo $_GET['nom'];echo " "; echo $_GET['prenom'] ;?></p>
<p> <i class="fa fa-phone"></i><?php echo "   " ; echo $_GET['tel'];?></p>
<p> <i class='fas fa-map-marker-alt'></i><?php echo "   " ; echo $_GET['ville'];?></p>


<?php
            require_once("Connexion.php");
           
           		$sql = "select ROUND(avg(score), 2)  as score from rate where Cino= '$Cin';";

            $resultat = $m->query($sql);
          while($row=$resultat->fetch_assoc())
          {
 $score=$row['score'];
         echo"   <p> <i class='fa fa-star'></i>   $score </p>";
           
           
          }

          ?>           
<!-- <label class="rating-label">
  <strong>Rating</strong>
  <input
    class="rating"
    max="5"
    oninput="this.style.setProperty('--value', this.value)"
    step="0.5"
    type="stars"
    value="1">
</label> -->
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Description</h3>
        <p class="card-text"><?php echo $_GET['des'];?></p>
       

      </div>
      </div>
    </div>
  </div>
  <br>
  <br>

  <div class="col-sm-6" style="margin-left:250px;">
    <div class="card">
      <div class="card-body">
       
         <h3> <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
         echo 
         $_GET['err'];} ?>
       </h3>
      
      <form method="post" action="rating.php">
<input type="hidden" name="Cin" value="<?php echo $_GET['Cin']; ?>">
<input type="hidden" name="des" value="<?php echo $_GET['des']; ?>">
<input type="hidden" name="prenom" value="<?php echo $_GET['prenom']; ?>">
<input type="hidden" name="nom" value="<?php echo $_GET['nom']; ?>">
<input type="hidden" name="photo" value="<?php echo $_GET['photo']; ?>">
<input type="hidden" name="photo2" value="<?php echo $_GET['photo2']; ?>">
<input type="hidden" name="photo3" value="<?php echo $_GET['photo3']; ?>">
<input type="hidden" name="tel" value="<?php echo $_GET['tel']; ?>">
<input type="hidden" name="reg" value="<?php echo $_GET['reg']; ?>">
<input type="hidden" name="ville" value="<?php echo $_GET['ville']; ?>">
<input type="hidden" name="prof" value="<?php echo $_GET['prof']; ?>">
<h4>Rating </h4>
  <div id="rateYo" ></div>
  <br>
  <input type="hidden" name="rating" id="rating">
  <h5>Nom & Prenom</h5><input type="text" name="nomm" required>
  <h5>Commentaire </h5><input type="textarea" name="commentaire">
  <h5>Email </h5><input type="textarea" name="email" required>
  
  <br>
  <button   style="margin-left:400px" type="submit" class="btn btn-primary" class="fa fa-thumbs-up"> Envoyer </button>
 
</form>

       
      </div>
      </div>
    </div><br><br>


<body>
  





<h3> Les commentaires</h3>  <br>
<div class="row">
 <?php

 
       
            require_once("Connexion.php");
           
           		$sql = "select score,comm,Nom,email from rate  where Cino= '$Cin';";

            $resultat = $m->query($sql);
          while($row=$resultat->fetch_assoc())
          {
 $sc=$row['score'];
 $comm=$row['comm'];
 $Nomm=$row['Nom'];
 

    echo"    
    <div class='col-sm-6'>
    <div class='card'>
      <div class='card-body'>
       <p> <i class='fa fa-user'></i> <span> Nom: $Nomm ;</span>
       <p> <i class='fa fa-star'></i>   $sc</p>
       <p>$comm</p>
       
           
          
        </div>
        </div>
        </div>";
     }
          ?>  
        </div>





   



<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>

 
$(document).ready(function(){
        $('#rateYo').rateYo({
            fullStart: true,
            onSet:function(rating,rateYoinstance){
                $('#rating').val(rating);
            }
        });

});
  </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</body>

</html>


    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>About Us</h4>
                                 <div class="footer-pera">
                                     <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 " >
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address :Your address goes
                                        here, your demo address.</p>
                                    </li>
                                    <li><a href="#">Phone : +8880 44338899</a></li>
                                    <li><a href="#">Email : info@colorlib.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                   
                    
               <!--  -->
               
                            <!-- Footer Bottom Tittle -->
                            
                       </div>
               </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p class="text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
       
    </footer>


	
		
        // <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<!-- <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script> -->
        <!-- <script src="./assets/js/popper.min.js"></script> -->
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <!-- <script src="./assets/js/jquery.slicknav.min.js"></script> -->

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <!-- <script src="./assets/js/plugins.js"></script> -->
        <!-- <script src="./assets/js/main.js"></script> -->
        
    </body>
</html>