@extends('app')

@section('content')

        <div class="main" role="main">
        
        <div id="content" class="content full">
            <div class="container">
                <div class="row">

                    <div class="results-container">

                        <div class="results-container-in">
                                                     
                            <div id="results-holder" class="results-grid-view">
                               
							    <div class="main" role="main">
							        <div id="content" class="content full">
							            <div class="container">
							                <div class="text-align-center error-404">
							                    <h1 class="">Talleres</h1>
							                    							                   							                   
							                    <p>
							                        <a href="{{ route('home') }}">
							                            <button type="button" class="btn btn-warning">Volver al inicio</button>
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
