@extends('layouts.plantilla')
@section('title','Cursos edit')
@section('content')
    <h1><strong>Editar Curso</strong></h1>
    {{-- Al poner method post, busca en las configuraciones que hicimos en web.php
        las rutas, en este caso utiliza: route::post ya que es informacion importante --}}
    <br>
        <form action="{{ route('cursos.update', $curso) }}" method="POST">
            @csrf
            {{-- agrega un input oculto, agrega un token   --}}
            @method('put')
            {{-- hmtl no reconoce el metodo put, por eso se deja metodo post arriba
            y se declara @method('put') para que a la hora de buscar en el controlador
            al encontrar una ruta que utilice put, siga el procedimiento en el --}}
        <label>
            Nombre:
            <input type="text" name="name" value="{{ $curso->name }}" value="{{ old('name', $curso->name) }}">
        </label>
        @error('name')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <br>
        <label>
            Descripcion:
            <textarea name="descripcion" cols="30" rows="5">{{ old('descripcion', $curso->descipcion)}}
            </textarea>
        </label>
        @error('descripcion')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <br>
        <label>
            Categoría:
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria)}}">
        </label>
        @error('categoria')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <br>
        <button  type="submit" class="btn btn-danger">
                Actualizar <span class="badge badge-primary"></span>
        </button>

    </form>
@endsection
