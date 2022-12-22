<?php
session_start();
  if(!isset($_SESSION["page"]))
        header('Location: Login.php');
    else
    {
        if($_SESSION["page"]!="client")
        {
            header('Location: deconnexion.php');
        }
    }
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Our Tea​m, Sample Headline, Sample Headline">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Accueil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|PT+Sans:400,400i,700,700i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
		}
	</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">

<style type="text/css">

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 <script type="text/javascript">
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







  
  <body class="u-body u-overlap u-xl-mode" style="background-color: black;">
 <form method="post" action="AccueilClient.php">
		 <ul>
    <li><a href="deconnexion.php" style="margin-left: 100px;">Deconnexion</a></li>
    <li>
    	 <select  id="prof" name="prof" class="round" style="background-color:#666; margin-top: 13px; margin-left: 320px;">
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
    </li>
    <li>
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
    </li>
    <li>
    	<select id="localisation" name='localisation' class='round' style="background-color:#666; margin-left: 10px; margin-top: 13px;">    
             <option value="0" selected>En premier choisissez votre Region</option>                                                      
        </select>
    </li>
    <li>

    	<button type="submit" style="background-color:#666; margin-left: 10px; margin-top: 10px;"><i class="fa fa-search"  ></i></button>
    </li>
  </ul>
</form>
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


   
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_fef4">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"  >
          	
           
			

            <?php 
               
            	require_once("Connexion.php");
            	if(isset($_POST['localisation']) && isset($_POST['prof'])  )
            	{
            		
            		$ver1 = $_POST['prof'];
		            $ver = $_POST['localisation'];

		            $resultat = $m->query($sql);
		            if($ver==0 && $ver1==0)
		            {
		            	echo"<center> <h1 style='color:grey;margin-top: -200px;'>Toutes les ouvriers </h1></center>";
							    echo "<div class='u-expanded-width u-list u-list-1' style='margin-top: -100px;'>";
							    echo "<div class='u-repeater u-repeater-1'>";
		            	$sql = "select * from ouvrier where act=1 ";
		            }else
		            {
		            	if($ver==0)
		            	{
		            		$sql = "select * from Proffession where Idp=$ver1 ";
				            $resultat = $m->query($sql);
				            $row = $resultat->fetch_assoc();
				            $pro = $row['Prof'];
				            echo"<center> <h1 style='color:grey;margin-top: -200px;'>Toutes Les $pro </h1></center>";
										echo "<div class='u-expanded-width u-list u-list-1' style='margin-top: -100px;'>";
										echo "<div class='u-repeater u-repeater-1'>";
		            		$sql = "select * from ouvrier where act=1 && Idpr =  $ver1";
		            	}
		            	else
		            		if($ver1==0)
		            		{
		            			$sql = "select * from localisation where Idl=$ver ";
					            $resultat = $m->query($sql);
					            $row = $resultat->fetch_assoc();
					            	
					            $ville = $row['Ville'];
						       $idr = $row['idre'];
						        $sql = "select Reg from region where Idr=$idr";
						        $resultat = $m->query($sql);
						        $row = $resultat->fetch_assoc();
						        $idr=$row['Reg'];
			            		echo"<center> <h1 style='color:grey;margin-top: -200px;'>Toutes Les Ouvriers De $idr,$ville  </h1></center>";
							    echo "<div class='u-expanded-width u-list u-list-1' style='margin-top: -100px;'>";
							    echo "<div class='u-repeater u-repeater-1'>";
		            			$sql = "select * from ouvrier where act=1 && Idlo = $ver";
		            		}
		            		else
		            		{
		            			$sql = "select * from Proffession where Idp=$ver1 ";
				            	$resultat = $m->query($sql);
				            	$row = $resultat->fetch_assoc();
				            	$pro = $row['Prof'];
		            			$sql = "select * from localisation where Idl=$ver ";
				            	$resultat = $m->query($sql);
				            	$row = $resultat->fetch_assoc();
				            	
				            		$ville = $row['Ville'];
					            	$idr = $row['idre'];
					            	$sql = "select Reg from region where Idr=$idr";
					            	$resultat = $m->query($sql);
					            	$row = $resultat->fetch_assoc();
					            	$idr=$row['Reg'];
					            	echo"<center> <h1 style='color:grey;margin-top: -200px;'>Les $pro De $idr,$ville  </h1></center>";
					            	echo "<div class='u-expanded-width u-list u-list-1' style='margin-top: -100px;'>";
					            	echo "<div class='u-repeater u-repeater-1'>";
				            	
		            			$sql = "select * from ouvrier where act=1 && Idlo = $ver && Idpr =  $ver1";
		            		}
		            			
		            }
		          	
            		
            	}else
            	{
            		echo"<center> <h1 style='color:grey;margin-top: -200px;'>Toutes les ouvriers </h1></center>";
							    echo "<div class='u-expanded-width u-list u-list-1' style='margin-top: -100px;'>";
							    echo "<div class='u-repeater u-repeater-1'>";
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
				    	
					    	echo "<div class='u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white' style='height: 600px; '>";
					    	echo"<div class='u-container-layout u-similar-container u-container-layout-2'>";
					          echo "<img alt='' class='u-expanded-width u-image u-image-round u-radius-20 u-image-2' data-image-width='598' data-image-height='598' src='images/$ImgP'>";
					          echo "<p class='u-align-left u-text u-text-grey-30 u-text-5'>$Idpr</p>";
					          echo "<h3 class='u-align-left u-text u-text-default u-text-palette-2-base u-text-6'>$Nom $Prenom&nbsp;</h3>";
					          echo "<p class='u-align-left u-text u-text-body-color u-text-7'>";
					          echo "<U>Adresse</U>  :  ";
					          echo "$Idre, $Idv <br>";
					          echo "<U>Email</U>  :  ";
					          echo "$Email<br>";
					          echo "<U>Tel</U>  :  ";
					          echo "$Tel<br><br>";
					          echo "<button onclick = ouvrir('$cpt'); >Plus...</button>";
					          echo "<div id='$cpt' class='modal'>";
					          echo "<div class='modal-content'>";
					          echo "<span class='close' onclick='ferme($cpt)'>&times;</span>";
					          echo "<p>";
					          if($pdft!="" && $des!="")
					          {
					          	echo "<h1><a href='images/$pdft' target='_blank'>chantillon des travaux</a></h1><br><U>Description</U>  :  $des<br>";
					          	$pdft="";
					          	$des="";
					          }else
					          {
					          	if($pdft!="")
					          	{
					          		echo "<h1><a href='images/$pdft' target='_blank'>chantillon des travaux</a></h1><br>";
					          		$pdft="";
					          	}else
					          	{
					          		if($des!="")
					          		{
					          			echo "<h7><U>Description</U></h7>  :  $des<br>";
						          		$des="";
					          		}else
					          		{
					          			echo"<h1 style='color : red'>vide...</h1>";
					          		}
					          		
					          	}

					          }
					          
					          echo "</p>";
					          echo "</div>";
					          echo "</div>";
					          echo "</p>";				         
					          echo "</div>";
					          echo "</div>";
					        $cpt = $cpt+1;
						
				     }
            	
			    }catch (Exception $e) {
    				
				}
			   

            ?>

              </div>
  </body>
</html>