<?php
$directorio = opendir("."); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (!is_dir($archivo))//verificamos si es o no un directorio
    {
              
	$baceImagePath = $archivo;
	
	/*
	$extension = substr(strtolower($archivo),-4);
	$parte1=substr($archivo,5,-4);
	$parte2=strstr($parte1, '_');
	$parte3=substr($parte2,1);
	$nombrecompuesto = $parte3.$extension;
	$saveImagePath = $nombrecompuesto; */
	

	//substr($saveImagePath,5,-4))
		
	if (!file_exists($saveImagePath))
	{
		$image = new Imagick($baceImagePath);
	
		$image->cropThumbnailImage(140,93);
		
		$image->writeImage('imgRecortes/'.$archivo);
		
		
		exec('rm '.$baceImagePath);
	}

    }
}
fclose($directorio);
?>