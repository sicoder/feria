<?
include ("conexion.php");

$nivel=$_POST ['elegido'];


$sql=" select areas.nombre,areas.id 
			from areas,niveles,areanive
				where niveles.id='$nivel'
					and areanive.id_niveles=niveles.id
						and areanive.id_areas=areas.id";
						
						//echo"$sql";
						
												
												
$consulta=mysql_query($sql,$conexion);
	echo"<option disabled selected>Seleccione Area</option>	";
	while ($vector= mysql_fetch_row ($consulta)){
	
	//echo"$vector[0] $vector[1]";
	echo"<option value='$vector[1]'>$vector[0]</option>";
	
	}
	echo $options;
?>