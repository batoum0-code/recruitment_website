<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ville</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
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

</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Ajout Ville</h2>
                        <form action="AjoutationLocalisation.php" method="POST"  class="register-form" id="register-form" enctype="multipart/form-data">
                            
                            
                             <div class="form-group">
                                <label for="ville"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="ville" id="ville" placeholder="Ville ..." required/>
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
                                <option selected>choisissez votre Region</option>                    
                                </select>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" class="form-submit" value="Ajouter" />
                            </div>
                            
                        </form>
                    </div>
                    
                    <div class="" >
                        <figure><img src="images/Décrire-une-ville.jpg" alt="sing up image"></figure>
                         </div>

                </div>
            </div>
        </section>

       

        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>