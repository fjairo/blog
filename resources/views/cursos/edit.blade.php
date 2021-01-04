@extends('layouts.plantilla')

@section('title','edit')

@section('content')
<h1>en esta pagina podras edit un grupo</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">

    @csrf
    @method('put')

    <label>
        nombre:<br>
        <input type="text" name="name" value="{{$curso->name}}">
    </label><br>
    <label>
        Descripcion:<br>
        <textarea name="descripcion" rows="5">{{$curso->description}}</textarea>
    </label><br>
    <label>
        Categoria:<br>
        <input type="text" name="categoria" value="{{$curso->category}}">
    </label>
    <br>
    <button type="submit">actualizar formulario</button>
</form>
@endsection