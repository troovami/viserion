 <!-- Utiity Bar -->
    <div class="utility-bar" style="background-color: #FFF;">
    	<div class="container" >
        	<div class="row">
            	<div class="col-md-4 col-sm-6 col-xs-4">
            	
            	@if(Route::current()->getName() == 'home')
                	<div class="toggle-make">
                		<a href="#" title="Indicadores del día">
                			<!-- <i class="fa fa-navicon"></i>-->
                			<i class="fa fa-bar-chart" aria-hidden="true"></i>	
                		</a>
                    </div>
                 @endif   
                    
                    <span>
                        <ol class="breadcrumb">
                            @if(Route::current()->getName() == 'home')
                                
                                <li class="active"> <i class="fa fa-home"></i> Inicio</li>
                                
                            @elseif(Route::current()->getName() == 'publicar')
                            
                                <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                                <li class="active"> <i class="fa fa-newspaper-o"></i> Publicar</li>

                            @elseif(Route::current()->getName() == 'publicarCarro')
                                
                                <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                                <li><a href="{!! route('publicar') !!}"> <i class="fa fa-newspaper-o"></i> Publicar</a></li>
                                <li class="active"> <i class="fa fa-car"></i> Carros</li>
                                
                            @elseif(Route::current()->getName() == 'publicarMotocicleta')
                                
                                <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                                <li><a href="{!! route('publicar') !!}"> <i class="fa fa-newspaper-o"></i> Publicar</a></li>
                                <li class="active"> <i class="fa fa-motorcycle"></i> Motocicletas</li>                                
                           
                            @elseif(Route::current()->getName() == 'register')
                            
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-user-plus"></i> Crear-Cuenta</li>
                           
                            @elseif(Route::current()->getName() == 'detalles')
                            
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-outdent"></i> Vehiculo/@if(isset($vehiculo->id)){!! $vehiculo->id !!} @else No existe @endif</li>
                            
                            @elseif(Route::current()->getName() == 'error')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-chain-broken"></i> No existe</li>

                            @elseif(Route::current()->getName() == 'denegado')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-ban"></i> Acceso-Restringido</li>

                            @elseif(Route::current()->getName() == 'recuperar')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-key"></i> Recuperar-Clave</li>                              
                              
                            @elseif(Route::current()->getName() == 'quienes_somos')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              
                              <li class="active"> <i class="fa fa-universal-access" aria-hidden="true"></i> Quiénes Somos</li>
                              
                            @elseif(Route::current()->getName() == 'contacto')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              
                              <li class="active"> <i class="fa fa-envelope"></i> Contacto</li>                              
                              
                            @elseif(Route::current()->getName() == 'soporte')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-life-ring"></i> Soporte</li>                              
                              
                            @elseif(Route::current()->getName() == 'accesorios')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li><a href="#"> <i class="fa fa-coffee"></i> Servicios</a></li>
                              <li class="active"> <i class="fa fa-tags"></i>Accesorios</li>
                              
                            @elseif(Route::current()->getName() == 'repuestos')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li><a href="#"> <i class="fa fa-coffee"></i> Servicios</a></li>
                              <li class="active"> <i class="fa fa-cogs" aria-hidden="true"></i> Repuestos</li>
                              
                            @elseif(Route::current()->getName() == 'servicios')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li><a href="#"> <i class="fa fa-coffee"></i> Servicios</a></li>
                              <li class="active"> <i class="fa fa-check-square-o"></i> Servicios</li>
                              
                            @elseif(Route::current()->getName() == 'talleres')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li><a href="#"> <i class="fa fa-coffee"></i> Servicios</a></li>
                              <li class="active"> <i class="fa fa-wrench"></i> Talleres</li>
                              
                            @elseif(Route::current()->getName() == 'concesionarios')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="#"> <i class="fa fa-coffee"></i> Servicios</a></li>
                              <li class="active"> <i class="fa fa-building"></i> Concesionarios</li>                                                                                                                                                          

                            @elseif(Route::current()->getName() == 'cuenta')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="#"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                       		  
                            @elseif(Route::current()->getName() == 'editar')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="{!! route('cuenta') !!}"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                              <li class="active"> <i class="fa fa-user"></i> Perfil</li>
                              
                            @elseif(Route::current()->getName() == 'editar2')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="{!! route('cuenta') !!}"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                              <li class="active"> <i class="fa fa-file-image-o" aria-hidden="true"></i> Imágen</li>
                              
                            @elseif(Route::current()->getName() == 'editar3')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="{!! route('cuenta') !!}"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                              <li class="active"> <i class="fa fa-key" aria-hidden="true"></i> Clave</li>                                  
                              
                            @elseif(Route::current()->getName() == 'editarPublicacion')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="{!! route('cuenta') !!}"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                              
                              <li class="active"> <i class="fa fa-pencil-square-o"></i> Modificar/@if(isset($vehiculo->id)){!! $vehiculo->id !!} @else No existe @endif</li>
                                                              
                            @endif
                            
                        </ol>
                    </span>
                </div>

          	</div>
      	</div>
    	<div class="by-type-options">
    		<div class="container" >
               	<div class="row">
                  	<ul class="owl-carousel carousel-alt" data-columns="6" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="3" data-items-tablet="4">
                    	                    
					@foreach ($marcasPublicadosHoy as $hoy)	
                    	                    
                            <li class="item" style="margin-top: -4px">       

							
                            <?php 
								                            	
								switch ($hoy->str_marca) {

									case "Alfa Romeo": ?> '<img src="{{ asset('autostars/images/marcas/alfa-romeo.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Audi": ?> '<img src="{{ asset('autostars/images/marcas/audi.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "BMW": ?> '<img src="{{ asset('autostars/images/marcas/bmw.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Asia Motors": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Buick": ?> '<img src="{{ asset('autostars/images/marcas/buick.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Bugatti": ?> '<img src="{{ asset('autostars/images/marcas/bugatti.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Brilliance": ?> '<img src="{{ asset('autostars/images/marcas/brilliance.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Cadillac": ?> '<img src="{{ asset('autostars/images/marcas/cadillac.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Chana": ?> '<img src="{{ asset('autostars/images/marcas/chana.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Changhe": ?> '<img src="{{ asset('autostars/images/marcas/changhe.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Chery": ?> '<img src="{{ asset('autostars/images/marcas/chery.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Chevrolet": ?> '<img src="{{ asset('autostars/images/marcas/chevrolet.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Citroën": ?> '<img src="{{ asset('autostars/images/marcas/citroen.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Daewoo": ?> '<img src="{{ asset('autostars/images/marcas/daewoo.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Delorean": ?> '<img src="{{ asset('autostars/images/marcas/dmc.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Dodge": ?> '<img src="{{ asset('autostars/images/marcas/dodge.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ferrari": ?> '<img src="{{ asset('autostars/images/marcas/ferrari.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Fiat": ?> '<img src="{{ asset('autostars/images/marcas/fiat.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ford": ?> '<img src="{{ asset('autostars/images/marcas/ford.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Geely": ?> '<img src="{{ asset('autostars/images/marcas/geely.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Great wall": ?> '<img src="{{ asset('autostars/images/marcas/great-wall.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hafei": ?> '<img src="{{ asset('autostars/images/marcas/hafei.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Haima": ?> '<img src="{{ asset('autostars/images/marcas/haima.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Harley davidson": ?> '<img src="{{ asset('autostars/images/marcas/harley.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Honda": ?> '<img src="{{ asset('autostars/images/marcas/honda.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hummer": ?> '<img src="{{ asset('autostars/images/marcas/hummer.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hyundai": ?> '<img src="{{ asset('autostars/images/marcas/hyundai.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Infiniti": ?> '<img src="{{ asset('autostars/images/marcas/infiniti.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Isuzu": ?> '<img src="{{ asset('autostars/images/marcas/izusu.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Jaguar": ?> '<img src="{{ asset('autostars/images/marcas/jaguar.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Jeep": ?> '<img src="{{ asset('autostars/images/marcas/jeep.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Kia": ?> '<img src="{{ asset('autostars/images/marcas/kia.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lada": ?> '<img src="{{ asset('autostars/images/marcas/lada.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Land Rover": ?> '<img src="{{ asset('autostars/images/marcas/land-rover.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lexus": ?> '<img src="{{ asset('autostars/images/marcas/lexus.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lifan": ?> '<img src="{{ asset('autostars/images/marcas/lifan.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Lotus": ?> '<img src="{{ asset('autostars/images/marcas/lotus.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Maserati": ?> '<img src="{{ asset('autostars/images/marcas/maserati.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mazda": ?> '<img src="{{ asset('autostars/images/marcas/mazda.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mercedes Benz": ?> '<img src="{{ asset('autostars/images/marcas/mercedes-benz.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mercury": ?> '<img src="{{ asset('autostars/images/marcas/mercury.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mini": ?> '<img src="{{ asset('autostars/images/marcas/mini.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mitsubishi": ?> '<img src="{{ asset('autostars/images/marcas/mitsubichi.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Nissan": ?> '<img src="{{ asset('autostars/images/marcas/nissan.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Peugeot": ?> '<img src="{{ asset('autostars/images/marcas/peugeot.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Pontiac": ?> '<img src="{{ asset('autostars/images/marcas/pontiac.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Porsche": ?> '<img src="{{ asset('autostars/images/marcas/porsche.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Renault": ?> '<img src="{{ asset('autostars/images/marcas/renault.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Seat": ?> '<img src="{{ asset('autostars/images/marcas/seat.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Skoda": ?> '<img src="{{ asset('autostars/images/marcas/skoda.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Smart": ?> '<img src="{{ asset('autostars/images/marcas/smart.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Subaru": ?> '<img src="{{ asset('autostars/images/marcas/subaru.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Suzuki": ?> '<img src="{{ asset('autostars/images/marcas/suzuki.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Tata": ?> '<img src="{{ asset('autostars/images/marcas/tata.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Toyota": ?> '<img src="{{ asset('autostars/images/marcas/toyota.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Volkswagen": ?> '<img src="{{ asset('autostars/images/marcas/volkswagen.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Zotye": ?> '<img src="{{ asset('autostars/images/marcas/zotye.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Samsung": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Brilliance": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Byd": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Changan": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Chrysler": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Daihatsu": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Delorean": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Dodge ram": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Effa": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Engesa": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Gmc": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Jac": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Jinbei": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mahindra": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mg": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Miura": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Opel": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Rely": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Rover": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Saipa": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Shineray": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Shanghai maple (sma)": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ssangyong": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Troller": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Volvo": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Acura": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "BMW": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Geely": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Honda": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mini": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Peugeot": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Smart": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Abat": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Adiva": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Adly": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Aeon": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ajp": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Aiyumo": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Alpina ": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Aprilia": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ava": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Azel": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Benelli": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Bera": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Beta": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Big bear choppers": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Bimota": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Brammo": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Buell ": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Bultaco": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Bye bike": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Cagiva": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Can-am": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Cfmoto": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Clipic": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Cpi": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Cr&s": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Csr": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Daelim": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Derbi": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ducati": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Empire": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "E-max": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Fantic": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Garelli": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Gas gas": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Generic": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Gilera": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Goccia": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Goes": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Govecs": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hanway": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Harley davidson": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Headbanger": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hm": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Husaberg": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Husqvarna": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hyosung": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Indian": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Innocenti": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Kawasaki": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Keeway": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Kenrod": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ksr moto": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ktm": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Kymco": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Kyoto": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lambretta": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lemev": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Leonart": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Linhai": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lml": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lotus": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Macbor": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Malaguti": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mash": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Metrakit": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Montesa": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Motivas": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Moto guzzi": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Moto morini": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Motor hispania": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mtr": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mv agusta": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mx motor": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Nimoto": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Norton": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Oset": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ossa": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Oxygen": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Pgo": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Piaggio": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Quadro": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Quantya": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Rieju": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Royal enfield": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Scorpa": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Scutum": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Sherco": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Skygo": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Suzuki": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Sym": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Tacita": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Tgb": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Tm racing": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Triumph": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Um ": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Unico": ?> '<img src="{{ asset('autostars/images/marcas/unico.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ural": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Vectrix": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Vespa": ?> '<img src="{{ asset('autostars/images/marcas/vespa.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Victory": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Volta": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Voxan": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Vyrus": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Xero": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Yamaha": ?> '<img src="{{ asset('autostars/images/marcas/yamaha.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Zero": ?> '<img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
										

								}
                            
                            ?>
                            
                      
                              
                              
                              
                              <br>
                              <div style="margin-top: -7px; font-size: 10px">
                              	
                              	<b style="color: #a40000">Hoy:</b>  <strong>{{ $hoy->total}} publicados</strong>
                              </div>
                                                                       
                            </li>                     	                    	
                    	
                    	@endforeach
                    	
                  	</ul>
               	</div>
            </div>
        </div>
    </div>

        @include('login')
        @yield('content')
        @include('pie')
        
        <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
    </div>



    {!! Html::script('autostars/js/jquery-2.0.0.min.js') !!}  <!-- Jquery Library Call -->
    {!! Html::script('autostars/vendor/prettyphoto/js/prettyphoto.js') !!}  <!-- PrettyPhoto Plugin -->
    {!! Html::script('autostars/js/ui-plugins.js') !!}  <!-- UI Plugins -->
    {!! Html::script('autostars/js/helper-plugins.js') !!}  <!-- Helper Plugins -->
    {!! Html::script('autostars/vendor/owl-carousel/js/owl.carousel.min.js') !!}  <!-- Owl Carousel -->
    {!! Html::script('autostars/vendor/password-checker.js') !!}  <!-- Password Checker -->
    {!! Html::script('autostars/js/bootstrap.js') !!}  <!-- UI -->
    <!-- {!! Html::script('autostars/js/init.js') !!}   All Scripts -->
    {!! Html::script('autostars/vendor/flexslider/js/jquery.flexslider.js') !!}  <!-- FlexSlider -->
    <!-- {!! Html::script('http://maps.googleapis.com/maps/api/js?sensor=false') !!}--> 
    {!! Html::script('autostars/style-switcher/js/jquery_cookie.js') !!} 
    {!! Html::script('autostars/style-switcher/js/script.js') !!} 
    
    <!-- Propios -->
    {!! Html::script('autostars/js/init_cars.js') !!}  <!-- All Scripts -->
    {!! Html::script('autostars/js/ajaxCars.js') !!}  <!-- Ajax -->
    {!! Html::script('autostars/js/cropbox.js') !!}
    

            <!-- Validaciones-->

          
            {!! Html::script('validacionesCliente/bower_components/bootstrap/js/affix.js') !!}
            {!! Html::script('validacionesCliente/dist/parsley.js') !!}


 <script type="text/javascript">

      $(document).ready(function () {
          
        $.listen('parsley:field:validate', function () {
          //validateFront();
        });

        //Descripción, avanza hacia las caracteristicas
        $('#descripcion2 .siguiente').on('click', function () {
          $('#descripcion2').parsley().validate();
          validateFront();
        });

          var validateFront = function () {

          var flag = false;

            if (true === $('#descripcion2').parsley().isValid()) {
              //$('.bs-callout-info').removeClass('hidden');
              //$('.bs-callout-warning').addClass('hidden');
              flag = true;
            } else {
              //$('.bs-callout-info').addClass('hidden');
              //$('.bs-callout-warning').removeClass('hidden');
              flag = false;
            }

           //alert(flag)

           if(flag == true){

			   	$(".listing-form-progress .progress-bar").removeClass('progress-bar-primary');
			   	$(".listing-form-progress .progress-bar").addClass('progress-bar-info');        	   
        	   	$(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","25%").width("25%");
        	  
        	   	$("#estatus_formulario").removeClass('fa fa-square-o');
        	   	$("#estatus_formulario").addClass('fa fa-check-square-o').attr("style", "color: green");           	   
        	   
               	document.getElementById('caracteristicas').style.display = 'inline';
               	document.getElementById('caracteristicas2').style.display = 'inline';               
               	document.getElementById('descripcion2').style.display = 'none';

           }else{

				$("#estatus_formulario").removeClass('fa fa-check-square-o');
        	    $("#estatus_formulario").addClass('fa fa-square-o');  
	                  		
				$(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","0%").width("0%");			
        	   	$('#myModal').modal('show');								
           }                
          };
         
		//Caracteristicas, avanza hacia las fotos
          $('#caracteristicas2 .siguiente').on('click', function () {
              $('#caracteristicas2').parsley().validate();
              validateFront2();
            });

              var validateFront2 = function () {

              var flag = false;

                if (true === $('#caracteristicas2').parsley().isValid()) {
                  //$('.bs-callout-info').removeClass('hidden');
                  //$('.bs-callout-warning').addClass('hidden');
                  flag = true;
                } else {
                  //$('.bs-callout-info').addClass('hidden');
                  //$('.bs-callout-warning').removeClass('hidden');
                  flag = false;
                }

               //alert(flag)

               if(flag == true){

            	   	$(".listing-form-progress .progress-bar").addClass('progress-bar-warning');     
            	   	$(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","50%").width("50%");

            	   	$("#estatus_formulario2").removeClass('fa fa-square-o');
            	   	$("#estatus_formulario2").addClass('fa fa-check-square-o').attr("style", "color: green");                 	   
            	   
                   	document.getElementById('fotos').style.display = 'inline';
                   	document.getElementById('fotos2').style.display = 'inline';
                   	document.getElementById('caracteristicas2').style.display = 'none';            

               }else{

            	   	$("#estatus_formulario2").removeClass('fa fa-check-square-o');
            	   	$("#estatus_formulario2").addClass('fa fa-square-o');

    				$(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","25%").width("25%");
            	   	$('#myModal').modal('show');				
               }
                         
              };

      		//Caracteristicas, retrocede hacia la descripción
              $('#caracteristicas2 .anterior').on('click', function () {
                  $('#caracteristicas2').parsley().validate();
                  validateFront5();
                });

                  var validateFront5 = function () {

                  var flag = false;

                    if (true === $('#caracteristicas2').parsley().isValid()) {
                      //$('.bs-callout-info').removeClass('hidden');
                      //$('.bs-callout-warning').addClass('hidden');
                      flag = true;
                    } else {
                      //$('.bs-callout-info').addClass('hidden');
                      //$('.bs-callout-warning').removeClass('hidden');
                      flag = false;
                    }

                   //alert(flag)

                   if(flag == true){
                      
                	   $(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","0%").width("0%");

                	   $("#estatus_formulario").removeClass('fa fa-check-square-o');
                	   $("#estatus_formulario").addClass('fa fa-square-o');  
                	   
                       document.getElementById('descripcion').style.display = 'inline';
                       document.getElementById('descripcion2').style.display = 'inline';
                       document.getElementById('caracteristicas').style.display = 'none';
                       document.getElementById('caracteristicas2').style.display = 'none';
                
                   }else{

                	   $('#myModal').modal('show');				
                   }
                             
                  };


      		//Fotos, avanza hacia la publicacion
              $('#fotos2 .siguiente').on('click', function () {                  
                  $('#fotos2').parsley().validate();
                  validateFront3();                 
                });

                  var validateFront3 = function () {

                  var flag = false;

                    if (true === $('#fotos2').parsley().isValid()) {
                      //$('.bs-callout-info').removeClass('hidden');
                      //$('.bs-callout-warning').addClass('hidden');
                      flag = true;
                    } else {
                      //$('.bs-callout-info').addClass('hidden');
                      //$('.bs-callout-warning').removeClass('hidden');
                      flag = false;
                    }

                   //alert(flag)

                   if(flag == true){
                       
                	   $(".listing-form-progress .progress-bar").addClass('progress-bar-primary');  
                	   $(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","75%").width("75%");

                	   $("#estatus_formulario3").removeClass('fa fa-square-o');
                	   $("#estatus_formulario3").addClass('fa fa-check-square-o').attr("style", "color: green");     
                	   
                       document.getElementById('publicar').style.display = 'inline';
                       document.getElementById('publicar2').style.display = 'inline';
                       document.getElementById('fotos2').style.display = 'none';
                
                   }else{
       				//alert('Disculpe! Aún faltan datos por completar.....')
						$("#estatus_formulario3").removeClass('fa fa-check-square-o');
                	   	$("#estatus_formulario3").addClass('fa fa-square-o');         				
       					$(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","50%").width("50%");
                		$('#myModal').modal('show');				
                  }
                             
                  };

            	//Fotos, retrocede hacia las caracteristicas
                  $('#fotos2 .anterior').on('click', function () {
                      
                      $('#fotos2').parsley().validate();
                      validateFront6();
                    });

                      var validateFront6 = function () {

                      var flag = false;

                        if (true === $('#fotos2').parsley().isValid()) {
                          //$('.bs-callout-info').removeClass('hidden');
                          //$('.bs-callout-warning').addClass('hidden');
                          flag = true;
                        } else {
                          //$('.bs-callout-info').addClass('hidden');
                          //$('.bs-callout-warning').removeClass('hidden');
                          flag = false;
                        }

                       //alert(flag)

                       if(flag == true){

              			   $(".listing-form-progress .progress-bar").removeClass('progress-bar-warning');
            			   $(".listing-form-progress .progress-bar").addClass('progress-bar-info');                              
                    	   $(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","25%").width("25%");

                    	   $("#estatus_formulario2").removeClass('fa fa-check-square-o');
                    	   $("#estatus_formulario2").addClass('fa fa-square-o');  
                    	                       	   
                           document.getElementById('caracteristicas').style.display = 'inline';
                           document.getElementById('caracteristicas2').style.display = 'inline';
                           document.getElementById('fotos').style.display = 'none';
                           document.getElementById('fotos2').style.display = 'none';                    

                       }else{
           				
                    		$('#myModal').modal('show');				
                      }
                                 
                      };                  


            		//Publicar, retrocede hacia las fotos
                  $('#publicar2 .anterior').on('click', function () {
                      
                      $('#publicar2').parsley().validate();
                      validateFront7();
                    });

                      var validateFront7 = function () {

                      var flag = false;

                        if (true === $('#publicar2').parsley().isValid()) {
                          //$('.bs-callout-info').removeClass('hidden');
                          //$('.bs-callout-warning').addClass('hidden');
                          flag = true;
                        } else {
                          //$('.bs-callout-info').addClass('hidden');
                          //$('.bs-callout-warning').removeClass('hidden');
                          flag = false;
                        }

                       //alert(flag)

                       if(flag == true){

                    	   $(".listing-form-progress .progress-bar").removeClass('progress-bar-primary'); 
                    	   $(".listing-form-progress .progress-bar").addClass('progress-bar-warning');  
                    	   $(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","50%").width("50%");

                    	   $("#estatus_formulario3").removeClass('fa fa-check-square-o');
                    	   $("#estatus_formulario3").addClass('fa fa-square-o');                      	   
                    	   
                           document.getElementById('fotos').style.display = 'inline';
                           document.getElementById('fotos2').style.display = 'inline';
                           document.getElementById('publicar').style.display = 'none';
                           document.getElementById('publicar2').style.display = 'none';                    

                       }else{
                    	$('#myModal').modal('show');				
                      }
                                 
                      };


              		//Guardar la publicacion
                      $('#demo-form .guardar').on('click', function () {
                          
                          $('#demo-form').parsley().validate();
                          validateFront8();
                          //hola();
                        });

                          var validateFront8 = function () {

                          var flag = false;

                            if (true === $('#publicar2').parsley().isValid()) {
                              //$('.bs-callout-info').removeClass('hidden');
                              //$('.bs-callout-warning').addClass('hidden');
                              flag = true;
                            } else {
                              //$('.bs-callout-info').addClass('hidden');
                              //$('.bs-callout-warning').removeClass('hidden');
                              flag = false;
                            }

                           //alert(flag)

                           if(flag == true){

                        	   $(".listing-form-progress .progress-bar").removeClass('progress-bar-primary'); 
                        	   $(".listing-form-progress .progress-bar").addClass('progress-bar-success');  
                        	   $(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","100%").width("100%");

                        	   $("#estatus_formulario4").removeClass('fa fa-square-o');
                        	   $("#estatus_formulario4").addClass('fa fa-check-square-o').attr("style", "color: green");                             	               

                           }else{
               				
                	   			$("#estatus_formulario4").removeClass('fa fa-check-square-o');
                	   			$("#estatus_formulario4").addClass('fa fa-square-o');                 				
               				
                        		$('#myModal').modal('show');				
                          }
                                     
                          };


        
      });

      try {
        hljs.initHighlightingOnLoad();
      } catch ( err ) {}

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-37229467-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); 
        ga.type = 'text/javascript'; 
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

        <!-- Fin Validaciones-->



    
        @if(Route::current()->getName() == 'accesorios')
 		
<!-- jQuery -->
        <!-- {!! Html::script('pag/js/jquery-1.4.4.min.js') !!}-->

        <!-- Demo stuff -->
        {!! Html::style('pag/css/jq.css') !!}
        <!-- {!! Html::style('pag/css/bootstrap.min.css') !!}-->
        {!! Html::style('pag/css/prettify.css') !!}
        {!! Html::script('pag/js/prettify.js') !!}
        {!! Html::script('pag/js/docs.js') !!}

        <!-- Tablesorter: required for bootstrap -->
        {!! Html::style('pag/css/theme.bootstrap.css') !!}
        {!! Html::script('pag/js/jquery.tablesorter.js') !!}
        {!! Html::script('pag/js/jquery.tablesorter.widgets.js') !!}
        
        <!-- {!! Html::style('pag/css/print.css') !!}-->

        <!-- Tablesorter: optional -->
        {!! Html::style('pag/js/jquery.tablesorter.pager.css') !!}
        {!! Html::script('pag/js/jquery.tablesorter.pager.js') !!}
    



<!-- jQuery -->
        
        <script id="js">$(function() {

                $.extend($.tablesorter.themes.bootstrap, {
                    // these classes are added to the table. To see other table classes available,
                    // look here: http://twitter.github.com/bootstrap/base-css.html#tables
                    table: 'table table-bordered',
                    caption: 'caption',
                    header: 'bootstrap-header', // give the header a gradient background
                    footerRow: '',
                    footerCells: '',
                    icons: '', // add "icon-white" to make them white; this icon class is added to the <i> in the header
                    sortNone: 'bootstrap-icon-unsorted',
                    sortAsc: 'icon-chevron-up glyphicon glyphicon-chevron-up', // includes classes for Bootstrap v2 & v3
                    sortDesc: 'icon-chevron-down glyphicon glyphicon-chevron-down', // includes classes for Bootstrap v2 & v3
                    active: '', // applied when column is sorted
                    hover: '', // use custom css here - bootstrap class may not override it
                    filterRow: '', // filter row class
                    even: '', // odd row zebra striping
                    odd: ''  // even row zebra striping
                });

                // call the tablesorter plugin and apply the uitheme widget
                $("table").tablesorter({
                    // this will apply the bootstrap theme if "uitheme" widget is included
                    // the widgetOptions.uitheme is no longer required to be set
                    theme: "bootstrap",
                    widthFixed: true,
                    headerTemplate: '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!

                    // widget code contained in the jquery.tablesorter.widgets.js file
                    // use the zebra stripe widget if you plan on hiding any rows (filter widget)
                    widgets: ["uitheme", "filter", "zebra"],
                    widgetOptions: {
                        // using the default zebra striping class name, so it actually isn't included in the theme variable above
                        // this is ONLY needed for bootstrap theming if you are using the filter widget, because rows are hidden
                        zebra: ["even", "odd"],
                        // reset filters button
                        filter_reset: ".reset"

                                // set the uitheme widget to use the bootstrap theme class names
                                // this is no longer required, if theme is set
                                // ,uitheme : "bootstrap"

                    }
                })
                        .tablesorterPager({
                            // target the pager markup - see the HTML block below
                            container: $(".ts-pager"),
                            // target the pager page select dropdown - choose a page
                            cssGoto: ".pagenum",
                            // remove rows from the table to speed up the sort of large tables.
                            // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
                            removeRows: false,
                            // output string - default is '{page}/{totalPages}';
                            // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
                            output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'

                        });

            });</script>

        <script>
            $(function() {

                // filter button demo code
                $('button.filter').click(function() {
                    var col = $(this).data('column'),
                            txt = $(this).data('filter');
                    $('table').find('.tablesorter-filter').val('').eq(col).val(txt);
                    $('table').trigger('search', false);
                    return false;
                });

                // toggle zebra widget
                $('button.zebra').click(function() {
                    var t = $(this).hasClass('btn-success');
//			if (t) {
                    // removing classes applied by the zebra widget
                    // you shouldn't ever need to use this code, it is only for this demo
//				$('table').find('tr').removeClass('odd even');
//			}
                    $('table')
                            .toggleClass('table-striped')[0]
                            .config.widgets = (t) ? ["uitheme", "filter"] : ["uitheme", "filter", "zebra"];
                    $(this)
                            .toggleClass('btn-danger btn-success')
                            .find('i')
                            .toggleClass('icon-ok icon-remove glyphicon-ok glyphicon-remove').end()
                            .find('span')
                            .text(t ? 'disabled' : 'enabled');
                    $('table').trigger('refreshWidgets', [false]);
                    return false;
                });
            });
        </script> 
         		
 	@endif
        
</body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



</html>    