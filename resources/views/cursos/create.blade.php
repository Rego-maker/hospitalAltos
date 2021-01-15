@extends('layouts.plantilla')
@section('title','Cursos create')
@section('content')
    <h1><strong>Aquí podras crear un Curso</strong></h1>
    {{-- Al poner method post, busca en las configuraciones que hicimos en web.php
        las rutas, en este caso utiliza: route::post ya que es informacion importante --}}
    <br>
        <form action="{{ route('cursos.store') }}" method="POST">
            @csrf
            {{-- agrega un input oculto, agrega un token   --}}
        <label>
            Nombre:
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripcion:
            <textarea name="descripcion" cols="30" rows="5">value="{{ old('descripcion') }}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoría:
            <input type="text" name="categoria" value="{{ old('categoria') }}>
        </label>
        @error('categoria')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <button  type="submit" class="btn btn-danger">
                Enviar <span class="badge badge-primary"></span>
        </button>

    </form>
@endsection
