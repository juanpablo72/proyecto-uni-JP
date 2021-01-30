@extends('mosaico')


@section('content')
<div class="container">
	
	<div class="text-center  text-primary mt-3">
		<h2><b>Resultados De la busqueda</b></h2>

	</div>
	
	<a href="/filtrar" class="btn btn-success mt-3 mb-3">volver a buscar</a> 

	<div class="row">
		<div class="col-4">AÑO SELECCIONADO : <h4 class="text-primary"> (--)</h4> </div>
		<div class="col-4">SECCION SELECIONADA SELECCIONADO : <h4 class="text-primary"> (--)</h4></div>
		<div class="col-4">TOTAL DE ESTUDIANTES : <h4 class="text-primary"> (--)</h4></div>
	</div>

	<div class="row mt-4">
		<div class="container">

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">ci</th>
      <th scope="col">nombres</th>
      <th scope="col">apellidos</th>
  
      <th scope="col">telefono</th>
      <th scope="col">correo</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>27.920.099</td>
      <td>Otto L</td>
      <td>Sanzhez</td>
    
      <td>04247645976</td>
      <td>Otto@gmail.com</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
       <td>37.920.099</td>
      <td>Maria L</td>
      <td>Contreras</td>
      
      <td>04140643476</td>
      <td>OMariaC@gmail.com</td>
      
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>29.420.299</td>
      <td>Otto L</td>
      <td>Sui</td>
     
      <td>04247845976</td>
      <td>Otdjda@gmail.com</td>
      
    </tr>
  </tbody>
</table>




</div>
	</div>
</div>
@endsection