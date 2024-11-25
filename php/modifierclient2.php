<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifierclient2</title>
    <link rel="stylesheet"  href="../css/style.css">
</head>
<body>
    
    <body>
        <div class="nbar">
          
          
            <nav>
               <ul>
                  <li class="leftc"><a href="index.html">Acceuil</a></li>
                  <li><a href="boutique.html">Notre boutique</a></li>
                  <li><a href="louer.html">Louer produits</a></li>
                  <li><a href="reclamer.html">reclamer</a></li>
                  <li><a href="consultation.html">consultation</a></li>
                  <li><a class="cnx" href="connecter.html">Se connecter</a></li>
               </ul>
            </nav>
         </div>
         <a href="index.html">
          <img width="200px" height="120" class="berserk" src="../img/berserk.png" alt="" >
       </a>
    
       <div class="welc6">

        <div style="width: 40%;  height: 30%; background-color: rgb(217, 238, 26);   position: absolute; top: 26%; left: 29%;">
           <h1 style="color:black; position:absolute; top:18%;">
            <?php

           

            
            mysql_connect("localhost","root","") or die ("erreur connexion");
            mysql_select_db("pfa") or die("erreur selection");
            $cin=$_POST['cin'];
            $nom=$_POST['nom'];
            $email=$_POST['email'];
            $pre=$_POST['pre'];
            $num=$_POST['num'];
            $req="update client set email='$email',nom='$nom',prenom='$pre',num='$num' where cin = '$cin'";
            mysql_query($req) or die("erreur modification");
            echo(mysql_affected_rows()."client modifiée");

             mysql_close();

            ?>
            

           </h1>
            </div>

        </div>
    
        </div>
    
</body>
</html>