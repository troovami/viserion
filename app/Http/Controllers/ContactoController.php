<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;
use Troovami\Consultas;
use Troovami\Buscador;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PHPMailer;

class ContactoController extends Controller
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
        return \View::make('contacto');
    }
    
    public function enviar()
    {    	
    	$message = $_POST['comentario']."<br><br> Atte.: ".$_POST['nombre']."<br> Teléfono: (+".$_POST['pais'].") ".$_POST['str_telefono'];
    	    	
    	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    	$cabeceras .= "Content-Type: image/png";   	
    	$cabeceras .= 'To: Troovami <troovami@gmail.com>' . "\r\n";
    	$cabeceras .= 'From: '.$_POST['nombre'].' <'.$_POST['correo'].'>' . "\r\n";    	
    	
    	if (!mail('troovami@gmail.com', $_POST['asunto'].' - Troovami.com', $message, $cabeceras)) {
    		//echo "Error: " . $mail->ErrorInfo;
    		Session::flash('message','Error!, el mensaje no se pudo enviar');
    	} else {
    		Session::flash('message','Su mensaje fue enviado exitosamente!');
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
        $mail->Username = "troovami@gmail.com";
        $mail->Password = "20tr**v4m115";
		$mail->SetFrom('troovami@gmail.com');
		$mail->AddReplyTo($_POST['correo'], $_POST['nombre']);
		$mail->addAddress("troovami@gmail.com");
		
		$mail->Subject = "Troovami - ". $_POST['asunto'];
		//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
		$mail->msgHTML($message);
		$mail->AltBody = 'Contactanos';
		//$mail->addAttachment('images/imagen_adjunta.png');
		 
		if (!$mail->send()) {
		    //echo "Error: " . $mail->ErrorInfo;
		    Session::flash('message','Error!'.$mail->ErrorInfo);
		} else {
		    Session::flash('message','Su mensaje fue enviado exitosamente!');
		}
	   	*/

    	//Session::flash('message','Su mensaje fue enviado exitosamente!');
    	return Redirect::to('/Contacto');
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
