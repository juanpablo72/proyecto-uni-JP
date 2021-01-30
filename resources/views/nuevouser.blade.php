@extends('mosaico')


@section('content')

<div class="container">
	<div class="text-center">
		<h2 class="text-primary">Registro de nuevos Estudiantes</h2>
		<br>
	</div>

<div class="text-centet">
          <p id="error"> </p>
        </div> 
	<hr class="divider my-4 bg-primary ">
<h4>Datos del Estudiante</h4>
	
		
		<br>
		<form action="/lista" method="">
			<div class="row">
				<div class="col-md-4"><label>CI:</label>
				<input type="number" name="cireg" placeholder="Ingrese ci estudiante"  class="form-control " id="cireg" >
			<div class="valid-feedback">
        Looks good!
      </div></div>
				<div class="col-md-4"><label>NOMBRE:</label>
				<input type="text" name="nombreg" placeholder="Ingrese nombre del estudiante" id="nomreg" class="form-control"></div>
				<div class="col-md-4"><label>APELLIDO:</label>
				<input type="text" name="apelreg" placeholder="Ingrese apellido del estudiante" id="apelreg" class="form-control"></div>
</div>
			
<div class="row mt-3">
				<div class="col-md-4"><label>EDAD:</label>
				<input type="number" name="edadreg" placeholder="Ingrese edad estudiante" id="edadreg" class="form-control"></div>
				<div class="col-md-4"><label>LUGAR DE NACIMIENTO:</label>
				<input type="text" name="nacreg" placeholder="Ingrese lugar de nacimiento del estudiante" id="nacreg" class="form-control"></div>
				<div class="col-md-4"><label>CORREO:</label>
				<input type="text" name="mailreg" placeholder="Ingrese Correo del estudiante" id="mailreg" class="form-control"></div>
</div>
<br>
<h4>Datos Academicos</h4>
<div class="row">
				<div class="col-md-4"><label>AÑO:</label>
				<input type="number" name="Areg" placeholder="Ingrese año cursante" id="Areg" class="form-control"></div>
				<div class="col-md-4"><label>SECCION:</label>
				<input type="text" name="seccreg" placeholder="Ingrese seccion" id="seccreg" class="form-control"></div>
				
</div>
<br>
<h4>Datos del Representante</h4>
<div class="row">
				<div class="col-md-3"><label>CI REPRESENTANTE:</label>
				<input type="number" name="cirepreg" placeholder="Ingrese ci Representante" id="cirepreg" class="form-control"></div>
				<div class="col-md-3"><label>NOMBRE REPRESENTANTE:</label>
				<input type="text" name="nombreg" placeholder="Ingrese nombre del Representante" id="nomrepreg" class="form-control"></div>
				<div class="col-md-3"><label>DIRECCION:</label>
				<input type="text" name="apelreg" placeholder="Ingrese Direccion de habitacio" id="direc" class="form-control"></div>
				<div class="col-md-3"><label>TELEFONO:</label>
				<input type="text" name="apelreg" placeholder="Ingrese telefono" id="telefono" class="form-control"></div>
				
</div>

<button onclick="return val_camp(); " class="btn btn-success btn-block mt-3 mb-2"><b>Guardar</b> </button>
		</form>
		
		
	
	
</div>



@endsection