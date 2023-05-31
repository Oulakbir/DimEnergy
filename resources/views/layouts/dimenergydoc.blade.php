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
</head>
<style>
  body{
    background-color:#e7e7e7;
  font-family:Times sans-serif;
  }
#simulateur{
    padding:5px; 
    display:none;
    background-color:#F5F5F5;
    margin:40px;
}
p{
  weight:bolder;
  font-size:23px;
}
h5{
  color:#7b7b7b;
}
#lien1{
    cursor: pointer;
    color:#6495ed;
    text-decoration:none;
}
h4{
  color:#0f377e;
  font-size:30px;
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

table {
border: medium solid #6495ed;
border-collapse: collapse;
}
th {
font-family: monospace;
border: thin solid #6495ed;
padding: 5px;
background-color: #D0E3FA;
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
img{
  border-radius:20px;
  box-shadow:2px 2px grey;
  margin:20px;
}
ul{
  list-style:none;
}
ul li{
  color:green;
  weight:bolder;
  font-size:20px;
}
</style>
<body> 
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
        <a class="nav-link" href="{{route('dimenergydoc')}}">A propos des PVs</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('dimenergydoc2')}}">A propos des aérogénerateurs</a>
    </li>

</ul>
</div>

</nav>

    </div>
</section>

<section class="container px-4 px-lg-5 text-center">
  <br><br>
  <h1>COMMENT BIEN FAIRE SON DIMENSIONNEMENT DE PANNEAUX SOLAIRES ?</h1><br>
  <hr>
  <h5>Sommaire</h5>
  <ul>
    <li>Dimensionnement panneau solaire : comment comprendre son habitation ?</li>
    <li>Dimensionnement panneau solaire : comment choisir le kit solaire adapté à sa consommation ?</li>
    <li>Dimensionnement panneau solaire : ce qu'il faut retenir </li>  
  </ul>
  <hr>
  <br>
  <img src="img3.jpg" alt="panneau solaire">
  <div id="details">
  <p>Depuis une dizaine d’années en France, on remarque une importante augmentation de particuliers souhaitant produire leur propre énergie solaire. 

Ce choix peut être motivé par le fait de vouloir réaliser des économies, produire une énergie propre et verte ou encore investir dans un projet d’avenir. 

Un projet de cette envergure se doit d’être réfléchi et préparé à l’avance. Vous devez donc tout d’abord réaliser le dimensionnement de vos panneaux solaires.

Mais alors, qu’est-ce que le dimensionnement de panneau solaire ? Ce terme renvoie tout simplement à l’évaluation de votre consommation électrique et ainsi, choisir le kit panneau solaire qui répondra le plus à vos besoins énergétiques. 

Le but du dimensionnement de panneaux solaires est d’avoir une production d’électricité la plus efficace pour répondre à votre consommation. Il s’agit donc de trouver un juste milieu entre votre production et votre consommation. 

Vous souhaitez dimensionner vos panneaux solaires mais vous ne savez pas exactement comment faire ? 

À travers cet article, vous allez comprendre quels sont les paramètres à prendre en compte pour bien faire son dimensionnement de panneau solaire.</p>
<br>
<h4>1. Dimensionnement panneau solaire : comment comprendre son habitation ?</h4><hr><br>
<img src="img4.jpg" alt="kit solaire"><br>
<p>Dans le but de bien dimensionner vos panneaux solaires, vous devez tout d’abord comprendre les caractéristiques de votre logement. 

Cette étape passe par la connaissance de votre région (s’agit-il d’une région plutôt ensoleillée, ou plutôt nuageuse ? Sud ou Nord ?), mais aussi par l'analyse de l’orientation et de l'inclinaison du toit de votre maison.</p>
<h5><b>Comment le niveau d’ensoleillement de sa région influence le dimensionnement des panneaux solaires ?</b></h5><br>
<p>Lorsque l’on souhaite produire de l’électricité à partir de l’énergie solaire, il faut savoir que ce n’est pas la chaleur qui produit de l’énergie électrique. Mais bel et bien la lumière générée par le soleil.

En effet, les panneaux photovoltaïques transforment la lumière du soleil en électricité puis en courant alternatif grâce à un onduleur ou à un micro-onduleur. 

Ce niveau d’ensoleillement est différent d’un pays à un autre, d’une région à une autre et d’une ville à une autre.

Le dimensionnement de vos panneaux solaires va donc dépendre dans un premier temps de sa zone géographique.  

En d’autres termes, plus il y aura de soleil dans votre ville et région, plus la capacité de production d’électricité sera élevée.

Par conséquent, plus vous habitez dans le Sud du Maroc, plus vos panneaux solaires travailleront et généreront de l’électricité. 

</p>
<h5><b>Quelles sont les caractéristiques essentielles à connaître de votre toiture pour bien dimensionner vos panneaux solaires ?</b></h5><br>
<p>Vivre dans une région ou bien une ville où le niveau d’ensoleillement est important, c’est bien. Mais savoir où poser vos panneaux solaires, c’est mieux.

En effet, connaître les caractéristiques de votre maison est l'élément qui va vous permettre de mieux comprendre la production que vous pourrez réaliser chez vous à l’aide de panneaux solaires. 

C’est pourquoi, vous devez donc d’abord vous renseigner quant à l’orientation de votre maison et son exposition au soleil. L’exposition au soleil est la plus compliquée au Nord. En effet, le soleil ne s’y rend jamais.

Nous vous conseillons donc de ne pas poser de panneaux solaires tournés vers le Nord puisque sinon, votre production sera minime et très réduite.

En revanche, vous pouvez tout à fait positionner des panneaux solaires avec une orientation vers le Sud, Est et Ouest sachant que l'exposition vers le Sud est la meilleure.

Une fois que vous connaissez l’orientation de votre maison. Il est important que vous vous renseigniez sur l’inclinaison de votre toit.

Pour produire le plus d’énergie possible, il faut placer les capteurs des panneaux solaires à 90° par rapport aux rayons du soleil. Or, le soleil se déplace tout au long la journée. 

De ce fait, à moins de vous procurer un tracker pour panneaux solaires qui peut suivre le soleil, vos panneaux solaires vont rester fixes. Nous vous recommandons donc d’incliner vos panneaux solaires entre 15° et 35°.

Vous pouvez donc les positionner sur votre toit car de manière générale, pour les toits pointus, l’inclinaison se situe entre 30° et 40°. 

De plus, vous ne devez pas négliger les zones d’ombre proches de vos panneaux solaires comme un arbre, une cheminée, un poteau électrique, ou encore une maison voisine. En effet, elles pourraient diminuer votre production d’énergie. C’est également le cas des poussières qui pourraient couvrir vos panneaux solaires, et donc atténuer le niveau de lumière. Nous vous conseillons donc de vérifier et si besoin nettoyer vos panneaux solaires une fois par an.</p>
<h5><b>Poser ses panneaux solaires sur son toit : est-ce réellement obligatoire ?</b></h5><br>
<p>Si vous souhaitez réaliser un positionnement de panneau photovoltaïque sur votre toiture, vous devez prêter attention à deux éléments qui sont les suivants : </p>
<ul>
  <li>La superficie de votre toit.</li>
  <li>La solidité de votre charpente.</li>
</ul>  
<p>Concernant la superficie de votre toit, il est important que vous ayez suffisamment de place pour poser vos panneaux solaires, mais aussi pour respecter les distances de sécurité (environ 50 cm à toutes les extrémités de toiture). Ces distances permettent aux installateurs de monter vos panneaux photovoltaïques en toute sécurité sans risquer de marcher dessus .

Vous devez également faire attention à la solidité de votre charpente. En effet, si vous habitez dans une ancienne maison, il est possible que vous ayez à demander un renforcement afin qu’elle puisse supporter la charge des panneaux solaires.

Si vous souhaitez en savoir plus sur les caractéristiques et dimensions des panneaux solaires, vous nous invitons à vous rendre sur le site suivant : Dimension panneau solaire 

Un module solaire mesure en moyenne 1m de large et 1,7m de long, soit environ 1,7m2 et pèse environ 18 kg.

<h4>2. Dimensionnement panneau solaire : comment choisir le kit solaire adapté à sa consommation ?</h4><hr><br>
<h5><b>Qu’en est-il pour la consommation électrique ?</b></h5><br>
<p>Afin de bien dimensionner vos panneaux solaires, vous devez analyser votre consommation électrique journalière.

En effet, le dimensionnement de panneau solaire se base sur vos besoins énergétiques.

Votre consommation électrique se traduit par le nombre de watts consommés par heure x heures consommées par jour. 

L’ADEME estime que la consommation électrique annuelle moyenne par foyer est équivalente à 3 200 kWh. 

Mais, il est préférable que vous estimiez de vous-même l’énergie électrique que vous consommez. 

Pour cela, vous devez additionner la consommation électrique de tous vos appareils avec des puissances moyennes (les ampoules, les téléviseurs, les consoles de jeux, l’électroménager, les chargeurs de vos appareils (téléphones, GPS, piles), etc.).

Si vous ne connaissez pas votre consommation électrique, qui est indispensable pour un bon dimensionnement de panneau solaire, il existe des plateformes pour l'estimer.  

Il faut bien l’évaluer, bien l’appréhender et ne surtout pas la surestimer ou la sous-estimer.

La consommation d’énergie électrique est différente d’un foyer à un autre. Vous n’aurez donc pas forcément les mêmes panneaux solaires que votre voisin alors que vous disposez du même niveau d’ensoleillement. 

Également, si vous estimez que votre consommation est trop énergivore, des alternatives existent pour la réduire. </p>
<ul>
  <li>Par exemple, pour l’éclairage, vous pouvez vous procurer des ampoules qui consomment peu comme des ampoules à LED.</li>
  <li>Pour les appareils de réfrigération, vous pouvez les placer dans une pièce fraîche et utiliser des appareils économes.</li>
  <li>Pour le chauffage, vous pouvez adopter un tout autre moyen de vous chauffer tel que le chauffage au bois par exemple.</li>
</ul>
<h5><b>Quels sont les outils pour bien dimensionner ses panneaux solaires ?</b></h5><br>
<p>Afin d’être autonome et de trouver un juste équilibre entre votre consommation et votre production électrique, il faut que vous compreniez quelle pourrait être votre production énergétique.
<br>
Pour cela, différents sites sont mis à votre disposition. 
<br>
Ces sites prennent en compte les éléments que nous avons vu précédemment:</p>
<ul>
  <li>Vos besoins électriques journaliers</li>
  <li>L’inclinaison de votre toit (ou des fixations pour sols et façades)</li>
  <li>L’orientation de vos panneaux</li>
  <li>Votre ville</li>
  <li>Le type de technologie de panneau que vous allez utiliser</li>
  <li>Et votre niveau d’autonomie</li>
</ul><br>
<img src="liste.jpg" alt="liste"><br>
<p>Parmi ces simulateurs de dimensionnement de panneau solaire, on retrouve : <br><b><a href="{{route('dimenergypv')}}">DimEnergy</a></b></p>
<br>
<h5><b>Comment déterminer les panneaux solaires qui répondent le mieux à sa consommation ?</b></h5><br>
<p>
Pour répondre à cette question, vous devez prendre en compte deux éléments qui sont :
</p>
<ul>
  <li>Le type de panneaux que vous souhaitez poser chez vous</li>
  <li>Le budget que vous êtes prêt à mettre pour ce projet</li>
</ul>
<p>En fonction de toutes les informations que vous aurez récoltées sur votre consommation et votre maison, vous pourrez vous renseigner sur les panneaux solaires que vous souhaitez.</p>
<h5><b>La batterie, est-elle un bon investissement ?</b></h5><br>
<p>La batterie est le point critique dans une installation en site isolé.

En effet, dans le cas où vous souhaiteriez installer une batterie chez vous, et donc être en totale autoconsommation, le dimensionnement doit être effectué de façon minutieuse et précise.

Surdimensionner le stockage d’énergie par rapport à la surface de vos panneaux pourrait les abîmer.

Dans le cas où vous souhaitez être relié directement au réseau électrique, vous n’avez pas réellement besoin de réaliser un dimensionnement de panneaux solaires.

En effet, dans ce cas vous ne stockez pas l'énergie dans des batteries, vous la réinjectez au réseau. 

Vous n’êtes pas obligé de faire un équilibre entre la production et la consommation même s'il est toujours conseillé d'adapter au mieux votre production pour éviter de produire de l'énergie qui ne sera pas consommée par vous.</p>
<h4>3. Dimensionnement panneau solaire : ce qu'il faut retenir </h4><hr><br>
<p>Ce qu’il faut retenir du dimensionnement des panneaux solaires est qu’il faut trouver le juste milieu entre votre consommation d’électricité journalière, le rendement de vos futurs panneaux solaires et le rayonnement moyen journalier.
<br>
Pour réaliser un bon dimensionnement de panneau solaire, vous devez donc vous renseigner sur :</p>
<ul>
  <li>Le niveau d’ensoleillement de votre lieu d’habitation</li>
  <li>L’inclinaison et l’espace disponible sur votre toit</li>
  <li>L’orientation de votre maison</li>
  <li>Votre consommation électrique journalière</li>
  <li>Le type de panneaux photovoltaïques que vous souhaitez utiliser</li>
  <li>Votre niveau d’autonomie
</li>
</ul>
</div>
</section><br><br>
<aside class="col text-left">

</aside>
</body>
</html>