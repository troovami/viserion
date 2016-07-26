                                    <br>

                                    <h3 style="color: #777">
                                        <i class="fa fa-list-alt"></i>
                                        Características
                                    </h3>

                                    <div class="lighter"><p>Marca todas las caraterísticas que posee tu vehículo</p></div>

                                        <div class="panel-body">


                                    <div class="tabs listing-step-tabs">

                                        <ul class="nav nav-tabs">

                                            <li class="active"> <a data-toggle="tab" href="#seguridad" aria-controls="seguridad" role="tab">Seguridad</a></li>

                                            <li> <a data-toggle="tab" href="#sonido" aria-controls="sonido" role="tab">Sonido</a></li>

                                            <li> <a data-toggle="tab" href="#accesorios_internos" aria-controls="accesorios_internos" role="tab">Accesorios Internos</a></li>

                                        </ul>

                                        <div class="tab-content">
                                            
                                            <div id="seguridad" class="tab-pane fade  in active">
                                                
                                                <ul class="optional-features-list">
                                                           
                                                    <?php $a = 0; ?>                    
                                                    @foreach ($seguridad as $valor => $descripcion)

                                                        <li class="checkbox">
                                                            <label>
                                                                        
                                                                {!! Form::checkbox("lng_idcaracteristica[$a]", $valor) !!}
                                                                {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                        
                                                            </label>
                                                        </li>

                                                    <?php $a++; ?> 
                                                        
                                                    @endforeach

                                                </ul>

                                            </div>

                                            <div id="sonido" class="tab-pane fade">

                                                <ul class="optional-features-list">
                                                         
                                                <?php $b = $a; ?>
                                                @foreach ($sonido as $valor => $descripcion)

                                                    <li class="checkbox">
                                                        <label>
                                                                        
                                                            {!! Form::checkbox("lng_idcaracteristica[$b]", $valor) !!}
                                                            {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                        
                                                         </label>
                                                    </li>

                                                    <?php $b++; ?> 
                                                @endforeach
                                                
                                                </ul>

                                            </div>

                                            <div id="accesorios_internos" class="tab-pane fade">

                                                <ul class="optional-features-list">
                                                        
                                                    <?php $c = $b; ?> 
                                                    @foreach ($accesorios_internos as $valor => $descripcion)

                                                    <li class="checkbox">
                                                        <label>
                                                                        
                                                            {!! Form::checkbox("lng_idcaracteristica[$c]", $valor) !!}
                                                            {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                        
                                                         </label>
                                                    </li>

                                                    <?php $c++; ?> 
                                                    @endforeach
                                                
                                                </ul>

                                            </div>                                          

                                        </div>
                                    </div>

                                </div>