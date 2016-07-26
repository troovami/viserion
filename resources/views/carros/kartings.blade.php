                                                    <div class="form-group col-md-4">
                                                            
                                                            <!-- <i id="lng_idarranque_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                                                            {!! Form::label('lng_idarranque', 'Arranque') !!}<br>
                                                            
															{!! Form::select('lng_idarranque', 
																(['' => 'Seleccione'] + $arranque), 
																	null, 
																	['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
																) 
															!!}                                                               

                                                        </div>
                                                                                                            
