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
         <style>
        /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
    </style>
</head>

<body>
    
    <?php 
session_start();

if(isset($_SESSION["ajout"]))
{
    echo "<script type=\"text/javascript\"> alert(\"Votre inscrit est Validé \"); </script>";
    unset($_SESSION["ajout"]);
}
if(isset($_SESSION["page"] )&& $_SESSION["page"] == "ouvrier")
                   
{
    header('Location: AccueilOuvrier.php'); 
}else
{
    if(isset($_SESSION["page"] )&& $_SESSION["page"] == "admin")                   
    {
       header('Location: Admin.php');
    }else
    {
        if(isset($_SESSION["page"] )&& $_SESSION["page"] == "client")                   
        {
           header('Location: validation.php');  
        }
    }
 }

?>





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
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image" style="margin-top: -5%;">
                    <figure><img src="images/homerenovation.jpg" alt="sing up image"></figure>
               
                  <a href="Index1.php" >     <button type="button" class="btn btn-dark" class="pull-right">Créer un compte</button></a>

                </div>

                <div class="signin-form">
                    <h2 class="form-title">S'authentifier</h2>
                    <form method="POST" class="register-form" id="login-form" action="authenti.php">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="your_name" id="your_name" placeholder="Votre user" />
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Votre Mot de passe" />
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="S'authentifier" />
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </section>

    </div>

  <!-- Modal content -->
  
<script type="text/javascript">
    function ouv()
    {
        var modal = document.getElementById("myModal");
        modal.style.display= "block";
    }
     function fer()
    {
        var modal = document.getElementById("myModal");
        modal.style.display= "none";
    }
</script>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>