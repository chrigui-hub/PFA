


function verifcommande(){

    
    cin=document.getElementById("cin").value;
    pre=document.getElementById("pre").value;
    nom=document.getElementById("nom").value;
    email=document.getElementById("email").value;
    num=document.getElementById("num").value;


      
    

    for(var i=0;i<cin.length;i++){
        if(!(cin[i]<='9' && cin[i]>='0')){
            alert("le champ ncin doit etre number");return false;
        }
    
      
    }




    if(cin.length!=8){
        alert("le numero de cin contient exactement  8 chiffres");return false;
    
    }
    if(cin[0]!='0' && cin[0]!='1'){
        alert("le numero de cin doit commencer par 0 ou 1");return false;

    
    }



    var regex = /^[A-Za-z0-9+.-_]+@[A-Za-z0-9.-]+$/;
    if (!regex.test(email)) {
    
       alert("Adresse e-mail invalide");return false;

    } 
    







    for(var i=0;i<nom.length;i++){
        if(!(nom[i].toUpperCase()<='Z'&& nom[i].toUpperCase()>='A')){
            alert("le champ nom doit etre alpha");return false;
        }
      
    }
    
    for(var i=0;i<pre.length;i++){
        if(!(pre[i].toUpperCase()<='Z'&& pre[i].toUpperCase()>='A')){
            alert("le champ prenom doit etre alpha");return false;
        }
      
    }




  

    for(var i=0;i<num.length;i++){
        if(!(num[i]<='9' && num[i]>='0')){
            alert("le champ num de tel doit etre number");return false;
        }
    
      
    }

    
    if(num.length!=8){
        alert("le numero de tel  contient exactement  8 chiffres");return false;
    
    }


    if(num[0]=='0'){
        alert("le numero de tel  ne doitpas commencer par 0");return false;

    
    }


  
    
    
}


/* recuperer les prix des produits dans location*/
function updatePrice(){


     select = document.getElementById('idproduit');
     option = select.options[select.selectedIndex];
     price = option.getAttribute('data-price');
    document.getElementById('prixp').value = price;
}









function verifloc(){
    
     
    cin=document.getElementById("cin").value;
    pre=document.getElementById("pre").value;
    nom=document.getElementById("nom").value;
    email=document.getElementById("email").value;
    num=document.getElementById("num").value;


      
    

    for(var i=0;i<cin.length;i++){
        if(!(cin[i]<='9' && cin[i]>='0')){
            alert("le champ cin doit etre number");return false;
        }
    
      
    }




    if(cin.length!=8){
        alert("le numero de cin contient exactement  8 chiffres");return false;
    
    }
    if(cin[0]!='0' && cin[0]!='1'){
        alert("le numero de cin doit commencer par 0 ou 1");return false;

    
    }



    var regex = /^[A-Za-z0-9+.-_]+@[A-Za-z0-9.-]+$/;
    if (!regex.test(email)) {
    
       alert("Adresse e-mail invalide");return false;

    } 
    







    for(var i=0;i<nom.length;i++){
        if(!(nom[i].toUpperCase()<='Z'&& nom[i].toUpperCase()>='A')){
            alert("le champ nom doit etre alpha");return false;
        }
      
    }
    
    for(var i=0;i<pre.length;i++){
        if(!(pre[i].toUpperCase()<='Z'&& pre[i].toUpperCase()>='A')){
            alert("le champ prenom doit etre alpha");return false;
        }
      
    }




  

    for(var i=0;i<num.length;i++){
        if(!(num[i]<='9' && num[i]>='0')){
            alert("le champ num de tel doit etre number");return false;
        }
    
      
    }

    
    if(num.length!=8){
        alert("le numero de tel  contient exactement  8 chiffres");return false;
    
    }


    if(num[0]=='0'){
        alert("le numero de tel  ne doitpas commencer par 0");return false;

    
    }

   
    qte=document.getElementById("qte").value;
    if(qte<1){
        dateloc=document.getElementById("quantite ne doit etre ni null ni negatif").value;return false;
    }
    



    idproduit=document.getElementById('idproduit').selectedIndex;
    if (idproduit==0) {
        alert("choix obligatoire du produit");return false;
    }




    dateloc=document.getElementById("dateloc").value;
    dateret=document.getElementById("dateret").value;


    if (!dateret) {
        alert("dateret non defini");return false;
      }


    if(dateloc==dateret){
        alert("dateretd doit etre superieure a dateloc");return false;

    }

}

function datelocmiseajour(){
    

 currentdate = new Date();
  year = currentdate.getFullYear().toString();
 month = (currentdate.getMonth() + 1).toString().padStart(2, '0'); 
 day = currentdate.getDate().toString().padStart(2, '0'); 

 formatteddate = year + '-' + month + '-' + day;

document.getElementById("dateloc").value = formatteddate;
document.getElementById("dateret").min=formatteddate;


}



function verifrec(){
    
    
    idcom=dateret=document.getElementById("idcom").value;


    for(var i=0;i<idcom.length;i++){
        if(!(idcom[i]<='9' && idcom[i]>='0')){
            alert("le champ idcom doit etre number");return false;
        }
    
      
    }

}





function verifcons(){


    cin=document.getElementById("cin").value;


    for(var i=0;i<cin.length;i++){
        if(!(cin[i]<='9' && cin[i]>='0')){
            alert("le champ ncin doit etre number");return false;
        }
    
      
    }




    if(cin.length!=8){
        alert("le numero de cin contient exactement  8 chiffres");return false;
    
    }
    if(cin[0]!='0' && cin[0]!='1'){
        alert("le numero de cin doit commencer par 0 ou 1");return false;

    
    }
}

function verifconnexion(){
    nom=document.getElementById("nom").value;

    for(var i=0;i<nom.length;i++){
        if(!(nom[i].toUpperCase()<='Z'&& nom[i].toUpperCase()>='A')){
            alert("le champ nom doit etre alpha");return false;
        }
      
    }

}


function verifajoutadmin(){
    nom=document.getElementById("nom").value;

    for(var i=0;i<nom.length;i++){
        if(!(nom[i].toUpperCase()<='Z'&& nom[i].toUpperCase()>='A')){
            alert("le champ nom doit etre alpha");return false;
        }
      
    }

}
    


    
