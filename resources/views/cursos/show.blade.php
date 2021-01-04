@extends('layouts.plantilla')

@section('title','Curso'.$curso->name)

@section('content')
<h1>bienvenidos al curso {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">volver al curso</a>
<br>
<a href="{{route('cursos.edit', $curso)}}">editar curso</a>
<p><strong>categoria: </strong>{{$curso->category}}</p>
<p>{{$curso->description}}</p>
@endsection