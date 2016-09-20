
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 style="text-align: center;"><img style="width: 120px" src="{{ asset('autostars/images/troovami_logo_2.png') }}" alt="Logo"></h4>
                	
                	<h5 class="widgettitle" style="text-align: center;">
                		<strong>Tr</strong><strong style="color: red;">oo</strong><strong>vami</strong> es un sitio<strong> privado</strong> para ver los precios debe iniciar sesión
                	</h5>
                
                
            </div>
            <div class="modal-body">

                {!! Form::open(['route' => 'login', 'class' => 'form', 'data-parsley-validate']) !!}

                    <div class="form-group">
                        <label><i style="color: red">*</i> Correo Electrónico</label>
                        {!! Form::email('email', '', ['class'=> 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label><i style="color: red">*</i> Contraseña</label>
                        {!! Form::password('password', ['class'=> 'form-control', 'required']) !!}
                    </div>

					<input type="hidden" readonly="readonly" value="{{Request::path()}}" id="posicion" name="posicion">


						<div style="text-align: center;"><h5 class="widgettitle"><a href="{{route('recuperar')}}"><strong>¿Olvidó su Clave?</strong></a></h5></div>
						
                    <div>                            
                        {!! Form::submit('Entrar',['class' => 'btn btn-primary']) !!}
                                               
                        <button type="button" class="btn btn-info">
                        	<a href="{{route('register')}}" style="color:#FFF;">Registrate</a>
                        </button>
                                               
                    </div>                    
                {!! Form::close() !!}

            </div>
<!--
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-facebook btn-social"><i class="fa fa-facebook"></i> Login with Facebook</button>
                <button type="button" class="btn btn-block btn-twitter btn-social"><i class="fa fa-twitter"></i> Login with Twitter</button>
            </div>
-->
        </div>
    </div>
</div>