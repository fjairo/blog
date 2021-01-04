@extends('layouts.plantilla')

@section('title','home')

@section('content')
<h1>bienvenidos a la pagina principal de cursos</h1>
<a href="{{route('cursos.create')}}">crear curso</a>
<ul>
@foreach($cursos as $curso)
<li>
    <a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a>
</li>
@endforeach
</ul>
{{$cursos->links()}}
@endsection