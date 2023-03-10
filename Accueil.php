
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
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">

          
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logoo.png" alt="">
                </div>
            </div>
        </div>
    </div>
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
                                            <li><a href="about.php">?? propos</a></li>
                                            
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
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h11_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4">
                                <div class="hero__caption">
                                    <h2>Chercher votre s??rvice i??i </h2>
    <form method="post" action="Accueil.php">
    <div class="d-flex justify-content-start">
                                
  
    <div class="p-2 bd-highlight">
    	 <select  id="prof" name="prof"  style="background-color:#666; margin-top: 20px; margin-left: 320px;">
         <?php
            require_once("Connexion.php");
           
           		$sql = 'select * from Proffession';

            $resultat = $m->query($sql);
          while($row=$resultat->fetch_assoc())
          {
            $idp=$row['Idp'];
            $Prof=$row['Prof'];
            echo"<option value='$idp'>$Prof</option> ";
          }
          ?>           
         <option value="0" selected> proffessions</option>                    
         </select>
         </div>
    
    <div class="p-2 bd-highlight">
    	 <select id="region" name="region" class="round" style="background-color:#666; margin-top: 13px; margin-left: 10px;">
         <?php
           $sql = 'select * from Region';
            $resultat = $m->query($sql);
          while($row=$resultat->fetch_assoc())
          {
            $id=$row['Idr'];
            $n=$row['Reg'];
            echo"<option value='$id'>$n</option> ";
          }
          ?>           
         <option value="0" selected>choisissez votre Region</option>                    
         </select>
         </div>
  

        <div style="hight: 3px; wight: 3px;">

    	<button type="submit" class="btn btn-primary btn-sm  ">find</button>
    </div>
  
  </div>
</form>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <br>
<script type="text/javascript">
				// Get the modal
				function ouvrir(ouv)
				{
					var modal = document.getElementById(ouv);
					modal.style.display = "block";
				}
				function ferme(fer)
				{
					var modal = document.getElementById(fer);
					modal.style.display = "none";
				}		 
						
          </script>  
          <div>
            
          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Our Services Start -->


                <!-- Section Tittle -->
                <!-- <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_fef4"> -->
          <!-- <div class="u-clearfix u-sheet u-valign-middle u-sheet-1" class="invisible" > -->
          	
          <!-- <p class="border-btn2 d-flex justify-content-center">Disponible Jobs</a> -->

			

           

              </div>
                    </div>
                </div>
                </div>
                            </div>
                        </div>
                <!-- More Btn -->
                
        <!-- Our Services End -->
        <!-- Online CV Area Start -->
     
        <!-- Online CV Area End-->
        <!-- Featured_job_start -->
        <!-- <section class="featured-job-area feature-padding">
            <div class="container"> -->
                <!-- Section Tittle -->
               
                
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- single-job-content -->

                        <?php 
               
               require_once("Connexion.php");
               if(isset($_POST['region']) && isset($_POST['prof'])  )
               {
                   
                   $ver1 = $_POST['prof'];
                   $ver = $_POST['region'];

                   $resultat = $m->query($sql);
                   if($ver==0 && $ver1==0)
                   {
                            //    echo "<div class='u-expanded-width u-list u-list-1' style='margin-top: -100px;'>";
                            //    echo "<div class='u-repeater u-repeater-1'>";
                       $sql = "select * from ouvrier where act=1 ";
                   }else
                   {
                       if($ver==0)
                       {
                           $sql = "select * from Proffession where Idp=$ver1 ";
                           $resultat = $m->query($sql);
                           $row = $resultat->fetch_assoc();
                           $pro = $row['Prof'];
                                    //    echo "<div class='u-expanded-width u-list u-list-1' style='margin-top: -100px;'>";
                                    //    echo "<div class='u-repeater u-repeater-1'>";
                           $sql = "select * from ouvrier where act=1 && Idpr =  $ver1";
                       }
                       else
                           if($ver1==0)
                           {

                               
                            //    echo "<div class='u-expanded-width u-list u-list-1' style='margin-top: -100px;'>";
                            //    echo "<div class='u-repeater u-repeater-1'>";
                               $sql = "select * from ouvrier where act=1 &&  Idlo in (select Idl from localisation where idre = $ver )";
                           }
                           else
                           {
                              
                                //    echo "<div class='u-expanded-width u-list u-list-1' style='margin-top: -100px;'>";
                                //    echo "<div class='u-repeater u-repeater-1'>";
                               
                               $sql = "select * from ouvrier where act=1 &&  Idlo in (select Idl from localisation where idre = $ver ) && Idpr =  $ver1";
                           }
                               
                   }
                     
                   
               }else
               {
                            //    echo "<div class='u-expanded-width u-list u-list-1' style='margin-top: -100px;'>";
                            //    echo "<div class='u-repeater u-repeater-1'>";
                       $sql = "select * from ouvrier where act=1 ";
               }			   				

               $resultat = $m->query($sql);
               $Idre = "";
               $Idv = "";
               $cpt = 0;
               $pdft="";
               $des="";
               try
               {
                    while($row=$resultat->fetch_assoc())
                   {
                       $Cin=$row['Cin'];
                       $Email=$row['Email'];
                       $Tel=$row['Tel'];
                       $Prenom=$row['Prenom'];
                       $Nom=$row['Nom'];
                       $ImgP=$row['ImgP'];
                       $Idpr=$row['Idpr'];
                       $des=$row['des'];
                       $Idlo=$row['Idlo'];
                       $pdft=$row['Imgc'];
                    //    $pdft=$row['Imgc1'];
                       $pdft2=$row['Imgc2'];
                       $pdft3=$row['Imgc3'];
                       $sql1 = "select * from Proffession where Idp='$Idpr'";
                       $resultat1 = $m->query($sql1);
                       $row1=$resultat1->fetch_assoc();
                       $Idpr = $row1['Prof'];
                       $sql2 = "select * from localisation l inner join region r on l.idre = r.Idr where Idl ='$Idlo' LIMIT 1";
                       $resultat2 = $m->query($sql2);
                       
                       if($row2=$resultat2->fetch_assoc())
                       {
                           $Idre = $row2["Reg"];
                           $Idv = $row2["Ville"];
                       }	    	
                    echo '      
                       <div class="single-job-items mb-30">
                       <div class="job-items">';
                       echo"
                           <div class='company-img' >
                               <a href='job_details.php'><img style ='width:100%; height:86px;' src='images/$pdft''></a>
                           </div>";
                           echo"
                           <div class='job-tittle'>
                               <a href='job_details.php'><h4>$Idpr</h4></a>
                               <ul>
                               <li ><i class='fa fa-user'></i>$Prenom  $Nom</li>
                                   <li>$Idre</li>
                                   <li><i class='fas fa-map-marker-alt'></i>$Idv</li>
                                   <li>$Tel</li>
                               </ul>
                           </div>
                       </div>
                       <div class='items-link f-right'>
                           <a href='job_details.php?Cin=$Cin&des=$des&prenom=$Prenom&nom=$Nom&photo=$pdft&photo2=$pdft2&photo3=$pdft3&tel=$Tel&reg=$Idre&ville=$Idv&prof=$Idpr'>See more</a>
                       </div>
                   </div>";
                       
                            //  echo "<div class='u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white' style='height: 600px; '>";
                            //  echo"<div class='u-container-layout u-similar-container u-container-layout-2'>";
                            //  echo "<img alt='' class='u-expanded-width u-image u-image-round u-radius-20 u-image-2' data-image-width='598' data-image-height='598' src='images/$ImgP'>";
                            //  echo "<p class='u-align-left u-text u-text-grey-30 u-text-5'>$Idpr</p>";
                            //  echo "<h3 class='u-align-left u-text u-text-default u-text-palette-2-base u-text-6'>$Nom $Prenom&nbsp;</h3>";
                            //  echo "<p class='u-align-left u-text u-text-body-color u-text-7'>";
                            //  echo "<U>Adresse</U>  :  ";
                            //  echo "$Idre, $Idv <br>";
                            //  echo "<U>Email</U>  :  ";
                            //  echo "$Email<br>";
                            //  echo "<U>Tel</U>  :  ";
                            //  echo "$Tel<br><br>";
                            //  echo "<button onclick = ouvrir('$cpt'); >Plus...</button>";
                            //  echo "<div id='$cpt' class='modal'>";
                            //  echo "<div class='modal-content'>";
                            //  echo "<span class='close' onclick='ferme($cpt)'>&times;</span>";
                            //  echo "<p>";
                             if($pdft!="" && $des!="")
                             {
                                //  echo "<h1><a href='images/$pdft' target='_blank'>chantillon des travaux</a></h1><br><U>Description</U>  :  $des<br>";
                                 $pdft="";
                                 $des="";
                             }else
                             {
                                 if($pdft!="")
                                 {
                                    //  echo "<h1><a href='images/$pdft' target='_blank'>chantillon des travaux</a></h1><br>";
                                     $pdft="";
                                 }else
                                 {
                                     if($des!="")
                                     {
                                        //  echo "<h7><U>Description</U></h7>  :  $des<br>";
                                         $des="";
                                     }else
                                     {
                                        //  echo"<h1 style='color : red'>vide...</h1>";
                                     }
                                     
                                 }

                             }
                             
                            //  echo "</p>";
                            //  echo "</div>";
                            //  echo "</div>";
                            //  echo "</p>";				         
                            //  echo "</div>";
                            //  echo "</div>";
                           $cpt = $cpt+1;
                       
                    }
               
               }catch (Exception $e) {
                   
               }
              

           ?>








                       
             
                        <!-- single-job-content -->
                       
        </section>
            </main>
        <!-- Featured_job_end -->
        <!-- How  Apply Process Start-->
        <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>?? propos</h4>
                                 <div class="footer-pera">
                                     <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>
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
        <!-- Footer End-->
    </footer>
  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>
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
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>