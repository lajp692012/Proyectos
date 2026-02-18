<? 
   global $msgDuplicar;
   $msgDuplicar='No se puede duplicar un registro existente.';
      
   function ceros($numero, $ceros=2){
     return sprintf("%0".$ceros."s", $numero );
   }
      
   function nro_max_matricula($numero){
     return $numero;
   }
   
   function fecha_esp(){
      $meses= array("","Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Octe","Nov","Dic");
      $mes= date("n");
      $fecha=date('d')."/".$meses[date($mes)]."/".date('Y');
      return $fecha;
   }
?>