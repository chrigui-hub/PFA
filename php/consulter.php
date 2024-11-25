<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulter</title>
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
    
       <div class="welc5">

        <div style=" width: 60%;  height: 92%; background-color: rgb(217, 238, 26);   position: absolute; top: 16%; left: 20%;">
        <style>

            table {
                border-collapse: collapse;
            }
                 td {
                    padding: 5px;
                    font-size:20px;
                    font-family:cursive;
                   
                    height:40%;
                    border:solid 1px black;
                    
                  
                }
            </style>  
        
        <h2 style="color:black; font-family:cursive;">client:</h2> 
            <?php
            mysql_connect("localhost","root","") or die ("erreur connexion");
            mysql_select_db("pfa") or die("erreur selection");

            $cin = $_POST['cin'];    
            $req = "select * from client where cin = '$cin'";
            $res = mysql_query($req) or die("erreur selection");
            

            echo(" <table>
            <tr>
            <td> <b>cin</b> </td> 
            <td><b>email</b></td>
            <td><b>nom </b></td>
            <td><b>prenom </b></td>
            <td><b>num </b></td>
            </tr> ");

            while ($r=mysql_fetch_row($res)) {
                echo("
                <tr>
                    <td> $r[0]</td>
                    <td> $r[1]</td>
                    <td> $r[2]</td>
                    <td> $r[3]</td>
                    <td> $r[4]</td>
                
                    
                 </tr>
                ");
            }
            echo(" </table>");


            mysql_close();
            ?>
        
            <br>
        
        
        <h2 style="color:black; font-family:cursive;"> commandes:</h2>
           
            <?php

                mysql_connect("localhost","root","") or die ("erreur connexion");
                mysql_select_db("pfa") or die("erreur selection");

                $cin = $_POST['cin'];    
                $req = "select * from commande where cin = '$cin'";
                $res = mysql_query($req) or die("erreur selection");

                echo(" <table>
                <tr  >
                <td> <b> id_commande  </b></td> 
                <td>  <b>date_commande </b></td>
                <td>  <b>cin </b></td>
                <td> <b>produit_id </b></td>
                <td> <b>quantite </b></td>
                <td> <b>total </b></td>
                </tr> ");

                while ($r=mysql_fetch_row($res)) {
                    echo("
                    <tr>
                        <td> $r[0]</td>
                        <td> $r[1]</td>
                        <td> $r[2]</td>
                        <td> $r[3]</td>
                        <td> $r[4]</td>
                        <td> $r[5]</td>
                     </tr>
                    ");
                }
                echo(" </table>");


                mysql_close();

            ?>
            <br>
            
            <h2 style="color:black; font-family:cursive;">locations:</h2>

             <?php

                mysql_connect("localhost","root","") or die ("erreur connexion");
                mysql_select_db("pfa") or die("erreur selection");

                $cin = $_POST['cin'];    
                $req = "select * from location where cin = '$cin'";
                $res = mysql_query($req) or die("erreur selection");

                echo(" <table>
                <tr>
                <td> <b>idloc </b> </td> 
                <td><b>cin </b></td>
                <td><b>produit_id </b></td>
                <td><b>qte </b></td>
                <td><b>dateloc </b></td>
                <td><b>dateret </b></td>
                <td> <b>total </b></td>

                </tr> ");

                while ($r=mysql_fetch_row($res)) {
                    echo("
                    <tr>
                        <td> $r[0]</td>
                        <td> $r[1]</td>
                        <td> $r[2]</td>
                        <td> $r[3]</td>
                        <td> $r[4]</td>
                        <td> $r[5]</td>
                        <td> $r[6]</td>
                     </tr>
                    ");
                }
                echo(" </table>");


                mysql_close();

            ?> 
           

            
            </div>

    
    
        </div>
    
</body>
</html>