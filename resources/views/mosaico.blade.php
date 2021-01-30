<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>mosaico</title>
 	<link rel="stylesheet" href="icon.css">
  <link rel="stylesheet" href="css/style_navbar.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light degradado">
  <div class="container-fluid">
    <a class="navbar-brand text-light " style="margin-left: 100px;" href="/lista">MOSAICO DIGITAL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
      
       
      
       <div class="dropdown " style="margin-left: 80%;">
  <button class="btn btn-success  dropdown-toggle ml-2"  style="border-radius: 20px; color: #fff;" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
     <span class="icon icon-user"></span>  <script type="text/javascript">
        
name_user =getQueryVariable('user');

 function getQueryVariable(variable) {
   var query = window.location.search.substring(1);
   var vars = query.split("&");
   for (var i=0; i < vars.length; i++) {
       var pair = vars[i].split("=");
       if(pair[0] == variable) {
           return pair[1];
       }
   }
   return false;
}




document.writeln(name_user);
</script>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="/iniciar_sesion">
     salir
    </a></li>
    <li><a class="dropdown-item" href="/admin">
     administrar
    </a></li>
  </ul>
</div>
    </div>
  </div>
</nav>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="border-radius: 25px;">
  <div class="container-fluid ml-5" >
    

  
<div class="collapse navbar-collapse" id="navbarNav">
  <div class="ml-5">
    <div class="ml-5">
       <div class="ml-5">
      <div class="ml-5 "  >
        <ul class="navbar-nav ml-5">
        <li class="nav-item">
          <a class="nav-link active ml-5  text-light" aria-current="page" href="/lista">lista</a>
        </li>
       <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/buscar">Buscar</a>
        </li>
       <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/registrar">Registrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/filtrar">Busqueda seleccionada</a>
        </li>
       
      </ul>
      </div>
    </div>

</div>
  </div>
        </div>
    
  </div>
</nav>
</div>

<br>

@yield('content')


<br>
<section id="pie_pag" class="mb-2 ">
    <div class="text-center mt-3 bg-primary">
      <h2 class="text-light">Coordinacion de Orientacion
        <br><hr class="divider my-4 bg-primary ">
        
</h2>
    </div>
    
    
    <div class="text-center mt-2 mb-2">
      
    </div>
<div class="row mb-4">
  <div class="col-md-4 col-sm-12">
    <img class="ml-5" src="img/escudo.gif" style="height: 80px;width: 84px; margin-left: 110px" alt="">
  </div>
  <div class="col-md-4 col-sm-12">
    <div class="text-center">
      <div class="row text-primary" style=" margin-left: 110px" >Realizado por Juan Pablo Morales Contreras</div>

      <div class=" ml-5 row text-dark" style=" margin-left: 210px">Desing byJpMc</div>
    </div>
  </div>
  <div class="col-md-4 col-sm-12">
    <img  class="mr-5" src="img/index/logoLLM.png" style="height: 80px;width: 84px; margin-left: 110px" alt="">
  </div>
</div>
<script type="" src="js/rng.js"></script>
<script type="text/javascript" src="js/Alerts.js"></script>
<script src="js/get_user.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>