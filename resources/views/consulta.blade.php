@vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('layouts.template')

@section('title', 'Consulta de colaboradores')

@section('content')
    <div id="app">
        <Consulta/>
    </div>
@endsection