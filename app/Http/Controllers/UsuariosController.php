<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;
use Troovami\Consultas;
use Troovami\Buscador;
use Troovami\Http\Controllers\Auth;
use Troovami\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PHPMailer;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     *
     * @return void
     */
    public function __construct()
    {
        Buscador::camposBuscador();    
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {    	
    	$id = \Auth::user()->id;
    	$cuenta_usuario = Consultas::querysValor('cuenta_usuario',$id);
    	        
    	$cuenta_usuario[0]->fecha_inscripcion = substr($cuenta_usuario[0]->fecha_inscripcion, 0,10);
    	$var = explode('-',$cuenta_usuario[0]->fecha_inscripcion);
    	$cuenta_usuario[0]->fecha_inscripcion = "$var[2]-$var[1]-$var[0]";
    	
    	$cuenta_usuario[0]->fecha_nacimiento = substr($cuenta_usuario[0]->fecha_nacimiento, 0,10);
    	$var = explode('-',$cuenta_usuario[0]->fecha_nacimiento);
    	$cuenta_usuario[0]->fecha_nacimiento = "$var[2]-$var[1]-$var[0]";

        $publicaciones_usuario = Consultas::querysValor('publicaciones_usuario',$id);
	   
        /*
        print_r($publicaciones_usuario);
		echo "<br>";
        echo "->".count($publicaciones_usuario);
        die();
        
        */

		if (array_key_exists('0', $publicaciones_usuario)) {
				
			$a = 0;
			//for($x=0; $x < count($publicaciones_usuario); $x++){
			foreach ($publicaciones_usuario as $pub){

				$publicaciones_usuario[$a]->created_at = substr($publicaciones_usuario[$a]->created_at, 0,10);
				$var = explode('-',$publicaciones_usuario[$a]->created_at);
				$publicaciones_usuario[$a]->created_at = "$var[2]-$var[1]-$var[0]";
			
				$publicaciones_usuario[$a]->dmt_fecha_publicacion_fin = substr($publicaciones_usuario[$a]->dmt_fecha_publicacion_fin, 0,10);
				$var = explode('-',$publicaciones_usuario[$a]->dmt_fecha_publicacion_fin);
				$publicaciones_usuario[$a]->dmt_fecha_publicacion_fin = "$var[2]-$var[1]-$var[0]";
			
				$totalPublicaciones = Consultas::querysValor('totalPublicaciones_usuario',$id);
			
				//print_r($totalPublicaciones);die;
			    $a++;
			}
			
		}
		
		return \View::make('usuarios',compact('cuenta_usuario','publicaciones_usuario','totalPublicaciones'));

    } 
    
    public function editarUsuario()
    {    	
    	$id = \Auth::user()->id;
    	$paises = Consultas::querys('paises');
    	$genero = Consultas::querysValor('maestro','genero');
    	 
    	//$user = User::findOrFail($id);
    	$user = User::find($id);
    	//print_r($user);die;
    
    	return \View::make('auth.editar', compact('genero','paises','user'));
    	//return \View::make('auth.register',array('genero'=>$genero,'paises'=>$paises,'roles'=>$roles));
    	//return view('auth.register');
    } 
    
    public function editarUsuario2()
    {
    	$id = \Auth::user()->id;
    	$user = User::find($id);
    	return \View::make('auth.editar', compact('user'));
    }
    
    public function editarUsuario3()
    {
    	$id = \Auth::user()->id;
    	$user = User::find($id);    
    	return \View::make('auth.editar', compact('user'));
    }    
    
    public function actualizarUsuario(Request $request){
    	$id = \Auth::user()->id;
    	$user = User::find($id);
    	$user->fill($request->all());
    	$user->save();
    	
    	Session::flash('message','Sus datos fueron actualizados exitosamente!');
    	return Redirect::to('/Mi-Cuenta');
    	
    } 

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getRecuperar()
    {
        return \View::make('recuperarClave');
    }
    
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRecuperar(Request $request)
    {

        //Mi variable bandera para establecer si pasa o no a determinada vista:
        $flag = false;
 
            $user = User::where('email',$request->email)->first();
            //var_dump($user->id);
            //die();

        if (!empty($user)) {
            $flag = true;
                       
            $clave = $this->generarCodigo(8);
            
            $id = $user->id;
            
            $nombre = $user->str_nombre;
            
            $apellido = $user->str_apellido;
            
            //die($id);
            $user = User::find($id);
            $user->password = $clave;
            $user->save();

            $message = '<table>

		<tr>
			<td>
				<img src="autostars/images/banner-correo.png" alt="Logo">
	
			</td>		
		</tr>
		<tr>
			
			<td>
				<p>
					<b>*** POR FAVOR NO RESPONDA ESTE CORREO ***</b>
				</p>
				
				<p>
					<b>Este correo electronico ha sido enviado por troovami.com</b>
					<br><br>
					Estimada(o) '.ucfirst($nombre).' '.ucfirst($apellido).',
				</p>
								
			</td>
		</tr>		
		
		<tr>
			<td>
				<p>
					Usted solicitó recuperar la clave de su cuenta. A continuación su nueva clave de acceso:<br><br>
				
					<b>Clave: '.$clave.'</b><br>
            		
            		Para cambiar su clave, podra hacerlo en su panel de administración en la opción <b>Mi Cuenta</b> y luego en la opción <b>Clave</b>
            		
				</p>
				<p>
					Por favor, conserve este mensaje para una futura referencia.<br>
					Muchas gracias,				
				</p>
				
				<p>
					El equipo de Troovami<br>
					www.troovami.com
				</p>
				
			</td>
		</tr>
		
	</table>';
            
            
            $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $cabeceras .= "Content-Type: image/png";
            $cabeceras .= 'From: troovami.com <ezebarazarte@gmail.com>' . "\r\n";
            //mail($request->email, 'Recuperar Clave - Troovami.com', $message, $cabeceras);
            
            if (!mail($request->email, 'Recuperar Clave - Troovami.com', $message, $cabeceras)) {
            	//echo "Error: " . $mail->ErrorInfo;
            	Session::flash('message','Error!, el mensaje no se pudo enviar');
            } else {
            	Session::flash('message','Su clave fue enviada exitosamente a su dirección de correo electrónico');
            }
            
            
            /*
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = 'html';
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "ssl";
            $mail->Username = "ezebarazarte@gmail.com";
            $mail->Password = "falcor90dvv";
            $mail->setFrom('troovami@troovami.com', 'troovami.com');
            $mail->addAddress($request->email);
            $mail->Subject = 'Recuperar Clave - Troovami.com';
            //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
            //$mail->msgHTML('<img src="autostars/images/trovami-logo-beta.png" alt="Logo">Su nueva clave es:  '.$clave);
                        
            $mail->msgHTML($message);
                        
            $mail->AltBody = 'Recuperar Clave';
            //$mail->addAttachment('images/imagen_adjunta.png');
             
            if (!$mail->send()) {
                //echo "Error: " . $mail->ErrorInfo;
                Session::flash('message','Error!'.$mail->ErrorInfo);
            } else {
                Session::flash('message','Su clave fue enviada exitosamente a su dirección de correo electrónico');
            }

            */
            
            return Redirect::to('/Recuperar-Clave');    
        }   
        
        
        
        
        if ($flag == false) {
            //echo "no existe";
            return \View::make('errors.errorCorreo');
        }

    }
    
    
    public function generarCodigo($longitud) {
    	$key = '';
    	$pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    	$max = strlen($pattern)-1;
    	for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    	return $key;
    }
   
    
    
}