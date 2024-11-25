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
           <h1 style="color:black; position:absolute; top:10%;">
            <?php

            function client_exists($cin) {
               $req0 = "select * from client where cin = '$cin'";
               $res0 = mysql_query($req0);
               return mysql_num_rows($res0) > 0;
            } 

            
            mysql_connect("localhost","root","") or die ("erreur connexion");
            mysql_select_db("pfa") or die("erreur selection");

                $d=date("y-m-d");
               /* client colonnes*/
    
                $cin = $_POST['cin'];
                $adr = $_POST['email'];
                $nom = $_POST['nom'];
                $pre = $_POST['pre'];
                $num = $_POST['num'];


                /* produit colonnes*/
                $qte=$_POST['qte'];
                $id_produit=$_POST['idproduit'];
                $prixp=$_POST['prixp'];


                /* total*/

                $total=($qte*$prixp).' euros';
                
                if(client_exists($cin)){

                  /*insertion  de commande*/
                  
                  $req2="insert into commande (date_commande, cin, produit_id, quantite,total) values ('$d', '$cin', '$id_produit', '$qte','$total')";
                  mysql_query($req2) or die ("erreur ajout commande");
                  echo(" commande ajoutée.<br>");
                  echo(" total:".$total."<br>");


                }
                else{
                  /*insertion client*/
                  $req="insert into client values('$cin','$adr','$nom','$pre','$num')";
                  mysql_query($req) or die ("erreur ajout client");
                  echo(mysql_affected_rows()."client ajoutée a la date ".$d);

                   /*insertion  de commande*/
                  
                   $req2="insert into commande (date_commande, cin, produit_id, quantite,total) values ('$d', '$cin', '$id_produit', '$qte','$total')";
                   mysql_query($req2) or die ("erreur ajout commande");
                   echo(" commande ajoutée.<br>");
                   echo(" total:".$total.".<br>");
 
                }
                

                /* mise a jour quantite*/

                $req3=" update produit set quantite = quantite - $qte where produit_id = $id_produit";
                mysql_query($req3) or die ("erreur mise a jour quantite de table produit");
                echo("quantite est a jour.");


                mysql_close();

            ?>
            

           </h1>
            </div>

        </div>
    
        </div>
    
</body>
</html>