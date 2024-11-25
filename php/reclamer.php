<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajooutclient</title>
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

             /* reclamation colonnes*/
    
                $idcom = $_POST['idcom'];
                $titre = $_POST['titre'];
                $desc = $_POST['desc'];
                $d=date("y-m-d");
             
                
                


               /*  INSERTION de reclamation */
              
                $req2 = "insert into reclamation (id_commande, titre, description, daterec) values ('$idcom', '$titre', '$desc', '$d')";
/* c pas la peine de verifier lexistance de id_commande dans table commande car 3mlt relation*/
                mysql_query($req2) or die("erreur ajout rec (id_comm inexistant)");
                echo(" reclamation  ajoutée.<br>");


           
              


                mysql_close();

            ?>
            

           </h1>
            </div>

        </div>
    
        </div>
    
</body>
</html>