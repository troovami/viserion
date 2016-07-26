@extends('app')

@section('content')

<!-- Start Body Content -->
<!-- Start Body Content -->
    <div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h1 class="uppercase strong"><i class="fa fa-life-ring accent-color"></i> Soporte</h1>
                        <p class="lead">En Troovami estamos prestos<br>a resolver tus dudas <span class="accent-color">¿Cómo podemos ayudarte?</span></p>
                    </div>
                    <div class="col-md-6">
                      
                      <!-- 
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, <span class="accent-color">consectetur adipiscing</span> elit. Nulla convallis egestas rhoncus.</p>
                     -->
                    
                    </div>
                </div>
                <!-- <hr class="fw">-->

                        <div class="panel panel-default">
  <div class="panel-heading" style="background-color: #5bc0de">
    <h3 class="panel-title" style="color: #FFF"><i class="fa fa-question-circle"></i> Preguntas Frecuentes</h3>
						  </div>
						  <div class="panel-body">



                                        <div class="accordion" id="toggleArea">
                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne"> ¿Cómo publicar? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseOne" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>
                                                                           
                                                                            <img src="{{ asset('autostars/images/infografias/como_publicar_un_vehiculo.jpg') }}" alt="Logo">

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo"> ¿Cómo tomar las fotos? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseTwo" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

																			<img src="{{ asset('autostars/images/infografias/como_tomar_las_fotos.jpg') }}" alt="Logo">

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-group panel">
                                            
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapsethree"> ¿Cómo insertar un video? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapsethree" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

																			<img src="{{ asset('autostars/images/infografias/como_insertar_un_video.jpg') }}" alt="Logo">

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="accordion-group panel">
                                            
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapsefour"> Términos y Condiciones <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapsefour" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

																			<img src="{{ asset('autostars/images/infografias/infografia-final.png') }}" alt="Logo">

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>       
                                            <div class="accordion-group panel">
                                            
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapsefive"> Ventajas de publicar en Troovami <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapsefive" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

																			<img src="{{ asset('autostars/images/infografias/ventajas_de_publicar_en_troovami.jpg') }}" alt="Logo">

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>                                              
                                       </div>
						  </div>
						</div>                
                
                
                
                
                
                
                
                
                
                
                
                
                

        </div>
  </div>
    <!-- End Body Content -->
    <!-- End Body Content -->
  
@endsection