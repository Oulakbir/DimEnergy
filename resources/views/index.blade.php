<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
         </head>
<style>
    
    body{
       /* background-color:beige; */
       /* background-image:url("doree.png");*/
        background-size:cover;
        background-attachment:fixed;
        font-family:new time rowan;
        padding:30px;
    }
    .container-fluid{
        border-radius:10px;
    } 
    h1{
        font-size:40px;
        color:white;
        margin-top:250px;
    }
    p{
        font-size:18px;
        color:white;
    }
    ul{
        list-style:none;
        display:flex;
    }
    ul li{
        padding:10px;
    }
    h3{
        font-size:25px;
    }
.glyphicon-pencil{
    font-size:35px;
    color:white;
    float:right;
    margin-top:20px;
}
.cont{
    margin-top: 80px;
    box-shadow: -1px -1px 60px 10px grey;
    background: rgba(1,1,1,0.5);
    padding:50px;
}
.label{
    font-weight:normal;
    margin-top:15px;
    color:white;
    font-size:18px;
}
textarea{
    background:transparent;
    border-radius:0px;
    border:0px;
    border-bottom:1px solid white;
    font-size:18px;
    margin-top: 15px;
    color:white;
}
#left{
    font-size:20px;
    color:black;
    font-family:new time rowan;
}
#name{
    color:white;
    background-color:green;
    text-align:center;
}


#right{
    color:white;
    background-color:grey;
    text-align:center;
}
h2{
    display:flex;
    justify-content:center;
    text-transform:uppercase;
    /* color:darkblue; */

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
margin:auto;
width:100%;
}
th {
display:none;
}
td {
font-family: sans-serif;
border: thin solid #6495ed;
padding:5px 8px;
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
<br><br>
<hr>
<h2 class="mb-0 text-center text-secondary"><strong>Blog de commentaires</strong></h2>
<hr>
<div class="container text-light text-center">
    <p class="text-dark " style="font-size:22px;"><samp class="text-info"><strong> Politique des commentaires :</strong> </samp><br><br>Nous aimons les commentaires et apprécions 
        le temps que les lecteurs passent pour partager des idées et donner des commentaires. 
        Cependant, tous les commentaires sont modérés manuellement 
        et ceux réputés pour être du spam ou uniquement promotionnels seront effacés.</p>
</div><hr><br>
<div class="cont mx-auto bg-dark p-3" style="width:50%;border-radius:10px;" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.index')}}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message" class="text-dark"><Strong>Ajouter un commentaire</Strong></label>
                                    <textarea required class="form-control" name="message" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="submit" class="btn btn-sm btn-outline-dark text-uppercase p-2 "><strong>Enregistrer</strong></button>
                            </div>
                        </form>
                    </div>
                </div><br><br>

  <hr>      
               
            <br>
<h3 class="text-secondary m-5 text-center"><strong> COMMENTAIRES ENREGISTRES</strong></h3><br>
    <div class="container-fluid bg-transparent p-4" style="width:70%;box-shadow:-1px -1px 5px 5px grey;">     
        <table>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @forelse ($commentaires as $commentaire)   
                <tr>
                  <td class="text-left" id="left"><strong>{{ $commentaire->content }}</strong></td>
                  <td class="text-center bg-primary" id="name">{{ $commentaire->getname($commentaire->user_id) }}</td>
                  <td class="text-right bg-dark" id="right">{{ $commentaire->created_at }}</li>
                </tr>
<!-- <hr style="color:#198754;" > -->
            @empty
            <div class="alert alert-info">Aucun commentaire n'est disponible</div>
            @endforelse
            </table>
    </div><br><br>
   <hr><br>
<br><br>

</body>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>

