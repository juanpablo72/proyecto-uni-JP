@extends('mosaico')


@section('content')

<div class="container">
<div class="text-center">
<h1 class="text-primary">Administrador de Usuarios</h1>

</div>
<button  onclick="f_n_s();" class="btn btn-success"> nuevo usuario</button>
<br>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">usuario</th>
      <th scope="col">contraseña</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>27.920.099</td>
      <td>Otto L</td>
      
      <td>
      
      
<button  onclick="f_n_s();" class="btn-sm  btn btn-primary"> modificar</button>
	<button  onclick="f_n_s();" class="btn-sm btn btn-danger"> eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
       
      <td>Maria L</td>
      <td>37.920.099</td>
      
      <td>
      	
      
<button  onclick="f_n_s();" class="btn-sm  btn btn-primary"> modificar</button>
	<button  onclick="f_n_s();"  class="btn-sm btn btn-danger"> eliminar</button>
      </td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Otto L</td>
      <td>29.420.299</td>
      
      
      <td>
      
      
<button  onclick="f_n_s();" class="btn-sm  btn btn-primary"> modificar</button>
	<button  onclick="f_n_s();" class="btn-sm btn btn-danger"> eliminar</button>
      </td>
    </tr>
  </tbody>
</table>

</div>

@endsection