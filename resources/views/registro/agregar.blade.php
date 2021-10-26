@extends('layout.plantilla')
@section('title','Registrar')
@section('contenido')
<div class="row">
    <div class="col">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 text-center">Registro</h1>
                <form action="{{route('registro.store')}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="edad">Edad</label>
                            <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad">
                        </div>
                       <!--  <div class="form-group col-md-6">
                            <label for="inputState">Sexo</label>
                            <select id="inputState" class="form-control">
                                <option selected>SEXO</option>
                                <option>Mujer</option>
                                <option>Hombre</option>
                            </select>
                        </div> -->
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection