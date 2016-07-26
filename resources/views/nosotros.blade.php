@extends('app')

@section('content')

<!-- Start Body Content -->
<!-- Start Body Content -->
    <div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h1 class="uppercase strong "><i class="fa fa-universal-access accent-color" aria-hidden="true"></i> Quiénes Somos</h1>
                        <p class="lead">Troovami es la nueva forma de publicar y vender tu vehículo, <span class="accent-color">fácil y rápido.</span></p>
                    </div>
                    <div class="col-md-6">
                                        
                    <p>                    
						Somos un portal dedicado a la venta de <span class="accent-color">todo tipo de vehiculos</span>, conformado por un grupo de profesionales comprometidos en dar lo mejor de si para que nuestros clientes sientan la mayor satisfaccion y comodidad durante el proceso de selección y compra.                                
                    </p>
                                        
                    <p>                    
						<span class="accent-color"> <a href="{{ route('register') }}"> Únete </a></span> a la creciente comunidad de vendedores más grande de latinoamérica.                    
                    </p>                                                          
                                        
                    </div>
                </div>
                <hr class="fw">
                <div class="text-align-center"><h2 class="uppercase">Nosotros</h2></div>
                <div class="spacer-20"></div>
              <div class="row">
                <ul class="sort-destination gallery-grid" data-sort-id="gallery">
                    <li class="col-md-4 col-sm-4 grid-item format-image">
                        <div class="grid-item-inner">
                            <a href="{{ asset('autostars/images/apertura-facebook-twitter.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('autostars/images/apertura-facebook-twitter.jpg') }}" alt=""> </a>
                            <div class="grid-content">

		                        <ul class="social-icons social-icons-colored pull-left">
		                        	<li class="facebook"><a href="https://www.facebook.com/Troovami-1566517207012420/" target="_blank"><i class="fa fa-facebook"></i></a></li>	
		                            <li class="twitter"><a href="https://twitter.com/troovami" target="_blank"><i class="fa fa-twitter"></i></a></li>
		                        </ul>						            
                  
                            <h3 class="widgettitle">&nbsp;Síguenos</h3>
																
                                <p>A través de nuestras redes sociales, le daremos impulso a tus publicaciones con nuestros seguidores. Comparte tu tambien algún vehículo de tu interés</p>
                                <ul class="social-icons social-icons-colored">
                                <!-- 
                                    <li class="facebook"><a href="https://www.facebook.com/Troovami-1566517207012420/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="https://twitter.com/troovami" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    -->
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 grid-item format-image">
                        <div class="grid-item-inner">
                            <a href="{{ asset('autostars/images/cliente-alianza-estrategica.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('autostars/images/cliente-alianza-estrategica.jpg') }}" alt=""> </a>
                            <div class="grid-content">
                                <h3 class="widgettitle"><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> Nuestros Aliados</a></h3>
                                <p>Contamos con un directorio donde podrás encontar todo lo necesario para tu vehículo. Visita nuestra sección servicios, todo en un solo lugar</p>

                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 grid-item format-image">
                        <div class="grid-item-inner">
                            <a href="{{ asset('autostars/images/contactanos3.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('autostars/images/contactanos3.jpg') }}" alt=""> </a>
                            <div class="grid-content">
                                <h3 class="widgettitle"><a href="{{route('contacto')}}"><i class="fa fa-envelope"></i> Contacto</a></h3>
                                <p>¿Preguntas? ¿Sugerencias? contamos con un equipo altamente calificado para responder ante sus inquietudes, su bienestar es lo mas importante.</p>

                            </div>
                        </div>
                    </li>
                </ul>
          </div>
        </div>
  </div>
    <!-- End Body Content -->
    <!-- End Body Content -->
  
@endsection