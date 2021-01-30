@extends('mosaico')


@section('content')
<div class="container">
	
   <H2 class=" text-primary text-center"><b>Buscar estudiante</b></H2>
   <br>
   
   	<div class="col-8">
   		<div class="row">
   			<div class="col-6"></div>
   		<div class="col-6 ">
   			<div class="card" style="border-color: #007bff;">
   			<div class="mt-3 mb-2">
   				<form action="" method="" >

   					<label  class="ml-5"><b> Ingrese la ci del estudiante</b> </label>


   					<div class="form-group ml-2">

   						<div class="col-11">

   							<input type="number" placeholder="ingrese la ci del estudiante  " class="form-control">
   						</div>

   						<br>
   						<div class="col-10 ml-3">
   							<input type="submit" onclick="f_n_s();" value="buscar" name="bci" id="bid" class="btn btn-primary btn-block">
   						</div>
   						
   					</div>
   				</form>
   			</div>
   			</div>
   		</div>
   		</div>
   	
   </div>


	
</div>



@endsection