@extends('base')
@section('contbody')

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">Servidores</a>
            @isset($mensaje)
                <h4 style="color:white">Bienvenido a tu perfil {{$mensaje}}</h4>
            @endisset
        </div>
    </nav>
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">Bienvenido a tu perfil</h1>
                <h2 class="masthead-subheading mb-0">@isset($mensaje){{$mensaje}}@endisset</h2>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>

@stop