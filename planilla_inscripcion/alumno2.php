<?
include ('conexion.php');

$boton=$_GET ['jquery_boton'];

if ($boton=='alumnos_especial') 
{ 
 $options="	<div align='center'>
				<button type='button' name='jquery_boton2' id='jquery_boton2' onclick='documento1(this.value)' value='1'> + </button>
				
				
			</div> </label>";
}

?>

<? if ($boton=='alumnos_especial' or $boton=='alumnos') {
 echo"<button type='button' name='jquery_boton' id='jquery_boton' value='2' onclick='documento(this.value)'> Borrar Alumno </button>";
echo"


<fieldset>
<br>
		<legend>Segundo Alumno</legend>

		
		<label id='apellido'> Apellido</label> <input type='text' id='apellido1'>
		<label id='nombre'>Nombre</label> <input type='text' id='nombre1'>
		<label id='tipo_doc'>Tipo Documento</label> <select id='tipo_doc1'>
														<option value='dni'>DNI</option>
														<option value='otro'>OTRO</option>
													</select>
		<label id='numero'> Numero Documento</label> <input type='text' id='numero1'>
		<label id='sexo'>Sexo</label> <select id='sexo1'>
										<option value='M'>MASCULINO</option>
										<option value='F'>FEMENINO</option>
										</select>
										
		<label id='edad'>Edad</label> <input type='number' id='edad1'>
		<label id='curso'>Curso </label> <input type='text' id='curso1'>
		<label id='tel'>Telefono</label> <input type='number' id='tel1'>
		<label id='domicilio'>Domicilio</label> <input type='text' id='domicilio1'>
		<label id='cp'>Codigo Postal</label> <input type='text' id='cp1'>
		<label id='provincia'>Provincia</label> <input type='text' id='provincia1'>
		<label id='localidad'> Localidad</label> <input type='text' id='localidad1'>
		<label id='email'>E-Mail</label> <input type='text' id='email1'>
		
	
	</fieldset>
	
	
	<label id='boton2' name='boton2'>";
	
	
	echo"$options"; }
	?>
	
	</label>
	

	