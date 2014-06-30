<?
include ("conexion.php");

$nivel=$_POST ['elegido'];


 $sql="select nombre from niveles where id='$nivel' ";
 
   //echo"$sql";
   
   $consulta=mysql_query($sql,$conexion);

	while ($vector= mysql_fetch_row ($consulta)){

			$nombre=$vector[0];
		}
  



if ($nombre=='Especial 1' or $nombre=='Especial 2' or $nombre=='Especial 3'){
	
	echo"<button type='button' name='jquery_boton_profesor' id='jquery_boton_profesor' value='1' onclick='documentoprofesor(this.value)'> + </button>";
	
	}
		 



?>
