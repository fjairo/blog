@extends('layouts.plantilla')

@section('title','edit')

@section('content')
<h1>en esta pagina podras edit un grupo</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">

    @csrf
    @method('put')

    <label>
        nombre:<br>
        <input type="text" name="name" value="{{old('name',$curso->name)}}">
    </label>

    @error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <label>
        Descripcion:<br>
        <textarea name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
    </label>

    @error('descripcion')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <label>
        Categoria:<br>
        <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
    </label>

    @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <button type="submit">actualizar formulario</button>
</form>
@endsection