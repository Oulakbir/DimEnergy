<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="newlogo.ico" />
    <title>DimEnergy</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/datatables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    </head>
<style>
#simulateur{
    padding:5px; 
    display:none;
    background-color:#F5F5F5;
    margin:40px;
}
#lien1{
    cursor: pointer;
    color:#6495ed;
    text-decoration:none;
}

.top-bar span{
    font-size:12px;
    padding:1px 5px;
}
.navbar-nav .nav-link{
  color:black !important;
  font-size:16px;
  margin:6px;
  font-weight:600;
  font-family:Times sans-serif;
}
.navbar-nav .nav-link:hover{
  color:#155d74 !important;
  font-size:16px;
  margin:6px;
  font-weight:600;
}
h3{
    color:black;
    font-family:Times sans-serif;
}
 h3:first-letter,#span{
    color:#6495ed;
    font-size:40px;
    font-family:Times sans-serif;
    
}
.titre{
    display:flex;
    border: 0.5px solid grey;
    background:#D3D3D3;
    padding-top:8px;
}
#calcul1,#calcul2,#calcul3,#calcul4,#calcul5,#calcul6,#rapportcalcul{
    display:none;
    margin:3px auto;
    padding:5px;
}
table {
border: medium solid #6495ed;
border-collapse: collapse;
}
th {
font-family: monospace;
border: thin solid #6495ed;
padding: 5px;
background-color: #D0E3FA;
/*background-image: url(sky.jpg);*/
}
td {
font-family: sans-serif;
border: thin solid #6495ed;
padding: 5px;
text-align: center;
background-color: #ffffff;
}
caption {
font-family: sans-serif;
}
.courantmaxond{
    display:none;
}
</style>
<body style="background-color:#ccd6d9;">
    <!--********************* top bar  *********************-->
    <section class="" style="background-color:#155d74;">
    <div class="container">
<div class="row top-bar" style="padding-bottom:3px;">

  <div class="col text-left">

      <span class="text-white">
         <i class="fab fa-facebook-f"></i>
      </span> 

      <span class="text-white">
         <i class="fab fa-skype"></i>
      </span> 

      <span class="text-white">
         <i class="fab fa-twitter"></i>
      </span> 
      
      <span class="text-white">
         <i class="fab fa-google-plus-g"></i>
      </span> 

      <span class="text-white">
         <i class="fab fa-youtube"></i>
      </span> 

    </div>
  <div class="col text-right">

      <span class="text-white">
          <i class="fas fa-phone"></i>
          0529475403
      </span>
      <span class="text-white">
          |
      </span>
      <span class="text-white">
          <i class="fas fa-envelope"></i>
          mogadoraero@gmail.com
      </span>
  </div>
</div>
    </div>
</section>

<!--******************add nav here*********************-->
<section class="" style="background-color: #efeeee;">
    <div class="container">

    <nav class="navbar navbar-expand-md navbar-dark">
<a class="navbar-brand p-0" href="#" style="display:flex;">
    
<span class="service-icon rounded-circle mx-auto mb-3 fw-bolder" style="color:#6495ed;"><i class="icon-energy fa-2x"></i></span><h3 class="fst-italic fw-bolder"><b>DIM <span id="span">E</span>NERGY<span style="height:65px;color:#6495ed;">.com</span></b></h3>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="collapsibleNavbar">

<ul class="navbar-nav " style="margin-left:auto;">

    <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">Acceuil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('dimenergypv')}}">Dimensionnement PV</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('dimenergyeolien')}}">Dimensionnement Eolien</a>
    </li>

</ul>
</div>

</nav>

    </div>
</section>

 
<div class="m-5"style="font-family:Times sans-serif;background-color:white;border-radius:20px;padding:40px;"><b>
    <p> Dimensionnement d'une installation éolienne.<br>
       Le bon dimensionnement d’une installation est une étape essentielle à maitriser.<br>
       Ci-dessous, vous trouverez toutes les étapes pour déterminer vos besoins en énergie eolienne.
    </p>
 <ul style=" color:#696969;list-style:none;">
      <li><span class="icon-pin"></span>&nbsp; Calculer ses besoins en électricité.</li> 
      <li><span class="icon-pin"></span>&nbsp; Identification des caractéristiques du site.</li>
      <li><span class="icon-pin"></span>&nbsp; Choix des accessoires des aérogénerateurs.</li>
</ul><br>
<h6><strong>Découvrez notre simulateur en ligne pour kit eolien</strong></h6>
<h6><strong>Calculer votre consommation et déterminez le kit eolien adapté à vos besoins.</strong></h6><br><br>

<h5><a onclick="myfunction()" id="lien1" class="fw-bolder">Voir le simulateur</a></h5>
  
<div id="simulateur">

    <section id="etape">
     <div class="titre">
     <p>&nbsp;&nbsp;Etape 1 | Définissez vos besoins en énergie</p>
     <span class="position-absolute" style="right:150px;cursor:pointer;" onclick="simfunction1()">
     <i class="fa-solid fa-circle"></i>
    </span>
     </div>
     <div id="calcul1">
     <p style="text-align:center;">IDENTIFIER VOS EQUIPEMENTS</p>
     <div id="equipements" class="container px-4 px-lg-5 text-center" style="display:flex;flex-wrap:wrap;padding:10px;" >


        <div class="div-img" style="margin:8px;"  id="1" >
               <img src="1.png" alt="lampe" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement1()">
               <h6  style="text-align:center;margin:5px;"><strong class="pm">60</strong>W</h6>
               <h4 class="nomEquipement" style="display:none;">Lampe</h4>
               <div style="display:none;" id="numbers1" >
                   <input type="number" placeholder="nombre" min="0" name="nombre" id="nombre" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs1(60)">
                   <input type="number" placeholder="heures de travail" min="0"  max="24" name="heure" id="heure" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs1(60)">
                   <input type="number" placeholder="resultat" name="produit" id="produit" style="display:block;margin:5px auto;width:55%;cursor:not-allowed;" value="0" disabled >
               </div>
        </div>

        <div class="div-img" style="margin:8px;" id="2">
               <img src="2.png" alt="television" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement2()">
               <h6 style="text-align:center;margin:5px;"><strong class="pm">100</strong>W</h6>
               <h4 class="nomEquipement" style="display:none;">Telévision</h4>
               <div style="display:none;" id="numbers2">
                   <input type="number" placeholder="nombre" min="0" name="nombre" id="nombre" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs2(100)">
                   <input type="number" placeholder="heures de travail" min="0"  max="24" name="heure" id="heure" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs2(100)">
                   <input type="number" placeholder="resultat" name="produit" id="produit" style="display:block;margin:5px auto;width:55%;cursor:not-allowed;" value="0" disabled>
               </div>
        </div>

        <div class="div-img" style="margin:8px;" id="3">
              <img src="3.png" alt="frigo" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement3()">
              <h6  style="text-align:center;margin:5px;"><strong class="pm">400</strong>W</h6>
              <h4 class="nomEquipement" style="display:none;">Frigo</h4>
              <div style="display:none;" id="numbers3">
                   <input type="number" placeholder="nombre" min="0" name="nombre" id="nombre" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs3(400)">
                   <input type="number" placeholder="heures de travail" min="0"  max="24" name="heure" id="heure" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs3(400)">
                   <input type="number" placeholder="resultat" name="produit" id="produit" style="display:block;margin:5px auto;width:55%;cursor:not-allowed;" value="0" disabled>
               </div>
        </div>
        
        <div class="div-img" style="margin:8px;" id="4">
            <img src="4.png" alt="chofo" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement4()">
            <h6  style="text-align:center;margin:5px;"><strong class="pm">2000</strong>W</h6>
            <h4 class="nomEquipement" style="display:none;">Chofo</h4>
            <div style="display:none;" id="numbers4">
                   <input type="number" placeholder="nombre" min="0" name="nombre" id="nombre" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs4(2000)">
                   <input type="number" placeholder="heures de travail" min="0"  max="24" name="heure" id="heure" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs4(2000)">
                   <input type="number" placeholder="resultat" name="produit" id="produit" style="display:block;margin:5px auto;width:55%;cursor:not-allowed;" value="0" disabled>
               </div>
        </div>

        <div class="div-img" style="margin:8px;" id="5">
            <img src="5.png" alt="four" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement5()">
            <h6  style="text-align:center;margin:5px;"><strong class="pm">2500</strong>W</h6>
            <h4 class="nomEquipement" style="display:none;">Four</h4>
            <div style="display:none;" id="numbers5">
                   <input type="number" placeholder="nombre" min="0" name="nombre" id="nombre" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs5(2500)">
                   <input type="number" placeholder="heures de travail" min="0" max="24" name="heure" id="heure" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs5(2500)">
                   <input type="number" placeholder="resultat" name="produit" id="produit" style="display:block;margin:5px auto;width:55%;cursor:not-allowed;" value="0" disabled>
               </div>
        </div>

        <div class="div-img" style="margin:8px;" id="6">
            <img src="6.png" alt="machine" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement6()">
            <h6  style="text-align:center;margin:5px;"><strong class="pm">3000</strong>W</h6>
            <h4 class="nomEquipement" style="display:none;">Machine à laver</h4>
            <div style="display:none;" id="numbers6">
                   <input type="number" placeholder="nombre" min="0" name="nombre" id="nombre" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs6(3000)">
                   <input type="number" placeholder="heures de travail" min="0" max="24" name="heure" id="heure" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs6(3000)">
                   <input type="number" placeholder="resultat" name="produit" id="produit" style="display:block;margin:5px auto;width:55%;cursor:not-allowed;" value="0" disabled>
               </div>
        </div>

        <div class="div-img" style="margin:8px;" id="7">
            <img src="7.png" alt="pcbureau" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement7()">
            <h6  style="text-align:center;margin:5px;"><strong class="pm">85</strong>W</h6>
            <h4 class="nomEquipement" style="display:none;">Pc bureau</h4>
            <div style="display:none;" id="numbers7">
                   <input type="number" placeholder="nombre" min="0" name="nombre" id="nombre" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs7(85)">
                   <input type="number" placeholder="heures de travail" min="0"  max="24" name="heure" id="heure" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs7(85)">
                   <input type="number" placeholder="resultat" name="produit" id="produit" style="display:block;margin:5px auto;width:55%;cursor:not-allowed;" value="0" disabled>
               </div>
        </div>

        <div class="div-img" style="margin:8px;" id="8">
            <img src="8.png" alt="pcportable" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement8()">
             <h6  style="text-align:center;margin:5px;"><strong class="pm">35</strong>W</h6>
             <h4 class="nomEquipement" style="display:none;">Pc portable</h4>
             <div style="display:none;" id="numbers8">
                   <input type="number" placeholder="nombre" min="0" name="nombre" id="nombre" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs8(35)">
                   <input type="number" placeholder="heures de travail" min="0" max="24" name="heure" id="heure" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs8(35)">
                   <input type="number" placeholder="resultat" name="produit" id="produit" style="display:block;margin:5px auto;width:55%;cursor:not-allowed;" value="0" disabled>
               </div>
        </div>

        <div class="div-img" style="margin:8px;" id="9">
            <img src="9.png" alt="climatiseur" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement9()">
             <h6  style="text-align:center;margin:5px;"><strong class="pm">1700</strong>W</h6>
             <h4 class="nomEquipement" style="display:none;">Climatiseur</h4>
             <div style="display:none;" id="numbers9">
                   <input type="number" placeholder="nombre" min="0" name="nombre" id="nombre" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs9(1700)">
                   <input type="number" placeholder="heures de travail" min="0"  max="24" name="heure" id="heure" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs9(1700)">
                   <input type="number" placeholder="resultat" name="produit" id="produit" style="display:block;margin:5px auto;width:55%;cursor:not-allowed;" value="0" disabled>
               </div>
        </div>

        <div class="div-img" style="margin:8px;" id="10">
            <img src="10.png" alt="chauffage" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement10()">
             <h6  style="text-align:center;margin:5px;"><strong class="pm">60</strong>W</h6>
             <h4 class="nomEquipement" style="display:none;">Chauffage</h4>
             <div style="display:none;" id="numbers10">
                   <input type="number" placeholder="nombre" min="0" name="nombre" id="nombre" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs10(60)">
                   <input type="number" placeholder="heures de travail" min="0" max="24" name="heure" id="heure" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs10(60)">
                   <input type="number" placeholder="resultat" name="produit" id="produit" style="display:block;margin:5px auto;width:55%;cursor:not-allowed;" value="0" disabled>
               </div>
        </div>

        <div class="div-img" style="margin:8px;" id="11">
            <img src="11.png" alt="aspirateur" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement11()">
             <h6  style="text-align:center;margin:5px;"><strong class="pm">800</strong>W</h6>
             <h4 class="nomEquipement" style="display:none;">Aspirateur</h4>
             <div style="display:none;" id="numbers11">
                   <input type="number" placeholder="nombre" min="0" name="nombre" id="nombre" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs11(800)">
                   <input type="number" placeholder="heures de travail" min="0" max="24" name="heure" id="heure" style="display:block;margin:5px auto;width:55%;" value="0" onchange="managinputs11(800)">
                   <input type="number" placeholder="resultat" name="produit" id="produit" style="display:block;margin:5px auto;width:55%;cursor:not-allowed;" value="0" disabled>
               </div>
        </div>
    </div>
    <div id="hidden" class="container px-4 px-lg-5 text-center">
        <input type="hidden" name="besoin-energie"  id="besoin" value="0" >
         <input type="hidden" name="puissance-totale" id="ptotal" value="0">
         <button class="btn btn-primary btn-xl" type="submit" style="background-color:#155d74;border:2px solid #155d74;margin:10px;" onclick="varbesoins();calcptotal();simfunction1();simfunction2();">Valider</button>
    </div>
 </div>
</section> 

<section id="etape">
     <div class="titre">
     <p>&nbsp;&nbsp;Etape 2 | Détermination des caractéristiques du site.</p>
     <span class="position-absolute"  style="right:150px;cursor:pointer;" onclick="simfunction2()">
     <i class="fa-solid fa-circle"></i>
    </span>
     </div>
     <div id="calcul2">
     <p style="text-align:center;">IDENTIFICATION DES CARACTERISTIQUES</p><br><br>
     <div class="container px-4 px-lg-5 text-center">
                <label for="topographie">Choisir votre topographie :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input list="topographies" id="topographie" name="topographie"  style="border-radius:15px;background-color:beige;padding:10px;" onchange="choixtopography();"/>
                <datalist id="topographies">
                       <option value="Glace" >
                       <option value="Neige sur sol plat" >
                       <option value="Mer calme" >
                       <option value="Littoral avec brise de mer" >
                       <option value="Chaume couvert de neige" >
                       <option value="Herbe coupée" >
                       <option value="Prairie à herbe courte" >
                       <option value="Cultures, prairies à herbe haute" >
                       <option value="Haies" >
                       <option value="Arbres et haies épars" >
                       <option value="Arbres, haies, quelques batiments" >
                       <option value="Banlieuses" >
                       <option value="Bois" >
                </datalist>
                <div style="display:none;">
                       <input type="number" value="0.07" class="coeffalpha">
                       <input type="number" value="0.09" class="coeffalpha">
                       <input type="number" value="0.09" class="coeffalpha">
                       <input type="number" value="0.11" class="coeffalpha">
                       <input type="number" value="0.12" class="coeffalpha">
                       <input type="number" value="0.14" class="coeffalpha">
                       <input type="number" value="0.16" class="coeffalpha">
                       <input type="number" value="0.19" class="coeffalpha">
                       <input type="number" value="0.21" class="coeffalpha">
                       <input type="number" value="0.24" class="coeffalpha">
                       <input type="number" value="0.29" class="coeffalpha">
                       <input type="number" value="0.31" class="coeffalpha">
                       <input type="number" value="0.43" class="coeffalpha">
                </div>
               </div><br>
               <div class="container px-4 px-lg-5 text-center">
                <label for="hauteur">Identifier la hauteur de l'éolienne : &nbsp;&nbsp;</label><input type="number" name="hauteur" id="hauteur" min="6" placeholder="Hauteur" value="6" style="border-radius:15px;background-color:beige;padding:10px;" onchange="managehauteur();"></div><br><br>
     <div class="container px-4 px-lg-5 text-center" id="erreur0" style="display:none;background-color:red;color:white;border-radius:20px;border:2px solid light-blue;width:45%;padding:13px;margin-bottom:8px;"><b>La hauteur choisi est petite.La hauteur doit être supérieure ou égale à 6m</b></div>
     <div class="container px-4 px-lg-5 text-center" id="erreur2" style="display:none;background-color:red;color:white;border-radius:20px;border:2px solid light-blue;width:45%;padding:13px;margin-bottom:8px;"><b>Veuillez modifier la hauteur ! La vitesse du vent doit être superieure ou égale à 4 m/s.</b></div> 
     <div class="container px-4 px-lg-5 text-center">
            <button class="btn btn-primary btn-xl" type="submit"  style="margin:10px;background-color:#ecb807; border:2px solid #ecb807;" onclick='choixtype("Autonome");choixhauteur();'>Autonome</button>
            <button class="btn btn-primary btn-xl" type="submit"  style="margin:10px;background-color:#ecb807; border:2px solid #ecb807;" onclick='choixtype("RaccordeeReseau");choixhauteur();'>Raccordée au réseau</button><br><br>
  
            <textarea id="type" style="display:none">type</textarea>
            <input type="number" id="alpha" style="display:none;" value="0">
            <button class="btn btn-primary btn-xl" type="submit"  style="margin:10px;background-color:#155d74;border:2px solid #155d74;" onclick="simfunction3();simfunction2();">Valider</button>
            </div>
      </div>
</section>
<section id="etape">
     <div class="titre">
       <p>&nbsp;&nbsp;Etape 3 | Identification des accessoires.</p>
        <span class="position-absolute" style="right:150px;cursor:pointer;" onclick="simfunction3()">
          <i class="fa-solid fa-circle"></i>
       </span>
     </div>
     <div id="calcul3">
         <p style="text-align:center;">IDENTIFIEZ VOTRE CHOIX</p>

        <div id="dimensionnement" class="container px-4 px-lg-5 text-center" style="display:flex;flex-wrap:wrap;padding:10px;" >
        
    

        <div id="div-racres" class="container px-4 px-lg-5 text-center bg-transparent text-dark " style="display:none;border:2px solid grey;border-radius:60px;box-shadow:2px 2px grey;" class="container px-4 px-lg-5 text-center">
        <br><br><br> <div class="container px-4 px-lg-5 text-center"> <p style="text-align:center;color:coral;">CHOIX DES EOLIENNES</p></div>
       <div id="eolienne "style="display:flex;flex-wrap:wrap;padding:10px;" class="container px-4 px-lg-5 text-center">
        <div  style="margin:8px;" class="diveol" onclick="choixeolien(11);">
              <img src="1eolien.png" alt="pv1" width=150 id="11" height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
             <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien">3.6</strong>KW</h6> 
             <div style="display:none;">
               <p class="productionanuelle">2723330</p>   
               <p class="diametre">3</p> 
               <p class="hauteureolienne">23.5</p>         
            </div>
           </div>
    
           <div  style="margin:8px;" class="diveol" onclick="choixeolien(12);">
              <img src="2eolien.png" alt="pv2" width=150 height=150 id="12" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien">2.5</strong>Kw</h6> 
             <div style="display:none;">
               <p class="productionanuelle">3990000</p>
               <p class="diametre">3.6</p> 
               <p class="hauteureolienne">25</p>
           </div>
        </div>
           <div  style="margin:8px;" class="diveol" onclick="choixeolien(13);">
              <img src="3eolien.png" alt="pv3" width=150 height=150 id="13" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien">6</strong>KW</h6> 
             <div style="display:none;">
               <p class="productionanuelle">4800000</p>
               <p class="diametre">3.5</p> 
               <p class="hauteureolienne">29.9</p>
           </div>
           </div>
           <div  style="margin:8px;" class="diveol" onclick="choixeolien(14);">
              <img src="4eolien.png" alt="pv4" width=150 height=150 id="14" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien">20</strong>KW</h6> 
             <div style="display:none;">
               <p class="productionanuelle">39003000</p>
               <p class="diametre">5.5</p> 
               <p class="hauteureolienne">31</p>
           </div>
           </div>
           <div  style="margin:8px;" class="diveol" onclick="choixeolien(15);">
              <img src="5eolien.png" alt="pv4" width=150 height=150 id="15" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien">1500</strong>KW</h6> 
             <div style="display:none;">
               <p class="productionanuelle">900000000</p>
               <p class="diametre">6.9</p>
               <p class="hauteureolienne">108.5</p> 
           </div>
           </div>
           <div  style="margin:8px;" class="diveol" onclick="choixeolien(16);">
              <img src="6eolien.png" alt="pv4" width=150 height=150 id="16" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien">150</strong>KW</h6> 
             <div style="display:none;">
               <p class="productionanuelle">300000000</p>
               <p class="diametre">6</p>
               <p class="hauteureolienne">68</p>
           </div>
           </div>
        </div>
          <br><br><br> 
        <div class="container px-4 px-lg-5 text-center"><p style="text-align:center;color:coral">CHOIX D'ONDULEUR</p></div>
        <div id="onduleur"style="display:flex;flex-wrap:wrap;padding:10px;" class="container px-4 px-lg-5 text-center">
        <div  style="margin:8px;" class="divond" onclick="choixonuleur(21);">
              <img src="1onduleur.png" alt="pv1" width=150 id="21" height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
             <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur">3</strong>KW</h6> 
             </div>
    
           <div  style="margin:8px;" class="divond" onclick="choixonuleur(22);">
              <img src="2onduleur.png" alt="pv2" width=150 height=150 id="22" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur">20</strong>Kw</h6> 
           </div>
           <div  style="margin:8px;" class="divond" onclick="choixonuleur(23);">
              <img src="3onduleur.png" alt="pv3" width=150 height=150 id="23" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur">7</strong>KW</h6> 
           </div>
           <div  style="margin:8px;" class="divond" onclick="choixonuleur(24);">
              <img src="4onduleur.png" alt="pv4" width=150 height=150 id="24" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur">4</strong>KW</h6> 
           </div>
           <div  style="margin:8px;" class="divond" onclick="choixonuleur(25);">
              <img src="5onduleur.png" alt="pv4" width=150 height=150 id="25" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur">40</strong>KW</h6> 
           </div>
           <div  style="margin:8px;" class="divond" onclick="choixonuleur(26);">
              <img src="6onduleur.png" alt="pv4" width=150 height=150 id="26" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur">2000</strong>KW</h6> 
           </div>
           </div>
           <br><br><br>
           <div class="container px-4 px-lg-5 text-center" id="erreur01" style="display:none;background-color:red;color:white;border-radius:20px;border:2px solid light-blue;width:45%;padding:13px;margin-bottom:8px;"><b>La hauteur de l'éolienne choisie n'est pas compatible avec celle identifiée dans l'étape précédente .</b></div>
          <div class="container px-4 px-lg-5 text-center" id="erreur1" style="display:none;background-color:red;color:white;border-radius:20px;border:2px solid light-blue;width:45%;padding:13px;margin-bottom:8px;"><b>La puissance de l'onduleur doit être supérieure à la puissance de l'eolienne choisie .</b></div>
           
        <br><br>
        </div>


<div id="divauto" class="container px-4 px-lg-5 text-center bg-transparent text-dark " style="display:none;border:2px solid grey;border-radius:60px;box-shadow:2px 2px grey;" class="container px-4 px-lg-5 text-center">
<br><br><br><div class="container px-4 px-lg-5 text-center"><p style="text-align:center;color:coral">CHOIX DES BATTRIES</p></div><br><br>
<div id="battrie" class="container px-4 px-lg-5 text-center" style="display:flex;flex-wrap:wrap;padding:10px;" >
<div  style="margin:8px;" class="divbat" onclick="choixbatterie(51,150,12);">
   <img src="1batt.png" alt="pv1" id="51" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">12</h6>V &nbsp;<h6 class="capacitebat">150</h6>Ah</div>
</div>

<div  style="margin:8px;" class="divbat" onclick="choixbatterie(52,200,12);">
   <img src="2batt.png" alt="pv2" id="52" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">12</h6>V &nbsp;<h6 class="capacitebat">200</h6>Ah</div>
</div>

<div  style="margin:8px;" class="divbat" onclick="choixbatterie(53,230,24);">
   <img src="3batt.png" alt="pv3"id="53"  width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">24</h6>V &nbsp;<h6 class="capacitebat">230</h6>Ah</div>
</div>

<div  style="margin:8px;" class="divbat" onclick="choixbatterie(54,120,19);">
   <img src="4batt.png" alt="pv4" id="54" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">19</h6>V &nbsp;<h6 class="capacitebat">120</h6>Ah</div>
</div>

<div  style="margin:8px;" class="divbat" onclick="choixbatterie(55,120,12);">
   <img src="5batt.png" alt="pv4" id="55" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">12</h6>V &nbsp;<h6 class="capacitebat">120</h6>Ah</div>
</div>

<div  style="margin:8px;" class="divbat" onclick="choixbatterie(56,130,13);">
   <img src="6batt.png" alt="pv4" id="56" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">13</h6>V &nbsp;<h6 class="capacitebat">130</h6>Ah</div>
</div>
</div>

<br><br><br> 
<div class="container px-4 px-lg-5 text-center"> 
    <p style="text-align:center;color:coral;">CHOIX DES EOLIENNES</p></div><br><br>
       <div id="eolienne "style="display:flex;flex-wrap:wrap;padding:10px;" class="container px-4 px-lg-5 text-center">
        <div  style="margin:8px;" class="diveol1" onclick="choixeolien1(61);">
              <img src="1eolien.png" alt="pv1" width=150 id="61" height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
             <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien1">3.6</strong>KW</h6> 
             <div style="display:none;">
               <p class="productionanuelle1">2723330</p>
               <p class="diametre1">3</p>
               <p class="hauteureolienne1">23.5</p>       
            </div>
           </div>
    
           <div  style="margin:8px;" class="diveol1" onclick="choixeolien1(62);">
              <img src="2eolien.png" alt="pv2" width=150 height=150 id="62" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien1">2.5</strong>Kw</h6> 
             <div style="display:none;">
               <p class="productionanuelle1">3990000</p>
               <p class="diametre1">3.6</p> 
               <p class="hauteureolienne1">25</p> 
           </div>
        </div>
           <div  style="margin:8px;" class="diveol1" onclick="choixeolien1(63);">
              <img src="3eolien.png" alt="pv3" width=150 height=150 id="63" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien1">600</strong>KW</h6> 
             <div style="display:none;">
               <p class="productionanuelle1">4800000</p>
               <p class="diametre1">3.5</p> 
               <p class="hauteureolienne1">29.9</p> 
           </div>
           </div>
           <div  style="margin:8px;" class="diveol1" onclick="choixeolien1(64);">
              <img src="4eolien.png" alt="pv4" width=150 height=150 id="64" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien1">20</strong>KW</h6> 
             <div style="display:none;">
               <p class="productionanuelle1">39003000</p>
               <p class="diametre1">5.5</p>
               <p class="hauteureolienne1">31</p>  
           </div>
           </div>
           <div  style="margin:8px;" class="diveol1" onclick="choixeolien1(65);">
              <img src="5eolien.png" alt="pv4" width=150 height=150 id="65" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien1">1500</strong>KW</h6> 
             <div style="display:none;">
               <p class="productionanuelle1">900000000</p>
               <p class="diametre1">6.9</p>
               <p class="hauteureolienne1">108.5</p> 
           </div>
           </div>
           <div  style="margin:8px;" class="diveol1" onclick="choixeolien1(66);">
              <img src="6eolien.png" alt="pv4" width=150 height=150 id="66" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceeolien1">150</strong>KW</h6> 
             <div style="display:none;">
               <p class="productionanuelle1">300000000</p>
               <p class="diametre1">6</p>
               <p class="hauteureolienne1">68</p> 
           </div>
           </div>
        </div>

        <br><br><br> <div class="container px-4 px-lg-5 text-center"><p style="text-align:center;color:coral">CHOIX D'ONDULEUR</p></div><br><br>
        <div id="onduleur"style="display:flex;flex-wrap:wrap;padding:10px;" class="container px-4 px-lg-5 text-center">
        <div  style="margin:8px;" class="divond1" onclick="choixonuleur1(71);">
              <img src="1onduleur.png" alt="pv1" width=150 id="71" height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
             <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur1">3</strong>KW</h6> 
             </div>
    
           <div  style="margin:8px;" class="divond1" onclick="choixonuleur1(72);">
              <img src="2onduleur.png" alt="pv2" width=150 height=150 id="72" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur1">20</strong>Kw</h6> 
           </div>

           <div  style="margin:8px;" class="divond1" onclick="choixonuleur1(73);">
              <img src="3onduleur.png" alt="pv3" width=150 height=150 id="73" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur1">7</strong>KW</h6> 
           </div>

           <div  style="margin:8px;" class="divond1" onclick="choixonuleur1(74);">
              <img src="4onduleur.png" alt="pv4" width=150 height=150 id="74" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur1">4</strong>KW</h6> 
           </div>

           <div  style="margin:8px;" class="divond1" onclick="choixonuleur1(75);">
              <img src="5onduleur.png" alt="pv4" width=150 height=150 id="75" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur1">40</strong>KW</h6> 
           </div>

           <div  style="margin:8px;" class="divond1" onclick="choixonuleur1(76);">
              <img src="6onduleur.png" alt="pv4" width=150 height=150 id="76" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <h6  style="text-align:center;margin:5px;"><strong class="puissanceonduleur1">2000</strong>KW</h6> 
           </div>

           </div>

        <br><br><br><div class="container px-4 px-lg-5 text-center"><p style="text-align:center;color:coral">CHOIX DES REGULATEURS</p></div><br><br>
<div id="battrie" class="container px-4 px-lg-5 text-center" style="display:flex;flex-wrap:wrap;padding:10px;" >

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(81);">
   <img src="1reg.png" alt="pv1" id="81" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">12</h6>V &nbsp;<h6 class="courantreg">50</h6>A</div>
   <div style="display:none;" class="puissancereg" >0.45</div>
</div>

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(82);">
   <img src="2reg.png" alt="pv2" id="82" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">40</h6>V &nbsp;<h6 class="courantreg">60</h6>A</div>
   <div style="display:none;" class="puissancereg" >15</div>
</div>

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(83);">
   <img src="3reg.png" alt="pv3" id="83" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">24</h6>V &nbsp;<h6 class="courantreg">30</h6>A</div>
   <div style="display:none;" class="puissancereg" >3,2</div>
</div>

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(84);">
   <img src="4reg.png" alt="pv4" id="84" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">100</h6>V &nbsp;<h6 class="courantreg">50</h6>A</div>
   <div style="display:none;" class="puissancereg" >10</div>
</div>

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(85);">
   <img src="5reg.png" alt="pv4" id="85" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">200</h6>V &nbsp;<h6 class="courantreg">20</h6>A</div>
   <div style="display:none;" class="puissancereg" >20</div>
</div>

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(86);">
   <img src="6reg.png" alt="pv4" id="86" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">150</h6>V &nbsp;<h6 class="courantreg">15</h6>A</div>
   <div style="display:none;" class="puissancereg" >15</div>
</div>
</div>
           <br><br><br>
           <div class="container px-4 px-lg-5 text-center" id="erreur02" style="display:none;background-color:red;color:white;border-radius:20px;border:2px solid light-blue;width:45%;padding:13px;margin-bottom:8px;"><b>La hauteur de l'éolienne choisie n'est pas compatible avec celle identifiée dans l'étape précédente .</b></div>
        <div class="container px-4 px-lg-5 text-center" id="erreur3" style="display:none;background-color:red;color:white;border-radius:20px;border:2px solid light-blue;width:45%;padding:13px;margin-bottom:8px;"><b>La puissance de l'onduleur doit être supérieure à la puissance de l'eolienne choisie .</b></div>
        <div class="container px-4 px-lg-5 text-center" id="erreur5" style="display:none;background-color:red;color:white;border-radius:20px;border:2px solid light-blue;width:45%;padding:13px;margin-bottom:8px;"><b>L'energie de l'eolienne doit être inferieure ou égale à la production annuelle de la technologie utilisée.</b></div>    
        <div class="container px-4 px-lg-5 text-center" id="erreur4" style="display:none;background-color:red;color:white;border-radius:20px;border:2px solid light-blue;width:45%;padding:13px;margin-bottom:8px;"><b>Le regulateur choisi n'est pas compatible avec votre choix .</b></div>
<br><br>
        </div>


<div id="hidden" class="container px-4 px-lg-5 text-center">
    <input type="hidden" id="production" value="0">
    <input type="hidden" id="puissancechoisi" value="0">
    <input type="hidden" id="pondchoisi" value="0">
    <input type="hidden" id="nbreolienneracres" value="0">
    <input type="hidden" id="diametrechoisi" value="0">
    <input type="hidden" id="vitessemoyenne" value="0">
    <input type="hidden" id="hauteureoliennechoisi" value="0">
    <input type="hidden" id="capacitesys" value="0">
    <input type="hidden" id="capacitebatchoisi" value="0">
    <input type="hidden" id="nbbats" value="0">
    <input type="hidden" id="nbbatp" value="0">
    <input type="hidden" id="nbbat" value="0">
    <input type="hidden" id="ubatchoisi" value="0">
    <input type="hidden" id="energieglobale" value="0">
    <input type="hidden" id="energiebat" value="0">
    <input type="hidden" id="energieolien" value="0">    
    <input type="hidden" id="nbreolienneauto" value="0">
    <input type="hidden" id="uissanceregchoisi" value="0">
    <input type="hidden" id="puissanceregchoisi" value="0">
    <input type="hidden" id="tensionregchoisi" value="0">
    <input type="hidden" id="courantregchoisi" value="0">
</div>
        <div  class="container px-4 px-lg-5 text-center"> 
        <button class="btn btn-primary btn-xl" type="submit" style="background-color:#155d74;border:2px solid #155d74;margin:10px;" onclick="simfunction3();simfunctionrap();remplirrap();">Valider</button>       
        </div>
 </div>
</section> 
<section id="rapport" >
<div class="titre" style="background-color:#F5DEB3;color:#155d74;">
     <p>&nbsp;&nbsp;Fin | Rapport finale de l'instatlation.</p>
     <span class="position-absolute"  style="right:150px;cursor:pointer;" onclick="simfunctionrap();">
     <i class="fa-solid fa-circle"></i>
    </span>
     </div>
     <div id="rapportcalcul" style="padding:30px;">
     <p style="text-align:center;">RAPPORT D'INSTALATION</p>
    <div id="details">
    <h4><b><span class="icon-pin"></span>&nbsp; Caractéristiques du site : </b></h4>
        <p><span class="icon-paper-clip"></span>&nbsp;Ville : Essaouira<br>
        <span class="icon-paper-clip"></span>&nbsp;Hauteur : 10 m <br>
        <span class="icon-paper-clip"></span>&nbsp;Vitesse du vent : 6.5 m/s <br>
        <span class="icon-paper-clip"></span>&nbsp;Topographie : <b id="raptopographie"></b><br>
        </p>
    <h4><b><span class="icon-pin"></span>&nbsp; Caractéristiques de l'aérogénerateur : </b></h4>
        <p><span class="icon-paper-clip"></span>&nbsp;Type de géneratrice : géneratrice à aimant permanant.<br>
        <span class="icon-paper-clip"></span>&nbsp;Injection : en 230 V <br>
        <span class="icon-paper-clip"></span>&nbsp;Puissance de l'éolienne : <b id="puissan"></b> W <br>
        <span class="icon-paper-clip"></span>&nbsp;Production annuelle : <b id="rapproductionannuelle"></b> Wh/an <br>
        <span class="icon-paper-clip"></span>&nbsp;Diamètre des pales : <b id="rapdiametre"></b> m<br>      
        <span class="icon-paper-clip"></span>&nbsp;Vitesse moyenne : <b id="rapvitesse"></b>m/s <br>
        <span class="icon-paper-clip"></span>&nbsp;Hauteur de l'éolienne : <b id="raphauteur"></b> m<br>
        <span class="icon-paper-clip"></span>&nbsp;Nombre des éoliennes : <b id="rapnbreolienne"></b> éolienne(s)<br>
        </p>
        <h4><b><span class="icon-pin"></span>&nbsp; Besoins Energétiques de votre installation maisonière : </b></h4><br>
        <table id="tabequipements" style="margin:auto;">
            <tr>
                <th>Equipement</th>
                <th>Nombre</th>
                <th>Herures de travail</th>
                <th>Puissance nominale (w)</th>
                <th>Energie consommée (wh)</th>
            </tr>
            
        </table><br>
        <h6><span class="icon-paper-clip"></span>&nbsp;Consomation energetique : <b id="rapcons"></b>WH/j</h6><br>
          
        <div id="rapracres" style="display:none;">
           <h4><b><span class="icon-pin"></span>&nbsp; Caractéristiques de l'onduleur : </b></h4>
                       <span class="icon-paper-clip"></span>&nbsp;Puissance de l'onduleur : <b id="puissanceondrac"></b> kW <br>
           </div>

           <div id="rapauto" style="display:none;">
           <h4><b><span class="icon-pin"></span>&nbsp; Caractéristiques du batterie : </b></h4><br>
           <table id="tabbat" style="margin:auto;">
            <tr>
                <th>Capacité (AH)</th>
                <th>Tension (V) </th>
                <th>Nombre de battries</th>
                <th>Nombre de battries en série</th>
                <th>Nombre de battries en parallèle</th>
            </tr>
          </table><br>
           <h4><b><span class="icon-pin"></span>&nbsp; Caractéristiques de l'onduleur : </b></h4><br>
           <span class="icon-paper-clip"></span>&nbsp;Puissance de l'onduleur : <b id="puissanceondauto"></b> kW <br>
           <h4><b><span class="icon-pin"></span>&nbsp; Caractéristiques du régulateur : </b></h4> 
           <table id="tabregulateur" style="margin:auto;">
            <tr>
                  <th>Courant (A)</th>
                   <th>Tension (V)</th>
                   <th>Puissance (KW)</th>
            </tr>
                  
         </table><br>
          </div>
    </div>
    <button id="finishButton" class="btn btn-sm btn-primary mx-auto"onclick="finish();">Terminer</button><br><br>
    <a href="#" id="printPageButton" class="btn btn-sm btn- primary mb-3" class="btn btn-md btn-primary mr-2 mb-2" onclick="PDF();"><i class="fas fa-print"></i></a><br><br>
    </div>
</section>
</b><br><br>
<!-- evaluation -->
<div id="divisionnote"class="cont mx-auto bg-dark p-3" style="width:50%;border-radius:10px;display:none;" role="document">
                    <div class="modal-content">
                        <form method="GET" action="{{ route('evaluations')}}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="evaluation" class="text-dark"><Strong>Veuillez evaluer notre site (1 à 10)</Strong></label>
                                    <input type="number" required class="form-control" name="evaluation" id="evaluation" min="1" max="10" >
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="submit" class="btn btn-sm btn-outline-dark text-uppercase p-2 " onclick="hidino();"><strong>Enregistrer</strong></button>
                            </div>
                        </form>
                    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/datatables.min.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 

</body>
<script>
function hidino(){
        document.getElementById('divisionnote').style.display="none";
    }

function finish(){
    document.getElementById('divisionnote').style.display="block";
    var y=document.getElementById("rapportcalcul");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}

function PDF(){
       $('#divisionnote').hide();
       $('#finishButton').hide();
document.getElementById('printPageButton').style.display='none';
window.print();
}
function remplirrap(){
 let table1=document.getElementById("tabequipements");
 let table2=document.getElementById("tabbat");
 let table3=document.getElementById("tabregulateur");
let topographie=document.querySelector("#raptopographie");
let prodan=document.querySelector("#rapproductionannuelle");
let diametre=document.querySelector("#rapdiametre");
let vm=document.querySelector("#rapvitesse");
let haut=document.querySelector("#raphauteur");
let nbreolienne=document.querySelector("#rapnbreolienne");
let puis=document.querySelector("#puissan");
let puisondrac=document.querySelector("#puissanceondrac");
let puisondauto=document.querySelector("#puissanceondauto");
//onduleur
puisondrac.innerHTML=parseFloat(document.querySelector("#pondchoisi").value);
puisondauto.innerHTML=parseFloat(document.querySelector("#pondchoisi").value);
//*****//
let inputtopographie=document.querySelector("#topographie");
topographie.innerHTML=inputtopographie.value
let prodann=document.querySelector("#production");
prodan.innerHTML=parseFloat(prodann.value);
let diam=document.querySelector("#diametrechoisi");
diametre.innerHTML=parseFloat(diam.value);
let vitessem=document.querySelector("#vitessemoyenne");
vm.innerHTML=parseFloat(vitessem.value);
let hautt=document.querySelector("#hauteur");
haut.innerHTML=parseFloat(hautt.value);
puis.innerHTML=parseFloat(document.querySelector("#puissancechoisi").value);
let besrap=document.querySelector("#rapcons");
let consomationtotal=document.querySelector("#besoin");
 let nombreequipements=document.querySelectorAll("#nombre");
 let nomsequipements=document.querySelectorAll(".nomEquipement");
 let heuredetravail=document.querySelectorAll("#heure");
 let energieconsomee=document.querySelectorAll("#produit");
 let puissancesnominales=document.querySelectorAll(".pm");
 let ubchoisi=document.querySelector("#ubatchoisi");
 let nbbats=document.querySelector("#nbbats");
 let nbbatp=document.querySelector("#nbbatp");
 let nbbat=document.querySelector("#nbbat");
 let capacitebatchoisi=document.getElementById("capacitebatchoisi");   
   var puissanceregchoisi=document.querySelector("#puissanceregchoisi");
   var courantregchoisi=document.querySelector("#courantregchoisi");   
   var tensionregchoisi=document.querySelector("#tensionregchoisi");
for(let i=0;i<11;i++){
    if(parseInt(nombreequipements[i].value)!=0){
    let row= document.createElement('tr');
    let row_data1= document.createElement('td');
    let row_data2= document.createElement('td');
    let row_data3= document.createElement('td');
    let row_data4= document.createElement('td');
    let row_data5= document.createElement('td');
    console.log(nomsequipements[i].innerHTML);
    row_data1.innerHTML =nomsequipements[i].innerHTML;
    row_data2.innerHTML =parseInt(nombreequipements[i].value);
    row_data3.innerHTML =parseInt(heuredetravail[i].value);
    row_data4.innerHTML =parseInt(puissancesnominales[i].innerHTML);
    row_data5.innerHTML =parseInt(energieconsomee[i].value);
    row.appendChild(row_data1);
    row.appendChild(row_data2);
    row.appendChild(row_data3);
    row.appendChild(row_data4);
    row.appendChild(row_data5);
    table1.appendChild(row);}
 }
 besrap.innerHTML=parseInt(consomationtotal.value);
 /* batterie*/ 
 let row4= document.createElement('tr');
    let row4_data1= document.createElement('td');
    let row4_data2= document.createElement('td');
    let row4_data3= document.createElement('td');
    let row4_data4= document.createElement('td');
    let row4_data5= document.createElement('td');
    row4_data1.innerHTML=parseInt(capacitebatchoisi.value);
    row4_data2.innerHTML=parseInt(ubchoisi.value);
    row4_data3.innerHTML=parseInt(nbbat.value);
    row4_data4.innerHTML=parseInt(nbbats.value);
    row4_data5.innerHTML=parseInt(nbbatp.value);
    row4.appendChild(row4_data1);
    row4.appendChild(row4_data2);
    row4.appendChild(row4_data3);
    row4.appendChild(row4_data4);
    row4.appendChild(row4_data5);
    table2.appendChild(row4);
if(document.getElementById("type").innerHTML=="Autonome"){
    let nbr=document.querySelector("#nbreolienneauto");
    nbreolienne.innerHTML=parseFloat(nbr.value);
    document.querySelector("#rapauto").style.display="block";
    document.querySelector("#rapracres").style.display="none";
}
else if(document.getElementById("type").innerHTML=="RaccordeeReseau"){
    let nbr=document.querySelector("#nbreolienneracres");
    nbreolienne.innerHTML=parseFloat(nbr.value);
    document.querySelector("#rapauto").style.display="none";
    document.querySelector("#rapracres").style.display="block";
}
//reg
let row3= document.createElement('tr');
    let row3_data1= document.createElement('td');
    let row3_data2= document.createElement('td');
    let row3_data3= document.createElement('td');
    row3_data1.innerHTML=parseFloat(courantregchoisi.value);
    row3_data2.innerHTML=parseFloat(tensionregchoisi.value);   
    row3_data3.innerHTML=parseFloat(puissanceregchoisi.value);
    row3.appendChild(row3_data1);
    row3.appendChild(row3_data2);
    row3.appendChild(row3_data3);
    table3.appendChild(row3); 
// *** // 

}


function choixbatterie(idimg,capacite,tension){
    let imgs=document.querySelectorAll(".divbat img");
    let UBs=document.querySelectorAll(".tensionbat");
    let ubchoisi=document.querySelector("#ubatchoisi");
    let conse=document.querySelector("#besoin");
    let pt=document.querySelector("#ptotal");
    let Cs=document.querySelector("#capacitesys");
    let nbbats=document.querySelector("#nbbats");
    let nbbatp=document.querySelector("#nbbatp");
    let nbbat=document.querySelector("#nbbat");
    let energiglobale=document.querySelector("#energieglobale");
    let energibat=document.querySelector("#energiebat");
    let energieolien=document.querySelector("#energieolien");
    document.getElementById("capacitebatchoisi").value=capacite;
    let Usys=0;
    if(parseInt(pt.value)<500) Usys=12;
    else if(parseInt(pt.value)>500 && parseInt(pt.value)<2000) Usys=24;
    else if(parseInt(pt.value)>2000) Usys=48;

    let capaciteSys=(parseFloat(conse.value)*1)/(0.85*Usys);
     Cs.value=parseFloat(capaciteSys);
     energiglobale.value=parseFloat(conse.value)*1;
     energibat.value=parseFloat(energiglobale.value)/0.9;
     energieolien.value=(parseFloat(energibat.value)+parseFloat(conse.value))/0.85;
     console.log(energieolien.value);
    for(let i=0;i<6;i++){
     if(imgs[i].id==idimg){
    imgs[i].src="teck.jpeg";
    nbbats.value=Math.ceil(parseInt(Usys)/parseFloat(tension));
    nbbatp.value=Math.ceil(parseFloat(Cs.value)/parseFloat(capacite));
    if(nbbats.value<1) nbbats.value=1;
    if(nbbatp.value<1) nbbatp.value=1;
    nbbat.value=Math.round(parseFloat(nbbats.value)*parseFloat(nbbatp.value));
    ubchoisi.value=UBs[i].innerHTML;
     }
     else
     imgs[i].src=`${i+1}batt.png`;
    }
}

function simfunctionrap(){
    var y=document.getElementById("rapportcalcul");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}

function choixeolien(n){
var hauteurseol=document.querySelectorAll(".hauteureolienne");
var hauteolchoisie=document.querySelector("#hauteureoliennechoisie");
var imgs=document.querySelectorAll(".diveol img");
var puissancesCretes=document.querySelectorAll(".puissanceeolien");
var puissanceolienchoisi=document.querySelector("#puissancechoisi");
var productionchoisi=document.querySelector("#production");
var allprod=document.querySelectorAll(".productionanuelle");
let hauteur=document.getElementById("hauteur");
let d=document.querySelector("#diametrechoisi");
let ds=document.querySelectorAll(".diametre");
var img=document.getElementById(`${n}`);
for(let i=0;i<6;i++){
     if(imgs[i].id==n){
         if(hauteur.value==parseFloat(hauteurseol[i].innerHTML)){
             console.log("hello");
             document.querySelector("#erreur01").style.display="none";
       imgs[i].src="teck.jpeg";     
       productionchoisi.value=parseFloat(allprod[i].innerHTML);
       d.value=parseFloat(ds[i].innerHTML);
       puissanceolienchoisi.value=parseFloat(puissancesCretes[i].innerHTML);}
       else{
           console.log("yallah");
       document.querySelector("#erreur01").style.display="block";
    }
    }
     else
      imgs[i].src=`${i+1}eolien.png`;
}
}

function choixeolien1(n){
var hauteurseol=document.querySelectorAll(".hauteureolienne1");
var imgs=document.querySelectorAll(".diveol1 img");
var puissancesCretes=document.querySelectorAll(".puissanceeolien1");
var puissanceolienchoisi=document.querySelector("#puissancechoisi");
var productionchoisi=document.querySelector("#production");
var allprod=document.querySelectorAll(".productionanuelle1");
let hauteur=document.getElementById("hauteur");
let energieolien=document.querySelector("#energieolien");
let d=document.querySelector("#diametrechoisi");
let ds=document.querySelectorAll(".diametre1");
var erreur5=document.getElementById("erreur5");
var img=document.getElementById(`${n}`);
for(let i=0;i<6;i++){
     if(imgs[i].id==n){
        if(hauteur.value==parseFloat(hauteurseol[i].innerHTML)){
         console.log("hi");
         document.querySelector("#erreur02").style.display="none";
       if(parseFloat(allprod[i].innerHTML)>=(parseFloat(energieolien.value)*365)){
        console.log("hihi");
        imgs[i].src="teck.jpeg";     
        productionchoisi.value=parseFloat(allprod[i].innerHTML);
        d.value=parseFloat(ds[i].innerHTML);
        puissanceolienchoisi.value=parseFloat(puissancesCretes[i].innerHTML);
        erreur5.style.display="none";
          }
       else {
        console.log("hierr");
          erreur5.style.display="block";
        }
    }
    else 
    document.querySelector("#erreur02").style.display="block";
    }
     else
      imgs[i].src=`${i+1}eolien.png`;
}
}


function choixonuleur(n){
    var imgs=document.querySelectorAll(".divond img");
var puissances=document.querySelectorAll(".puissanceonduleur");
var puissancondchoisi=document.querySelector("#pondchoisi");
var puissanceolienchoisi=document.querySelector("#puissancechoisi");
var nbreolienne=document.getElementById("nbreolienneracres");
var productionchoisi=document.querySelector("#production");
 var besoin=document.querySelector("#besoin");
var img=document.getElementById(`${n}`);
var erreur1=document.getElementById("erreur1");
for(let i=0;i<6;i++){
     if(imgs[i].id==n){
      if(parseFloat(puissances[i].innerHTML)>=parseFloat(puissanceolienchoisi.value)){
        imgs[i].src="teck.jpeg";
        puissancondchoisi.value=parseFloat(puissances[i].innerHTML);
        erreur1.style.display="none";
        nbreolienne.value=Math.ceil((parseFloat(besoin.value)*365)/(parseFloat(productionchoisi.value)*Math.pow(10,3)));
      }
      else{
        erreur1.style.display="block";
      }
      
    }
     else
      imgs[i].src=`${i+1}onduleur.png`;
}
}

function choixonuleur1(n){
    var imgs=document.querySelectorAll(".divond1 img");
var puissances=document.querySelectorAll(".puissanceonduleur1");
var puissancondchoisi=document.querySelector("#pondchoisi");
var puissanceolienchoisi=document.querySelector("#puissancechoisi");
var nbreolienne=document.getElementById("nbreolienneauto");
var productionchoisi=document.querySelector("#production");
 var besoin=document.querySelector("#besoin");
var img=document.getElementById(`${n}`);
var erreur3=document.getElementById("erreur3");
for(let i=0;i<6;i++){
     if(imgs[i].id==n){
      if(parseFloat(puissances[i].innerHTML)>=parseFloat(puissanceolienchoisi.value)){
        imgs[i].src="teck.jpeg";
        puissancondchoisi.value=parseFloat(puissances[i].innerHTML);
        erreur3.style.display="none";
        nbreolienne.value=Math.ceil(parseFloat(besoin.value)/(parseFloat(puissanceolienchoisi.value)*Math.pow(10,3)));
      }
      else{
        erreur3.style.display="block";
      }
      
    }
     else
      imgs[i].src=`${i+1}onduleur.png`;
}
}

function choixregulateur(n){
    let imgs=document.querySelectorAll(".divreg img");
    let preg=document.querySelectorAll(".puissancereg");   
    let treg=document.querySelectorAll(".tensionreg");
    let creg=document.querySelectorAll(".courantreg");
   let erreur4=document.querySelector("#erreur4");
   var puissanceolienchoisi=document.querySelector("#puissancechoisi");   
   var puissanceregchoisi=document.querySelector("#puissanceregchoisi");
   var courantregchoisi=document.querySelector("#courantregchoisi");   
   var tensionregchoisi=document.querySelector("#tensionregchoisi");
    for(let i=0;i<6;i++){
     if(imgs[i].id==n){
             if((parseFloat(preg[i].innerHTML)*Math.pow(10,3))>parseFloat(puissanceolienchoisi.value)){
                puissanceregchoisi.value= parseFloat(preg[i].innerHTML);
                courantregchoisi.value= parseFloat(creg[i].innerHTML);
                tensionregchoisi.value= parseFloat(treg[i].innerHTML);
               erreur4.style.display="none";
                imgs[i].src="teck.jpeg";
             }
             else
             erreur4.style.display="block";
             
     }
     else
     imgs[i].src=`${i+1}reg.png`;
}
}



function choixtopography(){
    let x=document.getElementById("topographies");
    let y=document.querySelectorAll(".coeffalpha");
    let choix=document.getElementById("topographie");
    let alpha=document.getElementById("alpha");
    let haut=document.getElementById("hauteur");
    for(let i=0;i<13;i++){
        if(x.options[i].value==choix.value){
            alpha.value=parseFloat(y[i].value);
        }
    }
}
function choixhauteur(){   
    let alpha=document.getElementById("alpha");
    let haut=document.getElementById("hauteur");
    let vitessemoyenne=document.getElementById("vitessemoyenne");
    let v=6.5*(Math.pow((parseFloat(haut.value)/10),parseFloat(alpha.value)));
    vitessemoyenne.value=parseFloat(v);
   var erreur2=document.getElementById("erreur2");
            console.log(v);
    if(v<4) erreur2.style.display="block";
    else erreur2.style.display="none";
}

function managehauteur(){
    let haut=document.getElementById("hauteur");
    var erreur0=document.getElementById("erreur0");
    var erreur2=document.getElementById("erreur2");
    if(parseInt(haut.value)<6) 
    {
        erreur0.style.display="block";
        erreur2.style.display="block";
    }
    else {
        erreur0.style.display="none";
        erreur2.style.display="none";
    }
}

function myfunction(){
    var x=document.getElementById("simulateur");
    if(x.style.display==="block"){
        x.style.display="none";
    }
    else{
        x.style.display="block";
    }
}
function choixtype(n){
    let type1=document.getElementById("div-racres");
    let type2=document.getElementById("divauto");
document.getElementById("type").innerHTML=n;
if(document.getElementById("type").innerHTML=="Autonome"){
           type2.style.display="block";
           type1.style.display="none";
}
else if(document.getElementById("type").innerHTML=="RaccordeeReseau"){
           type1.style.display="block";
           type2.style.display="none";
}
}
function varbesoins(){
var besoins=document.querySelectorAll("#produit");
 var besoin=document.querySelector("#besoin");
 for(let i=0;i<11;i++)
    besoin.value =parseInt(besoin.value)+parseInt(besoins[i].value);}

function calcptotal(){
var nbrs=document.querySelectorAll("#nombre");
var pms=document.querySelectorAll(".pm");
var pt=document.querySelector("#ptotal");
for(let i=0;i<11;i++)
    pt.value =parseInt(pt.value)+(parseInt(pms[i].innerHTML)*parseInt(nbrs[i].value));
}
function simfunction1(){
    var y=document.getElementById("calcul1");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function simfunction3(){
    var y=document.getElementById("calcul3");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function simfunction2(){
    var y=document.getElementById("calcul2");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function addelement1(){
    var y=document.getElementById("numbers1");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function addelement2(){
    var y=document.getElementById("numbers2");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function addelement3(){
    var y=document.getElementById("numbers3");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function addelement4(){
    var y=document.getElementById("numbers4");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function addelement5(){
    var y=document.getElementById("numbers5");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function addelement6(){
    var y=document.getElementById("numbers6");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function addelement7(){
    var y=document.getElementById("numbers7");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function addelement8(){
    var y=document.getElementById("numbers8");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function addelement9(){
    var y=document.getElementById("numbers9");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function addelement10(){
    var y=document.getElementById("numbers10");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function addelement11(){
    var y=document.getElementById("numbers11");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
 function managinputs1(n){
    var y1=document.querySelector("#numbers1 #nombre");
     var y2=document.querySelector("#numbers1 #heure");
    var y3=document.querySelector("#numbers1 #produit");   
   y3.value=parseInt(y1.value) * parseInt(y2.value) * n;
 }
 function managinputs2(n){
    var y1=document.querySelector("#numbers2 #nombre");
     var y2=document.querySelector("#numbers2 #heure");
    var y3=document.querySelector("#numbers2 #produit");   
   y3.value=parseInt(y1.value) * parseInt(y2.value) *n;
 }
 function managinputs3(n){
    var y1=document.querySelector("#numbers3 #nombre");
     var y2=document.querySelector("#numbers3 #heure");
    var y3=document.querySelector("#numbers3 #produit");   
   y3.value=parseInt(y1.value) * parseInt(y2.value) *n;
 }
 function managinputs4(n){
    var y1=document.querySelector("#numbers4 #nombre");
     var y2=document.querySelector("#numbers4 #heure");
    var y3=document.querySelector("#numbers4 #produit");   
   y3.value=parseInt(y1.value) * parseInt(y2.value)*n;
 }
 function managinputs5(n){
    var y1=document.querySelector("#numbers5 #nombre");
     var y2=document.querySelector("#numbers5 #heure");
    var y3=document.querySelector("#numbers5 #produit");   
   y3.value=parseInt(y1.value) * parseInt(y2.value) *n;
 }
 function managinputs6(n){
    var y1=document.querySelector("#numbers6 #nombre");
     var y2=document.querySelector("#numbers6 #heure");
    var y3=document.querySelector("#numbers6 #produit");   
   y3.value=parseInt(y1.value) * parseInt(y2.value) * n;
 }
 function managinputs7(n){
    var y1=document.querySelector("#numbers7 #nombre");
     var y2=document.querySelector("#numbers7 #heure");
    var y3=document.querySelector("#numbers7 #produit");   
   y3.value=parseInt(y1.value) * parseInt(y2.value) * n;
 }
 function managinputs8(n){
    var y1=document.querySelector("#numbers8 #nombre");
     var y2=document.querySelector("#numbers8 #heure");
    var y3=document.querySelector("#numbers8 #produit");   
   y3.value=parseInt(y1.value) * parseInt(y2.value) * n;
 }
 function managinputs9(n){
    var y1=document.querySelector("#numbers9 #nombre");
     var y2=document.querySelector("#numbers9 #heure");
    var y3=document.querySelector("#numbers9 #produit");   
   y3.value=parseInt(y1.value) * parseInt(y2.value) * n;
 }
 function managinputs10(n){
    var y1=document.querySelector("#numbers10 #nombre");
     var y2=document.querySelector("#numbers10 #heure");
    var y3=document.querySelector("#numbers10 #produit");   
   y3.value=parseInt(y1.value) * parseInt(y2.value) * n;
 }
 function managinputs11(n){
    var y1=document.querySelector("#numbers11 #nombre");
     var y2=document.querySelector("#numbers11 #heure");
    var y3=document.querySelector("#numbers11 #produit");   
   y3.value=parseInt(y1.value) * parseInt(y2.value) * n;
 }
</script>
</html>