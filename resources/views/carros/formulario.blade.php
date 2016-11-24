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
                                <div class="progress-label"> <span>Tipo de publicación: <i class="fa fa-car"></i> Carros<br></span> </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation=""></div>
                                </div>
                            </div>
                            <!-- AD LISTING FORM STEPS -->

                            <ul class="listing-form-steps">
                                <li id="descripcion" class="active" data-target="#listing-add-form-one" data-toggle="tab">
                                     <a href="#">
                                     
                                    
                                        <span class=""></span>
                                    
                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">1</strong>
                                                </span> 

                                                <strong class="step-title"><i class="fa fa-pencil-square-o"></i> Descripción <i id="estatus_formulario" class="fa fa-square-o" aria-hidden="true"></i>   </strong> 
                                                
                                                
                                            </h4>

                                    </a>
                                </li>
                                <li id="caracteristicas" data-target="#listing-add-form-two" data-toggle="tab">
                                    <a href="#">
                                        <span class=""></span>

                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">2</strong>
                                                </span> 

                                                <strong class="step-"> <i class="fa fa-list-alt"></i> Características <i id="estatus_formulario2" class="fa fa-square-o" aria-hidden="true"></i></strong>
                                            </h4>

                                    </a>
                                </li>
                                <li id="fotos" data-target="#listing-add-form-three" data-toggle="tab">
                                     <a href="#">
                                        <span class=""></span>

                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">3</strong>
                                                </span> 

                                                <strong class="step-title"> <i class="fa fa-image"></i> Fotos <i id="estatus_formulario3" class="fa fa-square-o" aria-hidden="true"></i></strong>
                                            </h4>
                                        
                                    </a>
                                </li>
                                <li id="publicar" data-target="#listing-add-form-four" data-toggle="tab">
                                     <a href="#">
                                        <span class=""></span>

                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">4</strong>
                                                </span> 

                                                <strong class="step-title"> <i class="fa fa-newspaper-o"></i> Publicar <i id="estatus_formulario4" class="fa fa-square-o" aria-hidden="true"></i></strong>
                                            </h4>                                        

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-8">



						<!-- Button trigger modal -->
						<!-- 
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						  Launch demo modal
						</button>
						-->
						
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel" style="text-transform: none; color: red">(*) Campos obligatorios</h4>
						      </div>
						      <div class="modal-body" style="text-align: center;">
						       <h4 style="text-transform: none;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Disculpe! Aún faltan datos por completar.....</h4>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
						        
						      </div>
						    </div>
						  </div>
						</div>

				    	{!! Form::open(['route' => 'publicarCarro', 'id' => 'demo-form', 'data-parsley-validate', 'class' => 'listing-add-form','enctype'=>'multipart/form-data', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!}
                       
                            <section class="listing-form-content">
                            
                            <!-- 
					          <div class="bs-callout bs-callout-warning hidden">
					                   
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                  <strong><i class="fa fa-exclamation-triangle"></i> Disculpe!</strong> Aún faltan datos por completar.....
                                </div>       
					                   					                   
					          </div>
					
					          <div class="bs-callout bs-callout-info hidden">
					            <div class="alert alert-info" role="alert">
					            	<strong><i class="fa fa-check"></i> Listo!</strong> Enviando....
					            </div>  
					          </div>                            
                            
                            
                            -->
                                <!-- AD LISTING FORM STEP ONE -->
                                <!-- <div id="listing-add-form-one" data-parsley-validate class="tab-pane fade in active">-->
                                 <div id="descripcion2" data-parsley-validate >

                                    <div class="tab-content col-md-12">

                                        @include('carros.camposGenericos')

                                        <div id="formularioAnexo">
                                        
	                                        <div id="ambulancias">
	                                        	@include('carros.ambulancias')
	                                        </div>
                                         
	                                        <div id="autobuses">
	                                        	@include('carros.autobuses')
	                                        </div>   
	                                                                             	                                        
	                                        <div id="camiones">
	                                        	@include('carros.camiones')
	                                        </div>

                                            <div id="gruas">
                                                @include('carros.gruas')
                                            </div>

                                            <div id="kartings">
                                                @include('carros.kartings')
                                            </div>

                                        </div>

                                    </div>
									                                                                                                           
									<div class="row">
									  <div class="col-md-6"></div>
										<div class="col-md-6" style="text-align: right;">
											<button class="btn btn-primary siguiente" id="siguiente" name="siguiente" type="button" title="Página siguiente"> <i class="fa fa-chevron-right"></i></button>
										</div>
									</div>
                                                                       
                                </div>
                            
                                <!-- AD LISTING FORM STEP TWO -->
                                <!-- <div id="listing-add-form-two" class="tab-pane fade">-->
                                <div id="caracteristicas2" data-parsley-validate >

									@include('carros.caracteristicas')

									<div class="row">
									  <div class="col-md-6" style="text-align: left;">
									  		<button class="btn btn-primary anterior" id="anterior" name="anterior" type="button" title="Página anterior"><i class="fa fa-chevron-left"></i> </button>
									  </div>
										<div class="col-md-6" style="text-align: right;">
											<button class="btn btn-primary siguiente" id="siguiente" name="siguiente" type="button" title="Página siguiente"> <i class="fa fa-chevron-right"></i></button>
										</div>
									</div>

                                </div>
                            
                                <!-- AD LISTING FORM STEP THREE -->
                                <!-- <div id="listing-add-form-three" class="tab-pane fade">-->
                                <div id="fotos2" data-parsley-validate >
                                    
									@include('fotosForm')

									<div class="row">
									  <div class="col-md-6" style="text-align: left;top: 37px;">
									  		<button class="btn btn-primary anterior" id="anterior" name="anterior" type="button" title="Página anterior"><i class="fa fa-chevron-left"></i> </button>
									  </div>
										<div class="col-md-6" style="text-align: right;">
											<button class="btn btn-primary siguiente" id="siguiente" name="siguiente" type="button" title="Página siguiente"> <i class="fa fa-chevron-right"></i></button>
										</div>
									</div>
									
                                </div>
                            
                                <!-- AD LISTING FORM STEP FIVE -->
                                <!-- <div id="listing-add-form-four" class="tab-pane fade">-->
								<div id="publicar2" data-parsley-validate >
									@include('publicarForm')
									
									
									<div class="row">
									  <div class="col-md-6" style="text-align: left;">
									  		<button class="btn btn-primary anterior" id="anterior" name="anterior" type="button" title="Página siguiente"><i class="fa fa-chevron-left"></i> </button>
									  </div>
										<div class="col-md-6" style="text-align: right;"></div>
									</div>									
									
									<br>
									
                                    <div class="col-md-12" style="text-align: center;">
                                     
                                    	{!! Form::submit('Guardar',['class' => 'btn btn-primary btn-block guardar','onclick' => '']) !!}
                                                                        	
                                    	<!-- 
                                    		<button type="button" class="guardar">hola</button>
                                    	 -->
                                    	
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