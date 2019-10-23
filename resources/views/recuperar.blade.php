@extends('base')
@section('contbody')
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">Servidores</a>
        </div>
    </nav>
    
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">Recupera tu contraseña</h1>
                <h2 class="masthead-subheading mb-0">Siguiendo el formulario</h2>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    
    <div class="container">
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-md-5">
                <form class="form-signin" action="{{url('form2/')}}" method="post">
                    @csrf
                    <h2>Escribe tu correo:</h2>
                    <div class="form-label-group">
                        <input type="email" name="correo" id="correo" class="form-control" placeholder="Escribe tu correo" required autofocus>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Recuperar</button>
                    <br>
                    <hr>
                    <h5>En breve recibirá un correo con las instrucciones para recuperar la contraseña</h5>
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>
        
@stop