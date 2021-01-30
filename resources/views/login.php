<!DOCTYPE html>
<html>
<head>
	<title>Mosaico digital</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	
	<link rel="stylesheet" href="icon.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
	<section class="parrallax" id="2">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">

  	<div class="col-md-3">
  		<img src="img/index/logoLLM.png" style="height: 60px;width: 74px;" alt="">

  	</div>
    <div class="col-md-3">
    	<a class="navbar-brand text-light" href="/">Coordinacion de Orientacion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>

    <div class="col-md-4">
    		<div class="btn-group" role="group" aria-label="Basic outlined example">
  <a  href="/#inicio" type="button" class="btn btn-outline-light " ><span class="icon icon-home" ></span></a>
  <a   href="/#values"type="button" class="btn btn-outline-light ">Valores </a>
  <a href="/#" type="button" class="btn btn-outline-light  menu" ><span> Informacion</span> 	</a>
</div>
         
   
  </div>
</nav>
   <img class="wave" src="img/wave.png">
  <div class="container">
    <div class="img">
      <img  style="height: 370px;width: 420px;" src="img/bg.png">
    </div>
    <div class="login-content">
    
      <form action="/lista">
        <img src="img/avatar.png">
        <h2 class="title">Bienvenido</h2>
      <div class="text-centet">
          <p id="error"> </p>
        </div> 
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5> <span class="icon icon-user"></span>    Usuario</h5>
                    <input type="text" class="input" name="user" id="user">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">

                    <h5><span class="icon icon-key"></span>     Contraseña</h5>
                    <input type="password" class="input" name="pass" id="pass">
                 </div>
              </div>
              <a href="#">Recuperar contraseña</a>
              <button  onclick=" return val_login();" type="submit" class="btn btn-primary">Iniciar Sesion</button>
              
            </form>
        </div>
    </div> 
  </section>
  <script  src="js/validaciones_login.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
