@vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('layouts.template')

@section('title', 'Gowtic - Registro de ingreso de colaboradores')

@section('content')
    <div id="app">
        <App/>
    </div>

    <a href="{{ url('/consulta') }}">Consultar registro de colaboradores</a>
@endsection