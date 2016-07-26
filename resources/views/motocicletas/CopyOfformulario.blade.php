@extends('app')

@section('content')



        <div class="main" role="main">
        
        <div id="content" class="content full">
            <div class="container">
                <div class="row" style="margin-top:-49px">

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
    


    <!-- Start Body Content -->


                    <div class="col-md-4 col-sm-4 listing-form-wrapper">

                        <!-- SIDEBAR -->
                        <div class="listing-form-steps-wrapper tbssticky">
                            <!-- AD LISTING PROGRESS BAR -->
                            <div class="listing-form-progress">
                                <div class="progress-label"> <span>Tipo de publicación: <i class="fa fa-motorcycle"></i> Motocicletas<br></span> </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation=""></div>
                                </div>
                            </div>
                            <!-- AD LISTING FORM STEPS -->

                            <ul class="listing-form-steps">
                                <li class="active" data-target="#listing-add-form-one" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        
                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">1</strong>
                                                </span> 

                                                <strong class="step-title"><i class="fa fa-pencil-square-o"></i> Descripción</strong>
                                            </h4>

                                    </a>
                                </li>
                                <li data-target="#listing-add-form-two" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>

                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">2</strong>
                                                </span> 

                                                <strong class="step-"> <i class="fa fa-list-alt"></i> Características</strong>
                                            </h4>

                                    </a>
                                </li>
                                <li data-target="#listing-add-form-three" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>

                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">3</strong>
                                                </span> 

                                                <strong class="step-title"> <i class="fa fa-image"></i> Fotos</strong>
                                            </h4>
                                        
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-four" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>

                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">4</strong>
                                                </span> 

                                                <strong class="step-title"> <i class="fa fa-newspaper-o"></i> Publicar</strong>
                                            </h4>                                        

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-8">

				    	{!! Form::open(['route' => 'publicarMotocicleta', 'id' => 'demo-form', 'data-parsley-validate', 'class' => 'listing-add-form','enctype'=>'multipart/form-data', 'id' => 'formularioVehiculo', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!}
                       
                            <section class="listing-form-content">
                            
                                <!-- AD LISTING FORM STEP ONE -->
                                <div id="listing-add-form-one" class="tab-pane fade in active">

                                    <div class="tab-content col-md-12">

                                        @include('motocicletas.camposGenericos')

                                        <div id="formularioAnexo">
                                        
	                                        <div id="ambulancias">
	                                        	
	                                        </div>
                                         
	                                        <div id="autobuses">
	                                        	
	                                        </div>   
	                                                                             	                                        
	                                        <div id="camiones">
	                                        	
	                                        </div>

                                            <div id="gruas">
                                                
                                            </div>

                                            <div id="kartings">
                                                
                                            </div>
                                        
                                        </div>

                                    </div>
									
                                </div>
                            
                                <!-- AD LISTING FORM STEP TWO -->
                                <div id="listing-add-form-two" class="tab-pane fade">

									@include('motocicletas.caracteristicas')

                                </div>
                            
                                <!-- AD LISTING FORM STEP THREE -->
                                <div id="listing-add-form-three" class="tab-pane fade">
                                    
									@include('fotosForm')

                                </div>
                            
                                <!-- AD LISTING FORM STEP FIVE -->
                                <div id="listing-add-form-four" class="tab-pane fade">

									@include('publicarForm')
									
                                    <div class="col-md-5">
                                    	{!! Form::submit('Guardar',['class' => 'btn btn-primary btn-lg btn-block','onclick' => '']) !!}
                                    </div>
                                     
                                </div>

                            </section>
                            
						{!! Form::close() !!}

                    </div>





                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection