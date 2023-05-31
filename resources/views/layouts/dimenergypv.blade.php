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

 
<div class="m-5"style="font-family:Times sans-serif;background-color:white;border-radius:20px; width:auto;height:auto;padding:40px;"><b>
    <p> Dimensionnement d'une installation photovoltaique.<br>
       Le bon dimensionnement d’une installation est une étape essentielle à maitriser.<br>
       Ci-dessous, vous trouverez toutes les étapes pour déterminer vos besoins en énergie solaire.
    </p>
 <ul style=" color:#696969;list-style:none;">
      <li><span class="icon-pin"></span>&nbsp; Calculer ses besoins en électricité.</li> 
      <li><span class="icon-pin"></span>&nbsp; Dimensionnement des panneaux solaires.</li>
      <li><span class="icon-pin"></span>&nbsp; Dimensionnement de l'onduleur.</li> 
      <li><span class="icon-pin"></span>&nbsp; Dimensionnement du régulateur.</li> 
      <li><span class="icon-pin"></span>&nbsp; Dimensionnement des batteries.</li> 
      <li><span class="icon-pin"></span>&nbsp; Dimensionnement des câbles électriques solaires.</li> 
</ul><br>
<h6><strong>Découvrez notre simulateur en ligne pour kit solaire.</strong></h6>
<h6><strong>Calculer votre consommation et déterminez le kit solaire adapté à vos besoins.</strong></h6><br><br>

<h5><a onclick="myfunction()" id="lien1" class="fw-bolder">Voir le simulateur</a></h5>
  
<div id="simulateur">

    <section id="etape">
     <div class="titre">
     <p>&nbsp;&nbsp;Etape 1 | Définissez vos besoins en énergie</p>
     <span class="position-absolute"style="right:150px;cursor:pointer;" onclick="simfunction1()">
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
     <p>&nbsp;&nbsp;Etape 2 | Dimensionnement des panneaux solaires.</p>
     <span class="position-absolute"style="right:150px;cursor:pointer;" onclick="simfunction2()">
     <i class="fa-solid fa-circle"></i>
    </span>
     </div>
     <div id="calcul2">
        <p style="text-align:center;">IDENTIFIER LES PANNEAUX </p>

        <div id="pv" class="container px-4 px-lg-5 text-center" style="display:flex;flex-wrap:wrap;padding:10px;" >

        <div  style="margin:8px;" class="divpn" onclick="choixpanneau(11);">
              <img src="1pn.png" alt="pv1" width=150 id="11" height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement11()">
             <h6  style="text-align:center;margin:5px;"><strong class="puissancepv">75</strong>Wc</h6> 
             <div style="display:none;">
               <p class="vmpp">18</p>
               <p class="impp">4.17</p>
               <p class="vco">22.2</p>
               <p class="icc">4.64</p>
             </div>
           </div>
    
           <div  style="margin:8px;" class="divpn" onclick="choixpanneau(12);">
              <img src="2pn.png" alt="pv2" width=150 height=150 id="12" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement11()">
              <h6  style="text-align:center;margin:5px;"><strong class="puissancepv">80</strong>Wc</h6> 
             <div style="display:none;">
               <p class="vmpp">18</p>
               <p class="impp">4.44</p>
               <p class="vco">21.6</p>
               <p class="icc">5.06</p>
           </div>
        </div>
           <div  style="margin:8px;" class="divpn" onclick="choixpanneau(13);">
              <img src="3pn.png" alt="pv3" width=150 height=150 id="13" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement11()">
              <h6  style="text-align:center;margin:5px;"><strong class="puissancepv">100</strong>Wc</h6> 
             <div style="display:none;">
               <p class="vmpp">18</p>
               <p class="impp">5.56</p>
               <p class="vco">21.6</p>
               <p class="icc">6.32</p>
           </div>
           </div>
           <div  style="margin:8px;" class="divpn" onclick="choixpanneau(14);">
              <img src="4pn.png" alt="pv4" width=150 height=150 id="14" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement11()">
              <h6  style="text-align:center;margin:5px;"><strong class="puissancepv">140</strong>Wc</h6> 
             <div style="display:none;">
               <p class="vmpp">20</p>
               <p class="impp">7.78</p>
               <p class="vco">21.6</p>
               <p class="icc">8.85</p>
           </div>
           </div>
           <div  style="margin:8px;" class="divpn" onclick="choixpanneau(15);">
              <img src="5pn.png" alt="pv5" width=150 height=150 id="15" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement11()">
              <h6  style="text-align:center;margin:5px;"><strong class="puissancepv">250</strong>Wc</h6> 
             <div style="display:none;">
               <p class="vmpp">30</p>
               <p class="impp">8.33</p>
               <p class="vco">36.01</p>
               <p class="icc">9.40</p>
           </div>
           </div>
           <div  style="margin:8px;" class="divpn"  onclick="choixpanneau(16);">
              <img src="6pn.png" alt="pv6" width=150 height=150 id="16" style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" onclick="addelement11()">
              <h6  style="text-align:center;margin:5px;"><strong class="puissancepv">290</strong>Wc</h6> 
             <div style="display:none;">
               <p class="vmpp">36</p>
               <p class="impp">8.06</p>
               <p class="vco">44.10</p>
               <p class="icc">8.56</p>
           </div>
           </div>
        </div>
        <div class="container px-4 px-lg-5 text-center" style="margin:10px auto;">
              le nombre de panneau choisi :  <input type="number" style="cursor:not-allowed;margin:10px;" id="nbpn" value="0" disabled><br>
              la puissance totale du  système : ( en wc) <input type="number" style="cursor:not-allowed;margin:10px;" name="ep" id="ep" value="0" disabled><br>
               <input type="hidden" id="vcochoisi" value="0">
               <input type="hidden" id="iccchoisi" value="0">
               <input type="hidden" id="vmppchoisi" value="0">
               <input type="hidden" id="imppchoisi" value="0">
               <input type="hidden" id="puissancecretechoisi" value="0">
               <button class="btn btn-primary btn-xl" type="submit" style="background-color:#155d74;border:2px solid #155d74;margin:10px;" onclick="simfunction2();simfunction3();" style="margin:10px;">Valider</button>
        </div>
        
     </div>
    </section>

    <section id="etape">
     <div class="titre">
     <p>&nbsp;&nbsp;Etape 3 | Dimentionnement de l'onduleur.</p>
     <span class="position-absolute"style="right:150px;cursor:pointer;" onclick="simfunction3()">
     <i class="fa-solid fa-circle"></i>
    </span>
     </div>
     <div id="calcul3">
     <p style="text-align:center;">CHOISISSEZ VOTRE ONDULEUR</p>
     <div id="onduleur" class="container px-4 px-lg-5 text-center" style="display:flex;flex-wrap:wrap;padding:10px;" >

           <div  style="margin:8px;"  class="divond" onclick="choixonduleur(31);">
              <img src="1ond.png" alt="ond1" id="31" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
               <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tension">200</h6>V &nbsp;<h6 class="courant">4.13</h6>A</div>
               <div style="display:none;" class="pmonduleur" >1500</div>
               <div class="courantmaxond">18</div>
           </div>
    
           <div  style="margin:8px;"  class="divond" onclick="choixonduleur(32);">
              <img src="2ond.png" alt="ond2" id="32" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
              <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tension">230</h6>V &nbsp;<h6 class="courant">3.7</h6>A</div>
              <div style="display:none;" class="pmonduleur" >2000</div>
              <div class="courantmaxond">20</div>
           </div>

           <div  style="margin:8px;"  class="divond" onclick="choixonduleur(33);">
              <img src="3ond.png" alt="ond3" id="33" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
              <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tension">230</h6>V &nbsp;<h6 class="courant">9.56</h6>A</div>
              <div style="display:none;" class="pmonduleur" >3500</div>
              <div class="courantmaxond">24</div>
           </div>

           <div  style="margin:8px;"  class="divond" onclick="choixonduleur(34);">
              <img src="4ond.png" alt="ond4" id="34" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
              <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tension">230</h6>V &nbsp;<h6 class="courant">3.26</h6>A</div>
              <div style="display:none;" class="pmonduleur">10000</div>
              <div class="courantmaxond">24</div>
           </div>

           <div  style="margin:8px;"  class="divond" onclick="choixonduleur(35);">
              <img src="5ond.png" alt="ond5" id="35" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
              <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tension">240</h6>V &nbsp;<h6 class="courant">8.33</h6>A</div>
              <div style="display:none;" class="pmonduleur" >50000</div>
              <div class="courantmaxond">30</div>
           </div>

           <div  style="margin:8px;"  class="divond" onclick="choixonduleur(36);">
              <img src="6ond.png" alt="ond6" id="36" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
              <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tension">200</h6>V &nbsp;<h6 class="courant">10</h6>A</div>
              <div style="display:none;" class="pmonduleur" >6500</div>
              <div class="courantmaxond">35</div>
            </div>
            <input type="hidden" name="pondchoisie" value="0" id="puissanceonduleurchoisie">
        </div>
        <div class="container px-4 px-lg-5 text-center">
            <h6><strong>Votre installation est-elle :</strong></h6>
            <div>
            <button class="btn btn-primary btn-xl" type="submit"  style="margin:10px;background-color:#ecb807; border:2px solid #ecb807;" onclick='choixtype("Autonome");'>Autonome</button>
            <button class="btn btn-primary btn-xl" type="submit"  style="margin:10px;background-color:#ecb807; border:2px solid #ecb807;" onclick='choixtype("RaccordeeReseau");'>Raccordée au réseau</button><br><br>
  
            <textarea id="type" style="display:none">type</textarea>
            <div class="container px-4 px-lg-5 text-center" id="erreur1" style="display:none;background-color:red;color:white;border-radius:20px;border:2px solid light-blue;width:45%;padding:13px;margin-bottom:8px;"><b>Impossible de choisir cet onduleur car sa puissance maximale est inferieure à la puissance totale de votre installation.</b></div>
            <button class="btn btn-primary btn-xl" type="submit"  style="margin:10px;background-color:#155d74;border:2px solid #155d74;" onclick="simfunction3();simfunctionchoix();">Valider</button>
            </div>
        </div>
     </div>
    </section>

    <section id="etape">
     <div class="titre">
     <p>&nbsp;&nbsp;Etape 4 | Dimentionnement du régulateur.</p>
     <span class="position-absolute"  style="right:150px;cursor:pointer;" onclick="simfunction4()">
     <i class="fa-solid fa-circle"></i>
    </span>
     </div>
     <div id="calcul4">
     <p style="text-align:center;">PRECISEZ VOTRE REGULATEUR</p>

     <div id="regulateur" class="container px-4 px-lg-5 text-center" style="display:flex;flex-wrap:wrap;padding:10px;" >

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(41);">
   <img src="1reg.png" alt="pv1" id="41" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">12</h6>V &nbsp;<h6 class="courantreg">24</h6>A</div>
   <div style="display:none;" class="umreg" >450</div>
   <div style="display:none;" class="imreg" >200</div>
</div>

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(42);">
   <img src="2reg.png" alt="pv2" id="42" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">40</h6>V &nbsp;<h6 class="courantreg">60</h6>A</div>
   <div style="display:none;" class="umreg" >150</div>
   <div style="display:none;" class="imreg" >80</div>
</div>

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(43);">
   <img src="3reg.png" alt="pv3" id="43" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">24</h6>V &nbsp;<h6 class="courantreg">30</h6>A</div>
   <div style="display:none;" class="umreg" >32</div>
   <div style="display:none;" class="imreg" >38</div>
</div>

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(44);">
   <img src="4reg.png" alt="pv4" id="44" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">100</h6>V &nbsp;<h6 class="courantreg">50</h6>A</div>
   <div style="display:none;" class="umreg" >108</div>
   <div style="display:none;" class="imreg" >58</div>
</div>

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(45);">
   <img src="5reg.png" alt="pv5" id="45" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">60</h6>V &nbsp;<h6 class="courantreg">30</h6>A</div>
   <div style="display:none;" class="umreg" >68</div>
   <div style="display:none;" class="imreg" >38</div>
</div>

<div  style="margin:8px;" class="divreg" onclick="choixregulateur(46);">
   <img src="6reg.png" alt="pv6" id="46" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionreg">12</h6>V &nbsp;<h6 class="courantreg">10</h6>A</div>
   <div style="display:none;" class="umreg" >20</div>
   <div style="display:none;" class="imreg" >18</div>
</div>

</div>

<div class="container px-4 px-lg-5 text-center">
   <input type="hidden" id="nbps" value="0">
   <input type="hidden" id="nbpp" value="0">
   <input type="hidden" id="iregmchoisi" value="0">
   <input type="hidden" id="uregmchoisi" value="0">
   <div class="container px-4 px-lg-5 text-center" id="erreur2" style="display:none;background-color:red;color:white;border-radius:20px;border:2px solid light-blue;width:45%;padding:13px;margin-bottom:8px;"><b>Le regulateur choisi n'est pas compatible avec votre choix .</b></div>
<button class="btn btn-primary btn-xl" type="submit"  style="margin:10px;background-color:#155d74;border:2px solid #155d74;" onclick="simfunction4();simfunction5();">Valider</button>            
</div>

     </div>
    </section>

    <section id="etape">
     <div class="titre">
     <p>&nbsp;&nbsp;Etape 5 | Dimentionnement des batteries.</p>
     <span class="position-absolute"  style="right:150px;cursor:pointer;" onclick="simfunction5()">
     <i class="fa-solid fa-circle"></i>
    </span>
     </div>
     <div id="calcul5">
     <p style="text-align:center;">PRECISEZ VOTRE BATTERIES</p>

     <div id="battrie" class="container px-4 px-lg-5 text-center" style="display:flex;flex-wrap:wrap;padding:10px;" >

<div  style="margin:8px;" class="divbat" onclick="choixbatterie(51,150,12);">
   <img src="1bat.png" alt="pv1" id="51" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">12</h6>V &nbsp;<h6 class="capacitebat">150</h6>Ah</div>
</div>

<div  style="margin:8px;" class="divbat" onclick="choixbatterie(52,200,12);">
   <img src="2bat.png" alt="pv2" id="52" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">12</h6>V &nbsp;<h6 class="capacitebat">200</h6>Ah</div>
</div>

<div  style="margin:8px;" class="divbat" onclick="choixbatterie(53,230,24);">
   <img src="3bat.png" alt="pv3"id="53"  width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">24</h6>V &nbsp;<h6 class="capacitebat">230</h6>Ah</div>
</div>

<div  style="margin:8px;" class="divbat" onclick="choixbatterie(54,242,36);">
   <img src="4bat.png" alt="pv4" id="54" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">36</h6>V &nbsp;<h6 class="capacitebat">242</h6>Ah</div>
</div>

<div  style="margin:8px;" class="divbat" onclick="choixbatterie(55,120,12);">
   <img src="5bat.png" alt="pv5" id="55" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">12</h6>V &nbsp;<h6 class="capacitebat">120</h6>Ah</div>
</div>

<div  style="margin:8px;" class="divbat" onclick="choixbatterie(56,100,24);">
   <img src="6bat.png" alt="pv6" id="56" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <div style="text-align:center;margin:5px;display:flex;padding-left:30px;"><h6 class="tensionbat">24</h6>V &nbsp;<h6 class="capacitebat">100</h6>Ah</div>
</div>
</div>

<div class="container px-4 px-lg-5 text-center">
    <input type="hidden" id="capacitesys" value="0">
    <input type="hidden" id="capacitebatchoisi" value="0">
    <input type="hidden" id="nbbats" value="0">
    <input type="hidden" id="nbbatp" value="0">
    <input type="hidden" id="nbbat" value="0">
    <input type="hidden" id="ubatchoisi" value="0">
<button class="btn btn-primary btn-xl" type="submit"  style="margin:10px;background-color:#155d74;border:2px solid #155d74;" onclick="simfunction5();simfunction6();">Valider</button>            
</div>

     </div>
    </section>

    <section id="etape">
     <div class="titre">
     <p>&nbsp;&nbsp;Etape 6 | Dimentionnement des cables.</p>
     <span class="position-absolute"  style="right:150px;cursor:pointer;" onclick="simfunction6()">
     <i class="fa-solid fa-circle"></i>
    </span>
     </div>
     <div id="calcul6">
     <p style="text-align:center;">IDENTIFICATION DES CABLES</p>

     <div id="cable" class="container px-4 px-lg-5 text-center" style="display:flex;flex-wrap:wrap;padding:10px;" >

<div  style="margin:8px;" class="devcab" onclick="choixcable(61);">
   <img src="1cab.png" alt="pv1" id="61" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <h6 class="nommetal" style="text-align:center;margin:5px auto;">Or</h6>
   <input type="hidden" class="resistivite" value="2.71">
</div>

<div  style="margin:8px;" class="devcab" onclick="choixcable(62);">
   <img src="2cab.png" alt="pv2" id="62" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <h6 class="nommetal" style="text-align:center;margin:5px auto;">Argent</h6>
   <input type="hidden" class="resistivite" value="1.6">
</div>

<div  style="margin:8px;" class="devcab" onclick="choixcable(63);">
   <img src="3cab.png" alt="pv3" id="63" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <h6 class="nommetal" style="text-align:center;margin:5px auto;">Cuivre</h6>
   <input type="hidden" class="resistivite" value="1.7">
</div>

<div  style="margin:8px;" class="devcab" onclick="choixcable(64);">
   <img src="4cab.png" alt="pv4" id="64" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <h6 class="nommetal" style="text-align:center;margin:5px auto;">Aluminium</h6>
   <input type="hidden" class="resistivite" value="2.7">
</div>

<div  style="margin:8px;" class="devcab" onclick="choixcable(65);">
   <img src="5cab.png" alt="pv1" id="65" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;">
   <h6 class="nommetal" style="text-align:center;margin:5px auto;">Fer</h6>
   <input type="hidden" class="resistivite" value="10">
</div>

<div  style="margin:8px;" class="devcab" onclick="choixcable(66);">
   <img src="6cab.png" alt="pv2" id="66" width=150 height=150 style="border-radius:20px;box-shadow:2px 2px grey;cursor:pointer;" >
   <h6 class="nommetal" style="text-align:center;margin:5px auto;">Zinc</h6>
   <input type="hidden" class="resistivite" value="6">
</div>

</div>


<div class="container px-4 px-lg-5 text-center">
    <input type="hidden" id="resestivitechoisi" value="0" >
    <div id="CD">
       <input type="hidden" id="sectionpnreg" value="0">
       <input type="hidden" id="sectionregbat" value="0">
       <input type="hidden" id="sectionbatond" value="0">
    </div>
    <div id="Ac">
       <input type="hidden" id="sectionAc" value="0"> 
    </div>
    
<button class="btn btn-primary btn-xl" type="submit"  style="margin:10px;background-color:#155d74;border:2px solid #155d74;" onclick="simfunction6();simfunctionrap();remplirRap();">Valider</button>            
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
        <h4><b><span class="icon-pin"></span>&nbsp; Coordonnées du projet : </b></h4>
        <p><span class="icon-paper-clip"></span>&nbsp;Ville : Essaouira<br>
        <span class="icon-paper-clip"></span>&nbsp;Latitude : 30° <br>
        <span class="icon-paper-clip"></span>&nbsp;Orientation : Plein-sud <br>
        <span class="icon-paper-clip"></span>&nbsp;Inclinaison : 30° <br>
        <span class="icon-paper-clip"></span>&nbsp;Irradiations : 6.63 kw/m²/j <br>
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
        <h4><b><span class="icon-pin"></span>&nbsp; Apropos du projet : </b></h4>
         <h6><span class="icon-check"></span>&nbsp;  Panneaux solaires photovoltaîque :<h6>
             <p><span class="icon-paper-clip"></span>&nbsp;Type : <b id="typepn"></b></p>
             <p><span class="icon-paper-clip"></span>&nbsp;Puissance crête : <b id="puissancecreterap"></b>WC</p>
             <p><span class="icon-paper-clip"></span>&nbsp;Cractéristiques :</p><br>
         <table id="tabpanneau" style="margin:auto;">
            <tr>
                <th>Puissance crête du système (WC)</th>
                <th>Nombre de panneaux </th>
                <th>Nombre de paneaux en série </th>
                <th>Nombre de paneaux en parallèle </th>
            </tr>
            
        </table><br>
        <h6><span class="icon-paper-clip"></span>&nbsp;Nombre de panneaux réel: <b id="nbrpnreel"></b>&nbsp;&nbsp;panneaux</h6><br>
        <h6><span class="icon-check"></span>&nbsp; Onduleur :<h6>
            <p><span class="icon-paper-clip"></span>&nbsp; Caractéristiques : </p><br>
            <table id="tabonduleur" style="margin:auto;">
               <tr>
                   <th>Puissance maximale (W) </th>
                   <th>Courant (A)</th>
                   <th>Tension (V)</th>
               </tr>
            </table><br>
     <div id="divisiontype" style="display:none;">
        <h6><span class="icon-check"></span>&nbsp;Regulateur :<h6>
         <p><span class="icon-paper-clip"></span>&nbsp;Caractéristiques : </p><br>
         <table id="tabregulateur" style="margin:auto;">
            <tr>
                  <th>Courant (A)</th>
                   <th>Tension (V)</th>
            </tr>
                  
         </table><br>
         <h6><span class="icon-check"></span>&nbsp;Batterie :<h6>
         <p><span class="icon-paper-clip"></span>&nbsp;Caractéristiques : </p><br>
         <table id="tabbatterie" style="margin:auto;">
           <tr>
               <th>Capacité (AH)</th>
               <th>Tension (V)</th>
               <th>Nombre de batteries</th>
               <th>Nombre de batteries en série</th>
               <th>Nombre de batteries en parallèle</th>
           </tr>
         </table><br>
         <h6><span class="icon-check"></span>&nbsp;Cables :<h6>
         <p><span class="icon-paper-clip"></span>&nbsp;Caractéristiques : </p><br>
         <table id="tabcables1" style="margin:auto;">
         <tr>
             <th>Cable</th>
             <th>Matériel</th>
             <th>Section (mm²)</th>
         </tr>
         </table><br>
     </div>
     <div id="divtabcables2" style="display:none;">
         <h6><span class="icon-check"></span>&nbsp;Cables :<h6>
         <p><span class="icon-paper-clip"></span>&nbsp;Caractéristiques : </p><br>
         <table id="tabcables2" style="margin:auto;">
         <tr>
             <th>Cable</th>
             <th>Matériel</th>
             <th>Section (mm²)</th>
         </tr>
         </table><br>
     </div>
     <button id="finishButton" class="btn btn-sm btn-primary mx-auto"onclick="finish();">Terminer</button> <br><br>
     <a href="#" id="printPageButton" class="btn btn-sm btn- primary mb-3" class="btn btn-md btn-primary mr-2 mb-2" onclick="PDF();"><i class="fas fa-print"></i></a><br><br>
      </div>
     </div>
     </section>
</div>
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
function choixtype(n){
document.getElementById("type").innerHTML=n;

}

function simfunctionchoix(){
    if(document.getElementById("type").innerHTML=="Autonome"){
        document.getElementById("calcul4").style.display="block";
    }
    else if(document.getElementById("type").innerHTML=="RaccordeeReseau"){
        document.getElementById("calcul6").style.display="block";
    }
}

function choixpanneau(n){
var imgs=document.querySelectorAll(".divpn img");
var puissancesCretes=document.querySelectorAll(".puissancepv");
var puissancepnchoisi=document.querySelector("#puissancecretechoisi");
var vcochoisi=document.querySelector("#vcochoisi");
var iccchoisi=document.querySelector("#iccchoisi");
var vmppchoisi=document.querySelector("#vmppchoisi");
var imppchoisi=document.querySelector("#imppchoisi");
var allvco=document.querySelectorAll(".vco");
var allicc=document.querySelectorAll(".icc");
var allvmpp=document.querySelectorAll(".vmpp");
var allimpp=document.querySelectorAll(".impp");
var nbpn=document.querySelector("#nbpn");
var pcsys=document.querySelector("#ep");
var conse=document.querySelector("#besoin");
var img=document.getElementById(`${n}`);
for(let i=0;i<6;i++){
     if(imgs[i].id==n){
         console.log(allicc[i].innerHTML);
         console.log(allvco[i].innerHTML);
       imgs[i].src="teck.jpeg";
       pcsys.value=(parseInt(conse.value)*1000)/6630*0.65;
       nbpn.value=Math.ceil((parseInt(pcsys.value)/parseInt(puissancesCretes[i].innerHTML)));      
       iccchoisi.value=allicc[i].innerHTML;
       vcochoisi.value=allvco[i].innerHTML;
       imppchoisi.value=allimpp[i].innerHTML;
       vmppchoisi.value=allvmpp[i].innerHTML;
       puissancepnchoisi.value=parseInt(puissancesCretes[i].innerHTML);
    }
     else
      imgs[i].src=`${i+1}pn.png`;
}
}

function choixonduleur(n){
 let imgs=document.querySelectorAll(".divond img");
 let erreur1=document.querySelector("#erreur1");
 let p=document.querySelectorAll(".pmonduleur");
 let puissancefinale=document.getElementById("puissanceonduleurchoisie");
 let pt=document.querySelector("#ptotal");
 for(let i=0;i<6;i++){
     if(imgs[i].id==n){
         if(parseInt(p[i].innerHTML)<parseInt(pt.value))
          erreur1.style.display="block";
        else{
            erreur1.style.display="none";
          imgs[i].src="teck.jpeg";
          puissancefinale.value=parseInt(p[i].innerHTML);}
     }
     else
     imgs[i].src=`${i+1}ond.png`;
    }
}

function choixregulateur(n){
    let imgs=document.querySelectorAll(".divreg img");
    let nbps=document.querySelector("#nbps");
    let nbpp=document.querySelector("#nbpp");
    let nbpn=document.querySelector("#nbpn");
    let puissancefinale=document.getElementById("puissanceonduleurchoisie");
    let imc=document.querySelector("#iregmchoisi");
    let umc=document.querySelector("#uregmchoisi");
    let p=document.querySelectorAll(".pmonduleur");
    let im=document.querySelectorAll(".imreg");
    let um=document.querySelectorAll(".umreg");
    var vcochoisi=document.querySelector("#vcochoisi");
   var iccchoisi=document.querySelector("#iccchoisi");
   let erreur2=document.querySelector("#erreur2");
    for(let i=0;i<6;i++){
     if(imgs[i].id==n){
             imc.value=im[i].innerHTML;
             umc.value=um[i].innerHTML;
             nbps.value=(parseFloat(umc.value)/parseFloat(vcochoisi.value));
             nbpp.value=(parseInt(nbpn.value)/parseInt(nbps.value));
             console.log(nbpn.value);
             console.log(nbpp.value);
             if(parseInt(nbps.value)*parseInt(vcochoisi.value)<= parseInt(umc.value) && parseInt(nbpp.value)*parseInt(iccchoisi.value)<= parseInt(imc.value)){
               erreur2.style.display="none";
                imgs[i].src="teck.jpeg";
             }
             else
             erreur2.style.display="block";
             
     }
     else
     imgs[i].src=`${i+1}reg.png`;
}
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
    document.getElementById("capacitebatchoisi").value=capacite;
    let Usys=0;
    if(parseInt(pt.value)<500) Usys=12;
    else if(parseInt(pt.value)>500 && parseInt(pt.value)<2000) Usys=24;
    else if(parseInt(pt.value)>2000) Usys=48;

    let capaciteSys=(parseFloat(conse.value)*3)/(0.85*Usys);
     Cs.value=parseFloat(capaciteSys);

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
     imgs[i].src=`${i+1}bat.png`;
    }
}

function choixcable(n){
 let imgs=document.querySelectorAll(".devcab img");
 var vmppchoisi=document.querySelector("#vmppchoisi");
 var imppchoisi=document.querySelector("#imppchoisi");
 let iccs=document.querySelectorAll(".icc");
 let p=document.querySelectorAll(".pmonduleur");
 let tension=document.querySelectorAll(".tension");
 let courant=document.querySelectorAll(".courant");
 let courantmaxond=document.querySelectorAll(".courantmaxond");
 let nbps=document.querySelector("#nbps");
 let nbpp=document.querySelector("#nbpp");
 let nbpn=document.querySelector("#nbpn");
 let puissancefinale=document.getElementById("puissanceonduleurchoisie");
 let ubchoisi=document.querySelector("#ubatchoisi");
 let resistivites=document.querySelectorAll(".resistivite");
 let resestivitechoisi=document.querySelector("#resestivitechoisi");
 let sectionpnreg=document.querySelector("#sectionpnreg");
 let sectionregbat=document.querySelector("#sectionregbat");
 let sectionbatond=document.querySelector("#sectionbatond");
 let sectionAc=document.querySelector("#sectionAc");
 for(let i=0;i<6;i++){
     if(imgs[i].id==n){
        resestivitechoisi.value=parseFloat(resistivites[i].value);
        imgs[i].src="teck.jpeg";
        if(document.getElementById("type").innerHTML=="Autonome"){
            document.getElementById("divtabcables2").style.display="none";            
            document.getElementById("divisiontype").style.display="block";
              let imax=parseInt(imppchoisi.value)*parseInt(nbpp.value);
              let vmax=parseInt(vmppchoisi.value)*parseInt(nbps.value);
              let imax3=parseInt(p[i].innerHTML)/48;
              sectionpnreg.value=Math.round(((2*parseFloat(resestivitechoisi.value)*Math.pow(10,-8)*8*imax)/(0.03*vmax))*Math.pow(10,6));
              sectionregbat.value=Math.round(((2*parseFloat(resestivitechoisi.value)*Math.pow(10,-8)*3*imax)/(0.03*parseInt(ubchoisi.value)))*Math.pow(10,6));
              sectionbatond.value=Math.round(((2*parseFloat(resestivitechoisi.value)*Math.pow(10,-8)*3*imax3)/(0.03*parseInt(tension[i].innerHTML)))*Math.pow(10,6));
              if(sectionpnreg.value<1) sectionpnreg.value=1;
              if(sectionregbat.value<1) sectionregbat.value=1;
              if(sectionbatond.value<1) sectionbatond.value=1;
              console.log(sectionpnreg.value);
              console.log(sectionregbat.value);
              console.log(sectionbatond.value);
        }
        else if(document.getElementById("type").innerHTML=="RaccordeeReseau"){
            document.getElementById("divisiontype").style.display="none";         
            document.getElementById("divtabcables2").style.display="block"; 
            for(let j=0;j<6;j++){
               if(parseInt(p[j].innerHTML)==parseInt(puissancefinale.value)){
                 nbpp.value=((parseInt(courantmaxond[j].innerHTML))/(parseInt(iccs[j].innerHTML)*1.25));
                 console.log(nbpp.value);
                   nbps.value=parseInt(nbpn.value)/parseInt(nbpp.value);
    }
    }
        let imax=parseInt(imppchoisi.value)*parseInt(nbpp.value);
              let vmax=parseInt(vmppchoisi.value)*parseInt(nbps.value);
              let imax3=parseInt(p[i].innerHTML)/48;
              console.log("hii");
              console.log(resestivitechoisi.value);
              console.log(courantmaxond[i].innerHTML);
              console.log("bye");
              sectionbatond.value=Math.round(((2*parseFloat(resestivitechoisi.value)*Math.pow(10,-8)*3*imax3)/(0.03*parseInt(tension[i].innerHTML)))*Math.pow(10,6));
              sectionAc.value=Math.round(2*((parseFloat(resestivitechoisi.value)*Math.pow(10,-8)*5*parseInt(courantmaxond[i].innerHTML))/(0.03*230))*Math.pow(10,6));
              console.log(sectionAc.value);
              if(sectionbatond.value<1) sectionbatond.value=1;
              if(sectionAc.value<1) sectionAc.value=1;
            }     
     }
     else
     imgs[i].src=`${i+1}cab.png`;
    }
}

function remplirRap(){
 let table1=document.getElementById("tabequipements");
 let tensiononduleur=document.querySelectorAll(".tension");
 let courantonduleur=document.querySelectorAll(".courant");
 let p=document.querySelectorAll(".pmonduleur");
 let puissancefinale=document.getElementById("puissanceonduleurchoisie");
 let table2=document.getElementById("tabpanneau");
 let table3=document.getElementById("tabonduleur");
 let table4=document.getElementById("tabregulateur");
 let table5=document.getElementById("tabbatterie");
 let table6=document.getElementById("tabcables1");
 let table7=document.getElementById("tabcables2");
 let puissancesnominales=document.querySelectorAll(".pm");
 let nombreequipements=document.querySelectorAll("#nombre");
 let heuredetravail=document.querySelectorAll("#heure");
 let energieconsomee=document.querySelectorAll("#produit");
 let consomationtotal=document.querySelector("#besoin");
 let besrap=document.querySelector("#rapcons");
 var nbpn=document.querySelector("#nbpn");
 var nbps=document.querySelector("#nbps");
 var nbpp=document.querySelector("#nbpp");
 var vcochoisi=document.querySelector("#vcochoisi");
 var iccchoisi=document.querySelector("#iccchoisi");
 var vmppchoisi=document.querySelector("#vmppchoisi");
 var imppchoisi=document.querySelector("#imppchoisi");
 var pcsys=document.querySelector("#ep");
 let typn=document.querySelector("#typepn");
 let puissancecreterap=document.querySelector("#puissancecreterap");
 let imc=document.querySelector("#iregmchoisi");
 let umc=document.querySelector("#uregmchoisi"); 
 let ubchoisi=document.querySelector("#ubatchoisi");
 let nbbats=document.querySelector("#nbbats");
 let nbbatp=document.querySelector("#nbbatp");
 let nbbat=document.querySelector("#nbbat");
 let capacitebatchoisi=document.getElementById("capacitebatchoisi");
 let resestivitechoisi=document.querySelector("#resestivitechoisi");
 let resistivites=document.querySelectorAll(".resistivite");
 let nommetal=document.querySelectorAll(".nommetal");
 let sectionpnreg=document.getElementById("sectionpnreg");
 let sectionregbat=document.getElementById("sectionregbat");
 let sectionbatond=document.getElementById("sectionbatond");
 let sectionAc=document.getElementById("sectionAc");
 let nomsequipements=document.querySelectorAll(".nomEquipement");
 let nbrpnreel=document.querySelector("#nbrpnreel");
 var puissancepnchoisi=document.querySelector("#puissancecretechoisi");
 let puissanceCrete=parseInt(pcsys.value)/parseInt(nbpn.value);
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
    puissancecreterap.innerHTML=parseInt(puissancepnchoisi.value);
    typn.innerHTML="Polycristalin";
    let roww= document.createElement('tr');
    let roww_data1= document.createElement('td');
    let roww_data2= document.createElement('td');
    let roww_data3= document.createElement('td');
    let roww_data4= document.createElement('td');
    roww_data1.innerHTML =parseInt(pcsys.value);
    roww_data2.innerHTML =parseFloat(nbpn.value);
    roww_data3.innerHTML =Math.round(parseFloat(nbps.value));
    roww_data4.innerHTML =Math.round(parseFloat(nbpp.value));
    roww.appendChild(roww_data1);
    roww.appendChild(roww_data2);
    roww.appendChild(roww_data3);
    roww.appendChild(roww_data4);
    table2.appendChild(roww);
    nbrpnreel.innerHTML=parseInt( roww_data3.innerHTML)*parseInt(roww_data4.innerHTML);
    /*    table 3*/
    let roww2= document.createElement('tr');
    let roww2_data1= document.createElement('td');
    let roww2_data2= document.createElement('td');
    let roww2_data3= document.createElement('td');
for(let i=0;i<6;i++){
    if(p[i].innerHTML==parseInt(puissancefinale.value)){
    roww2_data1.innerHTML =parseInt(puissancefinale.value);
    roww2_data2.innerHTML =courantonduleur[i].innerHTML;
    roww2_data3.innerHTML =tensiononduleur[i].innerHTML;
    roww2.appendChild(roww2_data1);
    roww2.appendChild(roww2_data2);
    roww2.appendChild(roww2_data3);
    table3.appendChild(roww2);        
    }
}
/* regulateur*/ 
  let row3= document.createElement('tr');
    let row3_data1= document.createElement('td');
    let row3_data2= document.createElement('td');
    row3_data1.innerHTML=parseInt(imc.value);
    row3_data2.innerHTML=parseInt(umc.value);
    row3.appendChild(row3_data1);
    row3.appendChild(row3_data2);
    table4.appendChild(row3); 
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
    table5.appendChild(row4); 

    /* cable1*/

    //ligne1

    let row5= document.createElement('tr');
    let row5_data1= document.createElement('td');
    let row5_data2= document.createElement('td');
    let row5_data3= document.createElement('td');
    row5_data1.innerHTML="Cable 1";
    for(let i=0;i<6;i++){
        if(parseFloat(resistivites[i].value)==parseFloat(resestivitechoisi.value)){
            row5_data2.innerHTML=nommetal[i].innerHTML;
        }
    }   
    row5_data3.innerHTML=parseFloat(sectionpnreg.value);
    row5.appendChild(row5_data1);
    row5.appendChild(row5_data2);
    row5.appendChild(row5_data3);
    //ligne2
    let row6= document.createElement('tr');
    let row6_data1= document.createElement('td');
    let row6_data2= document.createElement('td');
    let row6_data3= document.createElement('td');
    row6_data1.innerHTML="Cable 2 ";
    for(let i=0;i<6;i++){
        if(parseFloat(resistivites[i].value)==parseFloat(resestivitechoisi.value)){
            row6_data2.innerHTML=nommetal[i].innerHTML;
        }
    }   
    row6_data3.innerHTML=parseFloat(sectionregbat.value);
    row6.appendChild(row6_data1);
    row6.appendChild(row6_data2);
    row6.appendChild(row6_data3);

    //ligne 3

    let row7= document.createElement('tr');
    let row7_data1= document.createElement('td');
    let row7_data2= document.createElement('td');
    let row7_data3= document.createElement('td');
    row7_data1.innerHTML="Cable 3 ";
    for(let i=0;i<6;i++){
        if(parseFloat(resistivites[i].value)==parseFloat(resestivitechoisi.value)){
            row7_data2.innerHTML=nommetal[i].innerHTML;
        }
    }   
    row7_data3.innerHTML=parseFloat(sectionbatond.value);
    row7.appendChild(row7_data1);
    row7.appendChild(row7_data2);
    row7.appendChild(row7_data3);

    table6.appendChild(row5);
    table6.appendChild(row6);
    table6.appendChild(row7);

    /* cable2*/

    //ligne1
    
    let row8= document.createElement('tr');
    let row8_data1= document.createElement('td');
    let row8_data2= document.createElement('td');
    let row8_data3= document.createElement('td');
    row8_data1.innerHTML="Cable 1 ";
    for(let i=0;i<6;i++){
        if(parseFloat(resistivites[i].value)==parseFloat(resestivitechoisi.value)){
            row8_data2.innerHTML=nommetal[i].innerHTML;
        }
    }   
    row8_data3.innerHTML=parseFloat(sectionAc.value);
    row8.appendChild(row8_data1);
    row8.appendChild(row8_data2);
    row8.appendChild(row8_data3);
    //ligne2
    let row9= document.createElement('tr');
    let row9_data1= document.createElement('td');
    let row9_data2= document.createElement('td');
    let row9_data3= document.createElement('td');
    row9_data1.innerHTML="Cable 2 ";
    for(let i=0;i<6;i++){
        if(parseFloat(resistivites[i].value)==parseFloat(resestivitechoisi.value)){
            row9_data2.innerHTML=nommetal[i].innerHTML;
        }
    }   
    row9_data3.innerHTML=parseFloat(sectionAc.value);
    row9.appendChild(row9_data1);
    row9.appendChild(row9_data2);
    row9.appendChild(row9_data3);

    //ligne 3

    let row10= document.createElement('tr');
    let row10_data1= document.createElement('td');
    let row10_data2= document.createElement('td');
    let row10_data3= document.createElement('td');
    row10_data1.innerHTML="Cable 3 ";
    for(let i=0;i<6;i++){
        if(parseFloat(resistivites[i].value)==parseFloat(resestivitechoisi.value)){
            row10_data2.innerHTML=nommetal[i].innerHTML;
        }
    }   
    row10_data3.innerHTML=parseFloat(sectionAc.value);
    row10.appendChild(row10_data1);
    row10.appendChild(row10_data2);
    row10.appendChild(row10_data3);
    table7.appendChild(row8);
    table7.appendChild(row9);
    table7.appendChild(row10);

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

function myfunction(){
    var x=document.getElementById("simulateur");
    if(x.style.display==="block"){
        x.style.display="none";
    }
    else{
        x.style.display="block";
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
function simfunction1(){
    var y=document.getElementById("calcul1");
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

function simfunction3(){
    var y=document.getElementById("calcul3");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}

function simfunction4(){
    var y=document.getElementById("calcul4");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}

function simfunction5(){
    var y=document.getElementById("calcul5");
    if(y.style.display==="block"){
        y.style.display="none";
    }
    else{
        y.style.display="block";
    }
}
function simfunction6(){
    var y=document.getElementById("calcul6");
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