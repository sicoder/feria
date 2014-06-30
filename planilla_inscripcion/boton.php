<?
include ("conexion.php");

$nivel=$_POST ['elegido'];
$botoncito='alumnos';
 $sql="select nombre from niveles where id='$nivel' ";
 
   //echo"$sql";
   
   $consulta=mysql_query($sql,$conexion);

	while ($vector= mysql_fetch_row ($consulta)){

			$nombre=$vector[0];
		}
  



if ($nombre=='Especial 1' or $nombre=='Especial 2' or $nombre=='Especial 3'){
	
   $botoncito='alumnos_especial'; 
	
	}
		 

     echo"	<button type='button' name='jquery_boton' id='jquery_boton' value='$botoncito' onclick='documento(this.value)'> + </button>
			
	 ";
	

?>
