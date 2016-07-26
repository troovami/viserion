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
		$mail->setFrom($_POST['correo'], $_POST['nombre']);
		$mail->addAddress('ezebarazarte@gmail.com');
		$mail->Subject = $_POST['asunto'];
		//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
		$mail->msgHTML($_POST['comentario']."<br><br> Atte.: ".$_POST['nombre']."<br> Teléfono: (+".$_POST['pais'].") ".$_POST['str_telefono']);
		$mail->AltBody = 'Contactanos';
		//$mail->addAttachment('images/imagen_adjunta.png');
		 
		if (!$mail->send()) {
		    //echo "Error: " . $mail->ErrorInfo;
		    Session::flash('message','Error!'.$mail->ErrorInfo);
		} else {
		    Session::flash('message','Su mensaje fue enviado exitosamente!');
		}
	    	
    	//Session::flash('message','Su mensaje fue enviado exitosamente!');
    	return Redirect::to('/Contactenos');
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
