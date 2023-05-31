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
  <h1>COMMENT BIEN FAIRE SON DIMENSIONNEMENT DES AEROGENERATEURS ?</h1><br>
  <hr>
  <h5>Sommaire</h5>
  <ul>
    <li>Dimensionnement éolien : Choix du site d’implantation de l’éolienne</li>
    <li>Dimensionnement éolien : Directions dominantes de la circulation du vent à l’échelle du globe</li>
    <li>Dimensionnement éolien : Origine des vents</li> 
    <li>Dimensionnement éolien : Force de Coriolis</li>
    <li>Dimensionnement éolien : Directions dominantes du vent </li>  
    <li>Dimensionnement éolien : Influence des reliefs et des topologies sur la circulation du vent </li>
    <li>Dimensionnement éolien : Effet tunnel</li>
    <li>Dimensionnement éolien : Effet de colline</li>
    <li>Dimensionnement éolien : Turbulence</li>
    <li>Dimensionnement éolien : Conditions pour les sites d’implantation</li>
  </ul>
  <hr>
  <br>
  <img src="eol6.jpg" alt="éolien">
  <div id="details">
      <h4><b>1.Choix du site d’implantation de l’éolienne</b></h4>
      <hr><br>
<p>Avant toute réalisation, on est indispensable de faire une étude préliminaire du site
d’implantation de l’éolienne. Notre travail doit se consacrer sur l’étude de conditions
dominantes de la circulation du vent à l’échelle du globe et l’influence des reliefs et des
topologies sur la circulation du vent. </p><br>
    <h4><b>2.Directions dominantes de la circulation du vent à l’échelle du globe</b></h4>
    <hr><br>
<p>Les conditions des vents définies par la norme se distinguent en deux types : les
conditions normales et les conditions extrêmes. Les conditions extrêmes comprennent le
profil de vent normal et un modèle de turbulence normal. Les turbulences comprennent, quant
à elles, des situations de rafales, de changement de direction, de cisaillement extrêmes et de
vitesse extrême du vent.</p><br>
    <h4><b>3.Origine des vents</b></h4>
    <hr><br>
<p>L’atmosphère, composée d’oxygène, d’azote et d’eau, est caractérisée par sa pression,
sa température et son humidité, des paramètres qui varient avec l’altitude à cause de la
rotondité de la terre. Le rayonnement solaire est absorbé de façon très différente aux deux
pôles et à l’équateur où l’énergie absorbée est très supérieure des deux pôles. Ces variations
de température provoquent différentes densités de masse d’air, entrainant ainsi son
déplacement d’une latitude à une autre. Le déplacement de ces masses d’air s’effectue des
zones de haute pression vers des zones de basse pression. Leurs déplacements sont
considérablement influencés par la force de Coriolis qui s’exerce perpendiculairement à la
direction du mouvement, vers la droite, dans l’hémisphère Nord et vers la gauche dans
l’hémisphère Sud.
Le vent est ainsi caractérisé par deux (02) variables par rapport au temps : sa vitesse et
sa direction.</p><br>
    <h4><b>4.Force de Coriolis</b></h4>
    <hr><br>
<p>A cause de la rotation de la Terre, tout mouvement dans l’hémisphère Nord semble se
dévier vers la droite, si nous l’observons depuis la Terre, dans l’hémisphère Sud, vers la
gauche. On appelle cette force de déviation la force de Coriolis (d’après Gustave Gaspard
Coriolis 1792-1843). La force de Coriolis est un phénomène visible, par exemple, les rails
s’usent plus rapidement d’un côté que de l’autre. Dans l’hémisphère Nord, les vents tendent à
souffler dans le sens inverse des aiguilles d’une montre lorsqu’ils approchent une zone de
basse pression. Dans l’hémisphère Sud, en revanche, ils tendent à souffler dans le sens des
aiguilles d’une montre autour d’une dépression.</p><br>
<img src="force.png" alt="image"><br>
    <h4><b>5.Directions dominantes du vent</b></h4>
    <hr><br>
<p>Dans le monde, il existe plusieurs types de vents. Parmi ces types, il y a les vents
globaux tels que l’air s’élève à l’équateur s’étendant vers le Nord et le Sud dans la haute
atmosphère. La force de Coriolis joue un rôle très important qui est celui d’empêcher les
courants d’air d’aller plus loin dans les deux hémisphères Nord et Sud. On trouve aussi des
vents de surface qui se situent jusqu'à environ 100m de hauteur. L’influence de la surface du
sol sur les vents est importante. En matière d’énergie éolienne, ce sont les vents de surface et
leur capacité énergétique qui présentent le plus grand intérêt. Quant aux vents de montagne,
ils donnent naissance à beaucoup de phénomènes climatologiques intéressants. La brise de
vallée en est un exemple. Elle se produit sur les versants exposés au Sud dans l’hémisphère
Nord, les réchauffements des versants et de l’air avoisinant font tomber la densité de l’air. En
conséquence, l’air commence à s’élever vers le sommet de la montagne produisant ce que l’on
appelle une brise montante. La nuit le phénomène s’inverse et une brise descendante se
produit. </p><br>
    <h4><b>6.Influence des reliefs et des topologies sur la circulation du vent</b></h4>
    <hr><br>
<p>Les critères de choix d’une implantation éolienne dépendent de la taille, de sa
puissance et de son nombre d’unités. Ils nécessitent la présence d’un vent régulier et diverses
conditions telles que la présence d’un réseau électrique pour recueillir le courant, le terrain
approprié l’absence de zones d’exclusion dont le périmètre de monuments historiques, les
sites classés, etc.
L’efficacité d’une éolienne dépend notamment de son emplacement. En effet, la
puissance fournie augmente avec le cube de la vitesse du vent, raison pour laquelle les sites
sont d’abord choisis en fonction de la vitesse et de la fréquence des vents présents. Un site
avec des vents d’environ 30km/h de moyenne est d’environ 8 fois plus productif qu’un autre
site avec des vents de 15km/h de moyenne. Une éolienne fonctionne d’autant mieux que les
vents sont réguliers et fréquents. Certains sites bien spécifiques disposent du vent de vitesse
croissante et sont alors plus propices (convenables) à une installation éolienne.</p><br>
    <h4><b>7.Effet tunnel</b></h4>
    <hr><br>
<p>Entre les grands bâtiments ou dans un col étroit, le phénomène d’effet tunnel peut être
observé. Le vent se trouve comprimé sur le côté exposé au vent du bâtiment ou de la
montagne, ce qui fait accélérer considérablement sa vitesse entre les obstacles. Cela implique
que, bien la vitesse normale dans un terrain dégagé soit 6 m/s, par exemple, elle atteint
facilement 9m/s dans un couloir naturel. L’installation d’une éolienne dans un tel tunnel est
ainsi une façon intelligente pour obtenir une vitesse de vent supérieure à celle de la zone
ambiante. Cependant, afin d’obtenir un effet tunnel utilisable, le tunnel doit être enclavé de
pentes douces. Si les collines entourant le tunnel sont très rugueuses et accidentées, il peut y
avoir beaucoup de turbulences dans le vent, ainsi le vent change de vitesse et de direction sans
cesse et très rapidement. La figure 4 montre le mode d’implantation dans un tunnel.</p><br>
<img src="tun.png" alt="photo"><br>
    <h4><b>8.Effet de colline</b></h4>
    <hr><br>
<p>Juste avant d’arriver au sommet d’une montagne, le vent est accéléré et comprimé, et
lorsqu’il arrive à l’autre côté, il devient lent et faible. En règle générale, on cherche à installer
les éoliens sur une colline ou une chaine de hauteurs qui sont plus élevées que le paysage
environnant. Surtout, il faut de préférence avoir une vue aussi dégagée que possible dans la
direction des vents dominants. Si l’on rencontre souvent des vitesses de vent accélérées sur les
collines, c’est à cause de la différence de pression existant à l’avant et à l’arrière de celles-ci.
Ainsi, le vent se trouve comprimé par la colline à la face exposée au vent, pour s’étendre
ensuite, une fois passé le sommet, vers la zone de basse pression de côté sous le vent de la
colline. Comme on le voit sur la figure 5, le vent commence à dévier bien avant qu’il n’arrive
à la colline. Ce phénomène est dû à l’étendue assez considérable de la zone de haute pression
se trouvant à l’avant de la colline. Tout comme c’était le cas pour l’effet de tunnel, une colline
accidentée ou à pentes raides peut provoquer de fortes turbulences ce qui risque d’annuler
l’avantage que l’on compte normalement gagner par une accélération de la vitesse.</p><br>
<img src="col.png" alt="photo"><br>
    <h4><b>9.Turbulence</b></h4>
    <hr><br>
<p>Par définition la turbulence résulte des irrégularités de la vitesse et de la direction du
vent. En effet, en règle générale, les éoliennes sont utilisables quand la vitesse du vent a une
valeur comprise entre 10 et 20km/h, sans toutefois atteindre des valeurs excessives qui
conduisent à la destruction de l’éolienne ou à la nécessité de la débrayer (pâles en drapeau)
pour en limiter l’usure. La vitesse du vent doit alors être comprise le plus souvent entre ces
deux valeurs pour un fonctionnement optimal de l’éolienne. De même, l’axe de rotation de
l’éolienne doit rester la majeure partie du temps parallèle à la direction du vent. Même avec
un système d’orientation de nacelle performant, il est préférable d’avoir une direction de vent
la plus stable possible pour obtenir un rendement optimal (alizé par exemple). Certains sites
proches des grands obstacles sont ainsi à éviter car le vent y est trop turbulent.</p><br>
    <h4><b>10.Conditions pour les sites d’implantation</b></h4>
    <hr><br>
<p>Bien que le vent soit l’élément principal pour l’implantation des éoliennes dans un site
donné, cette condition n’est pas suffisante pour satisfaire cette dernière, d’autres conditions
comme les suivantes doivent être prises en compte :</p><br>
<ul>
    <li>La nature du sol : le sol doit être suffisamment résistant pour supporter les
fondations de l’éolienne. Ce critère n’est pas déterminant car dans le cas d’un
sol meuble, des pieux sont alors enfoncés sous les fondations de l’éolienne.</li>
    <li>L’accessibilité du site : le site doit permettre le transport des gros éléments de
l’éolienne (pales, tour, nacelle) et des grues nécessaires au montage.</li>
    <li>La connexion au réseau électrique : pour cela, les petites fermes d’éolienne
sont le plus souvent situées à proximité d’un poste de transformation haute
tension afin de diminuer le coût de raccordement qui est directement fonction
de la distance à ce poste. Pour les grosses fermes d’éoliennes, le réseau doit
être en mesure de supporter l’énergie produite et son renforcement est parfois
nécessaire (renforcement ou création de poste de transformation).</li>
</ul><br><br>
    </div>
</section>
</body>
</html>