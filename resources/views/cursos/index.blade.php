@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
    <h1>Bienvenido a la pagina cursos</h1>
    <a href="{{route('cursos.create')}}"> Crear curso</a>
    <ul>

        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show',$curso->slug)}}">{{$curso->slug}}</a>
            </li>
        @endforeach

    </ul>

    {{$cursos->links()}}

@endsection

