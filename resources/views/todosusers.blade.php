@extends('mosaico')


@section('content')
<div class="text-center">
	<h3>Estudiantes regitrados</h3>
</div>
<br>


<div class="container">

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">ci</th>
      <th scope="col">nombres</th>
      <th scope="col">apellidos</th>
      <th scope="col">edad</th>
      <th scope="col">año</th>
      <th scope="col">seccion</th>
      <th scope="col">telefono</th>
      <th scope="col">correo</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>27.920.099</td>
      <td>Otto L</td>
      <td>Sanzhez</td>
      <td>16</td>
      <td>5</td>
      <td>a</td>
      <td>04247645976</td>
      <td>Otto@gmail.com</td>
      <td>
      	<button  onclick="f_n_s();" class="btn-sm  btn  btn-primary"> ver mas</button>
      
<button  onclick="f_n_s();" class="btn-sm  btn btn-success"> modificar</button>
	<button  onclick="f_n_s();" class="btn-sm btn btn-danger"> eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
       <td>37.920.099</td>
      <td>Maria L</td>
      <td>Contreras</td>
      <td>14</td>
      <td>3</td>
      <td>b</td>
      <td>04140643476</td>
      <td>OMariaC@gmail.com</td>
      <td>
      	<button   onclick="f_n_s();" class="btn-sm  btn  btn-primary"> ver mas</button>
      
<button  onclick="f_n_s();" class="btn-sm  btn btn-success"> modificar</button>
	<button  onclick="f_n_s();"  class="btn-sm btn btn-danger"> eliminar</button>
      </td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>29.420.299</td>
      <td>Otto L</td>
      <td>Sui</td>
      <td>12</td>
      <td>1</td>
      <td>a</td>
      <td>04247845976</td>
      <td>Otdjda@gmail.com</td>
      <td>
      	<button  onclick="f_n_s();" class="btn-sm  btn  btn-primary"> ver mas</button>
      
<button  onclick="f_n_s();" class="btn-sm  btn btn-success"> modificar</button>
	<button  onclick="f_n_s();" class="btn-sm btn btn-danger"> eliminar</button>
      </td>
    </tr>
  </tbody>
</table>




</div>



@endsection