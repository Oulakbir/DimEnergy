<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DimEnergy</title>
 <!-- Favicon-->
 <link rel="icon" type="image/x-icon" href="newlogo.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- <script src="dist/Chart.bundle.js"></script>  -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
          
    </head>
    <style>
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
         .vertical-line{
        border-left: 2px solid #000;
        display: inline-block;
        height: 500px;
        margin:20px auto;
      }
      .portfolio-item {
  display: block;
  position: relative;
  overflow: hidden;
  max-width: 530px;
  margin: auto auto 1rem;
}
    </style>
<body class="bg-light">
       <!-- navbar -->
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
        <a class="nav-link" href="{{route('statistiques')}}">Statistiques</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('post.index')}}">Commentaires</a>
    </li>

</ul>
</div>

</nav>

    </div>
</section>


    <!-- finnav -->

    <div class="row m-5" style="background-color:#F5F5F5;">
        <div class="col-xl-6 mx-auto p-5 ">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Evolution du nombre des utilisateurs par mois
                </div>
                <div class="card-body"><canvas id="myChart" width="100%" height="40%"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6 mx-auto p-5 ">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Evolution des commentaires des utilisateurs par mois
                </div>
                <div class="card-body"><canvas id="myChart2" width="100%" height="40%"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6 mx-auto p-5 ">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Evolution d'accès des utilisateurs au site par mois
                </div>
                <div class="card-body"><canvas id="Chart3" width="100%" height="40%"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6 mx-auto p-5 ">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Evalutions des utilisateurs
                </div>
                <div class="card-body"><canvas id="Chart4" width="100%" height="40%"></canvas></div>
            </div>
        </div>
    </div>

    <script>
// chart4
var Dt3=<?php echo json_encode($data3) ?>;
var ctxx1= document.getElementById('Chart4').getContext('2d');
var Chartt1= new Chart(ctxx1, {
    type: 'line',
    data: {
        labels: ['1', '2', '3', '4', '5', '6','7','8','9','10'],
        datasets: [{
            label: 'Evaluations',
            data:Dt3,
            backgroundColor: [
                'green'
            ],
            borderColor: [
                'green'
            ],
            borderWidth: 1
        }]
    },
    options: {
        title:{
            display: true,
            text:"Evolution des commentaires des utilisateurs par mois"
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script> 
<script>
// chart3
var Dt2=<?php echo json_encode($data2) ?>;
var ctxx= document.getElementById('Chart3').getContext('2d');
var Chartt= new Chart(ctxx, {
    type: 'bar',
    data: {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin','Juillet','Août','Septembre','Octobre','Novembre','Decembre'],
        datasets: [{
            label: 'Connexions',
            data:Dt2,
            backgroundColor: [
                'yellow'
            ],
            borderColor: [
                'yellow'
            ],
            borderWidth: 1
        }]
    },
    options: {
        title:{
            display: true,
            text:"Evolution des commentaires des utilisateurs par mois"
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>   

<script>
// chart2
var Dt1=<?php echo json_encode($data1) ?>;
var ctx1= document.getElementById('myChart2').getContext('2d');
var Chart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin','Juillet','Août','Septembre','Octobre','Novembre','Decembre'],
        datasets: [{
            label: 'Commentaires',
            data:Dt1,
            backgroundColor: [
                'blue'
            ],
            borderColor: [
                'blue'
            ],
            borderWidth: 1
        }]
    },
    options: {
        title:{
            display: true,
            text:"Evolution des commentaires des utilisateurs par mois"
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>   

<script>
    // chart 1
     var Dt=<?php echo json_encode($data) ?>;
var ctx = document.getElementById('myChart').getContext('2d');
var Chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin','Juillet','Août','Septembre','Octobre','Novembre','Decembre'],
        datasets: [{
            label: 'Utilisateurs',
            data:Dt,
            backgroundColor: [
                'red'
         
            ],
            borderColor: [
                'red'
            
            ],
            borderWidth: 1
        }]
    },
    options: {
        title:{
            display: true,
            text:"Evolution des nombre des utilisateurs par mois"
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>


</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>