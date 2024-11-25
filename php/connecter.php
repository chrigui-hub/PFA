<?php
    
         mysql_connect("localhost", "root", "") or die ("erreur connexion");
        mysql_select_db("pfa") or die("erreur selection");

        
        $nom = $_POST['nom'];
        $pwd = $_POST['pwd'];

        // Sanitize admin inputs pour proteger la base (sql injection)
        $nom = mysql_real_escape_string($nom);
        $pwd = mysql_real_escape_string($pwd);

        // comparaison avec admin
        $sql = "select * from admin where nom = '$nom' and mdp = '$pwd'";
        $result = mysql_query($sql);

        // Check if there is a matching row
        if (mysql_num_rows($result) == 1) {
            // acceder a  admin interface  cas succes 
            header("Location: ../html/interface.html");
            exit();
        } 
        else {

            
            echo "<!DOCTYPE html>";
            echo "<html lang='en'>";
            echo "<head>";
            echo "<meta charset='UTF-8'>";
            echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<title>Erreur</title>";
            echo "<link rel='stylesheet' href='../css/style.css'>"; 
            echo "<body>";
            echo "<div class='nbar'>";
            echo "<nav>";
            echo "<ul>";
            echo "<li class='leftc'><a href='index.html'>Acceuil</a></li>";
            echo "<li><a href='boutique.html'>Notre boutique</a></li>";
            echo "<li><a href='louer.html'>Louer produits</a></li>";
            echo "<li><a href='reclamer.html'>reclamer</a></li>";
            echo "<li><a href='consultation.html'>consultation</a></li>";
            echo "<li><a class='cnx' href='connecter.html'>Se connecter</a></li>";
            echo "</ul>";
            echo "</nav>";
            echo "</div>";
            echo "<a href='index.html'>";
            echo "<img width='200px' height='120' class='berserk' src='../img/berserk.png' alt=''>";
            echo "</a>";
            echo "<div class='welc6'>";
            echo "<div style='width: 40%; height: 30%; background-color: rgb(217, 238, 26); position: absolute; top: 26%; left: 29%;'>";
            echo "<h1 style='color:black; position:absolute; top:18%;'>Nom d'utilisateur ou mot de passe incorrect. Veuillez réessayer.</h1>";
            echo "</div>";
            echo "</div>";
            echo "</body>";
            echo "</html>";
            
        }

        
        mysql_close();
    
?>
