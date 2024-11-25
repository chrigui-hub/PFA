<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commander</title>
    <link rel="stylesheet"  href="../css/style.css">
    <script src="../js/test.js"></script>
</head>
<body>
    <?php
            $productid = $_POST['product_id'];
            $prixp= $_POST['prixp'];
            


    ?>
    <div class="nbar">
      
      
        <nav>
           <ul>
              <li class="leftc"><a href="index.html">Acceuil</a></li>
              <li><a href="boutique.html">Notre boutique</a></li>
              <li><a href="louer.html">Louer  produits</a></li>
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

    <div class="formcontainercommande">
        <center><label >commander</label></center>
 
        <form action="../php/ajoutclient.php" method="post">
         <table>
             <tr>
                 <td><label for="">Cin</label></td>
                 <td> <input required type="text" name="cin" id="cin" maxlength="8"></td>
             </tr>

             <tr>
                <td><label for="">email</label></td>
                <td> <input required type="text" name="email" id="email"></td>
            </tr>
            
            <tr>
                <td><label for="">nom</label></td>
                <td> <input required type="text" name="nom" id="nom"></td>
            </tr>

            <tr>
                <td><label for="">prenom</label></td>
                <td> <input required type="text" name="pre" id="pre"></td>
            </tr>

            
            <tr>
                <td><label for="">num</label></td>
                <td> <input required type="text" name="num" id="num" maxlength="8"></td>
            </tr>

            <tr>
                <td><label for="">idproduit</label></td>
                <td> <input readonly type="text" name="idproduit" id="idproduit"  value="<?php echo $productid; ?>"></td>
            </tr>

            <tr>
                
                <td> <input hidden type="text" name="prixp" id="prixp"  value="<?php echo $prixp; ?>"></td>
            </tr>


            <tr>
                <td><label for="">quantité </label></td>
                <td> <input  type="number" name="qte" id="qte"  min="1" value="1" ></td>
            </tr>
            <tr >
                <td><input    onclick=" return verifcommande()" class="sub" type="submit" id="submit" value="Valider"></td>
                <td><input class="res" type="reset" name="" id="adr"></td>
            </tr>
         </table> 
        </form> 
    </div>   

    <footer class="footercom">
      <h1>Site réalisé par: Chrigui Ghassen  | Farhat Hamza </h1>
      <h1>Copyright © 2024 BERSERK Gaming Company. All rights reserved.</h1>
   </footer>

</body>
</html>