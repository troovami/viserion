@extends('app')

@section('content')

        <div class="main" role="main">
        
        <div id="content" class="content full">
            <div class="container">
                <div class="row">

                    <div class="results-container">

                        <div class="results-container-in">
                            {!! Form::input('hidden', 'pag', 1 , ['id'=> 'pag']) !!}
                            
                            <div id="barra-progreso" class="">
           
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        <span class="sr-only">100% Buscando...</span>
                                    </div>
                                </div>

                            </div>

                            <div id="results-holder" class="results-grid-view">
                                {!! Form::input('hidden', 'paginas', 1 , ['id'=> 'paginas']) !!}

                                <div class="main" role="main">
                                    <div id="content" class="content full">
                                        <div class="container">
                                            <div class="text-align-center error-404">
                                                <h1 class="">Acceso Restringido</h1>
                                                El contenido de esta página es sólo para usuarios registrados<br>
                                                <h3><i class="fa fa-frown-o"></i></h3>
                                                
                                                <p>
                                                    <a href="#" class="" data-toggle="modal" data-target="#loginModal">
                                                        <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                                                    </a>
                                                </p>

                                                <p>
                                                    <a href="{{ route('register') }}">
                                                        <button type="button" class="btn btn-warning">Crear Cuenta</button>
                                                    </a>
                                                </p>

                                            </div>
                                            <div class="spacer-30"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection