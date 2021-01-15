@extends('layouts.plantilla')
@section('title','Curso '. $curso->name)
@section('content')
<!--Al usar {{ $curso->name  }} hago que php llame a los componentes ubicados en el
por ejemplo, ->name es para el nombre.-->
    <h1>Bienvenido al curso:  {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index') }}">Volver</a>
    <br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar Curso</a>
    <br>
    <p><strong>Categoria:</strong>{{ $curso->categoria }}</p>
    <p>{{ $curso->descripcion }}</p>

    <form action="{{ route('cursos.distroy', $curso) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
