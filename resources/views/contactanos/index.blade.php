@extends('layouts.plantilla')

@section('title','contactanos')

@section('content')
<h1>dejanos un mensaje</h1>

<form action="{{route('contactanos.store')}}" method="POST">
    @csrf
    <label>
        nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    @error('name')
    <p><strong>{{$message}}</strong></p>
    @enderror

    <label>
        correo:
        <br>
        <input type="text" name="correo">
    </label>
    <br>

    @error('correo')
    <p><strong>{{$message}}</strong></p>
    @enderror


    <label>
        mensaje:
        <br>
        <textarea name="mensaje" rows="4"></textarea>
    </label>
    <br>
    @error('mensaje')
    <p><strong>{{$message}}</strong></p>
    @enderror

    <button type="submit">enviar mensaje</button>
</form>

@if (session('info'))
<script>
    alert("{{session('info')}}")
</script>
@endif

@endsection