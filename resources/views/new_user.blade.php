@extends('mosaico')


@section('content')
<div class="container">
    <br>
    <div class="text-center">
        <h1 text-primary>REGISTRO DE NUEVO USUARIO</h1>
        <br>
    </div>
    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-5">

            <div class="card">
                <br>
                <form action="/admin">
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="ingrese usuario">
                        </div>
                        <div class="form-group "><input class="form-control" type="text" placeholder="ingrese contraseña"></div>
                        <div class="form-group"><input type="submit" class="btn btn-block btn-success" value="guardar"></div>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>

@endsection