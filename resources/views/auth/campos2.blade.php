									  <div class="form-group">
								  
								    {!! Form::label('name', 'Imágen de la cuenta (opcional)',['class' => 'col-sm-2 control-label']) !!}
								    
								    <div class="col-sm-8">
								      
										<div class="input-group">
										
											{!! Form::file('blb_img',['id' => 'blb_img','onclick' =>'oir2()']) !!}
																						
											    <output id="imgUser">
											    
													@if(Route::current()->getName() == 'editar')
									                            @if (Auth::user()->blb_img != "")
									                            	<img src="data:image/jpeg;base64,{{ Auth::user()->blb_img }}" alt="{!! Auth::user()->str_nombre !!} {!! Auth::user()->str_apellido !!}" title="{!! Auth::user()->str_nombre !!} {!! Auth::user()->str_apellido !!}" style="width:50%">
																@else
															
																	  @if (Auth::user()->lng_idgenero == 1)
																	  	<img src="{{ asset('autostars/images/user_masculino.png') }}" alt="{!! Auth::user()->str_nombre !!} {!! Auth::user()->str_apellido !!}" title="{!! Auth::user()->str_nombre !!} {!! Auth::user()->str_apellido !!}" style="width:50%">								  	
																	  @elseif (Auth::user()->lng_idgenero == 2)
																	  	<img src="{{ asset('autostars/images/usuario_femenino.png') }}" alt="{!! Auth::user()->str_nombre !!} {!! Auth::user()->str_apellido !!}" title="{!! Auth::user()->str_nombre !!} {!! Auth::user()->str_apellido !!}" style="width:50%">
																	  @endif								
									
									                       		@endif	                                                

											          @else
											          	<i class="fa fa-picture-o" style="font-size:50px"></i>
											          @endif                                                

                                                </output> 
                                                                                                
								        </div>
								
								    </div>
								
								  </div>