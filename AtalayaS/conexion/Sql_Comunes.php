<?

//Funciones de SQL Comunes a los maestros.
//Oscar Cadavid@ - 2008
 
 
//Funcion para calcular en numero maximo de las tablas 
function calcular_nro_maximo($campo_max,$tabla)
 {
  $sql_maximo="select max($campo_max)+1 as maximo from ".$tabla; 
  return $sql_maximo;			  
 }
function calcular_nro_maximo2($tabla)
 {
  $sql_maximo="select  count(*)*2+1 as maximo from ".$tabla; 
  return $sql_maximo;			  
 }


function Registro_Log($cadena, $archivo){

	$fecha = ' <br> ' . date("d-m-Y::H-i-s") . ' <br> ';
	if (isset($archivo) && $archivo != '') {
	} else {
		$archivo = "Transacciones.log";
	}
	$fp = fopen('logs/'.$archivo, "a+");
	$write = fputs($fp, $fecha . utf8_decode($cadena));
	fclose($fp);
}

?>
