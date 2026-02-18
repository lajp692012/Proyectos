<?
/* ********************************************************************************************************* */

	Interface ClsAcademico
	{
		//public function connect();
		public function Select($conn,$query);
		//public function insert($query);
		//public function update($query);
	    public function Delete($conn,$query);
	}
	

/* ********************************************************************************************************* */

class Sql implements ClsAcademico
	{

/* ********************************************************************************************************* */
        //Funcion global para los select
		public function Select($conn,$query)
		{
			$stid = oci_parse($conn,$query);		
            $exec=@oci_execute($stid);
			if(!$exec)
			 {
				try
				{
					throw new Exception('Error: Se presento un error en la instrucci&oacute;n interna.');
				}
				catch (Exception $e)
				{
					$msg=$e->getMessage(); 
				}

			 return $msg;
			 }
		  }	 
/* ********************************************************************************************************* */

/* ********************************************************************************************************* */
        //Funcion global para los delete
		public function Delete($conn,$query)
		{
			$stid = oci_parse($conn,$query);		
            $exec=@oci_execute($stid);
			if(!$exec)
			 {
				try
				{
					throw new Exception('Error: No se puede eliminar este registro porque existe informaci&oacute;n relacionada.');
				}
				catch (Exception $e)
				{
					$msg=$e->getMessage(); 
				}

			 return $msg;
			 }
		  }	
		   
/* ********************************************************************************************************* */
 }
?>