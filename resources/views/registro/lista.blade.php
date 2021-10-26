@extends('layout.plantilla')
@section('title','Lista')
@section('contenido')
<div class="row mt-5">
    <div class="col">
        <ul class="list-group">
            <li class="list-group-item active bg-info">Lista de Usuarios</li>
            @foreach($registro as $registros)
            <!-- <li>{{$registros->nombre}}</li> -->
            <li class="list-group-item">
                <a class="texto" href="{{route('registro.mostrar', $registros->id)}}">{{$registros->nombre}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
@section('pagina')
{{$registro->links()}}
@endsection