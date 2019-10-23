@extends('base')
@section('contbody')
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">Servidores</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#miModal">Sign Up</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#miModal2">Log In</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">Practicando con los menus de acceso</h1>
                <h2 class="masthead-subheading mb-0">Ignacio Gonzalez Martinez</h2>
                <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">No hace nada</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>-->
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>

                        <form class="form-signin" action="{{url('signform')}}" method="post">
                            @csrf
                            <div class="form-label-group">
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escribe tu nombre" required autofocus>
                            </div>
                            
                            <br>
                            <div class="form-label-group">
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="Escribe tu correo" required>
                            </div>
                            
                            <br>
                            <div class="form-label-group">
                                <input type="password" name="clave" id="clave" class="form-control" placeholder="Escribe tu contraseña aquí" required>
                            </div>
                            
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                            </div>
                            
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>-->
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Log In</h5>

                            <form class="form-signin" action="{{url('form')}}" method="post">
                                @csrf
                                <div class="form-label-group">
                                    <input type="email" name="correo" id="correo" class="form-control" placeholder="Escribe tu correo" required autofocus>
                                </div>
                                
                                <br>
                                <div class="form-label-group">
                                    <input type="password" name="clave" id="clave" class="form-control" placeholder="Escribe tu contraseña aquí" required>
                                </div>
                                
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                </div>
                                
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Log In</button>
                                <br>
                                <hr>
                                <a href="{{url('recuperar/')}}"> ¿Olvidaste tu contraseña?</a>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @isset($mensaje) 
        <div class="col-md-12 text-center">
            <h2 style="color:red"> {{$mensaje}}</h2>
        </div> 
    @endisset
    
@stop