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

                                @if(Session::has('message'))
                                
                                    <div class="alert alert-success" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                      <strong><i class="fa fa-exclamation-triangle"></i></strong> {{Session::get('message')}}
                                    </div>                          
                            
                                @endif    
                              

                    <div class="col-md-4">
                        <h2>Bienvenidos a Troovami!</h2>
                        <p>La nueva forma de publicar y vender tu vehículo, únete a la creciente comunidad de vendedores más grande de latinoamérica.</p>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-coffee"></i>
                            </div>
                            <h3>Tómate un café mientras vendes tu vehículo</h3>
                            <p>Nosotros te ayudaremos a vender</p>
                        </div>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-share-alt"></i>
                            </div>
                            <h3>Compartir tu publicación será un placer</h3>
                            <p>Nuestras redes sociales serán tu gran aliado para vender rápida y cómodamente.</p>
                        </div>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <h3>¿Sólo quieres búscar?</h3>
                            <p>Revisa nuestras publicaciones, selecciona y contacta directamente al vendedor.</p>
                        </div>

                    </div>

                    <div class="col-md-8">


<div class="panel panel-default">
<div class="panel-heading" style="background-color: #5bc0de">
<h3 class="panel-title" style="color: #FFF">

								 	<i class="fa fa-key" aria-hidden="true"></i>
								 	Recuperar Clave: 
								 	
</h3>
</div>
  <div class="panel-body">

                        <section class="signup-form sm-margint">
                           
                            <div class="regular-signup">							
								

								{!! Form::open(['route' => 'recuperar', 'id' => 'demo-form', 'data-parsley-validate', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 
								
											
								<div style="text-align: justify;">
									Introduzca su dirección de correo electrónico, y nosotros le enviaremos su nueva clave de acceso
								</div>
								<br>
					
								<div class="form-group">
								  
								    <!-- <i id="password_validar" class="fa fa-asterisk" style="color:red;"></i>-->
									<label class="col-sm-2 control-label"><i style="color: red">*</i> Correo Electrónico</label>   
								    <div class="col-sm-8">
										             
								        <div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
								            {!! Form::text('email', null, ['class'=> 'form-control','id'=>'email' ,'data-parsley-trigger'=>'change','placeholder'=>'Ej.: pepe@troovami.com','required','onchange'=>'validarEmail(this.value,this.name)']) !!}
								        </div>      
								    </div>
								    
								  </div>  
									

								  
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-8">
										
								        {!! Form::submit('Enviar Correo',['class' => 'btn btn-primary btn-lg btn-block']) !!}
								    </div>
								  </div>
								{!! Form::close() !!}

                            </div>
                            
                        </section>
   
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