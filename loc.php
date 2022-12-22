 <?php
                                 
         if(isset($_GET['region'])) 
         {
             require_once("Connexion.php");

            $ay=$_GET['region'];
            $sql = "select * from localisation where idre = '$ay'";
            $resultat = $m->query($sql);
           while($row=$resultat->fetch_assoc())
           {
               $idl=$row['Idl'];
               $nl=$row['Ville'];
               echo"<option value='$idl'>$nl</option> ";
           }
           $m->close();
                                         
         }else{
            echo"<option value='0' selected>En premier choisissez votre Region</option>";
       }
                                     
 ?>    