@extends('mosaico')


@section('content')
<div class="container">
	
	<br>
	<h3 class="text-primary text-center">
	<b>BUSCAR ESTUDIANTES</b>
	</h3>
<div class="row">
	<div class="col-3"></div>
	<div class="col-9">
		<div class="col-6">
			<div class="card">
	<form action=" /resultados_busqueda " method="">
	<div class="col-11 mr-2 ml-2 mt-2">
		<label for=""> AÑO</label>
		<select  class="form-control" name="año">

<option >1ero</option>

<option>2do</option>

<option>3ero</option>

<option>4to</option>
<option>5to</option>
</select>
<br>
<label for=""> SECCION</label>
<select  class="form-control "name="seccion">

<option>A</option>

<option>B</option>

<option>C</option>


</select>

<BR></BR>
<button class="btn btn-block btn-primary  mb-4" onclick="return m_filtro();"> Buscar</button>
	</div>
</form>
</div>
		</div>
			


		</col-6>
	</div>
</div>
</div>
	@endsection