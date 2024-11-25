<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifierclient</title>
    <link rel="stylesheet"  href="../css/style.css">
    <script src="../js/test.js"></script>
</head>

<?php
    mysql_connect("localhost","root","") or die ("error connexion");
    mysql_select_db("pfa") or die ("error selection");
    $cin=$_POST['cin'];
    $req="select * from  client  where cin = '$cin'";
    $res=mysql_query($req) or die("erreur selection");
    $r=mysql_fetch_row($res);
    
    mysql_close();


?>
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

    </div>

    <div class="formcontainercl">
       <center><label >modifier client:</label></center>

       <form action="..//php/modifierclient2.php" method="post">
        <table>
        <tr>
                <td><label for="">cin</label></td>
                <td> <input readonly type="text" name="cin" id="cin" value="<?php echo($r[0]) ?>"></td>
            </tr>
            <tr>
                <td><label for="">email</label></td>
                <td> <input required type="email" name="email" id="email" value="<?php echo($r[1]) ?>"></td>
            </tr>
            <tr>
                <td><label for="">Nom</label></td>
                <td> <input required type="text" name="nom" id="nom" value="<?php echo($r[2]) ?>"></td>
            </tr>
          

            <tr>
                <td><label for="">prenom</label></td>
                <td> <input required type="text" name="pre" id="pre" value="<?php echo($r[3]) ?>"></td>
            </tr>
          
           
            <tr>
                <td><label for="">num</label></td>
                <td><input required type="text" name="num" id="num" maxlength="8" value="<?php echo($r[4]) ?>"></td>
               

            </tr>

            
           
            <tr >
                <td><input class="sub" type="submit" id="submit" value="modifier"></td>
                <td><input class="res" type="reset" name="" id="adr"></td>
            </tr>
      </div>

        </table>
        
       
        
        
        
        
        
      
        
       
    
        
       
        
       </form>

    </div>
</body>
</html>