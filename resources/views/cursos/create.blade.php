@extends('layouts.plantilla')

@section('title','create')

@section('content')
<h1>en esta pagina podras crear un grupo</h1>

<form action="{{route('cursos.store')}}" method="POST">
    
    @csrf
    
    <label>  
        nombre:<br>
        <input type="text" name="name">
    </label><br>
    <label>
        Descripcion:<br>
        <textarea name="descripcion" rows="5"></textarea>
    </label><br>
    <label>
        Categoria:<br>
        <input type="text" name="categoria">
    </label>
    <br>
    <button type="submit">enviar formulario</button>
</form>
@endsection