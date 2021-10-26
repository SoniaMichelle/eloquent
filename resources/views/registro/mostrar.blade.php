@extends('layout.plantilla')
@section('title','Usuarios' . $registro)
@section('contenido')
<div class="row mt-3">
    <div class="col">
        <button type="button" class="btn btn-dange"><a href="{{route('registro.lista')}}"><i class="fas fa-undo-alt"></i></a></button>
        <a href="{{route('registro.editar', $registro)}}"->>Editar curso</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 text-center">Bienvenido {{$registro->nombre}}</h1>
                <p class="lead">
                <div class="card mt-3">
                    <p class="text-center mt-2"><small>Datos del usuario.</small></p>
                    <div class="card-body">
                        <p><strong>Apellido: </strong>{{$registro->apellido}}</p>
                        <p><strong>Edad: </strong>{{$registro->edad}}</p>
                        <p><strong>Sexo: </strong>{{$registro->sexo}}</p>
                        <p><strong>Email: </strong>{{$registro->email}}</p>
                        <p><strong>Password: </strong>{{$registro->password}}</p>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection