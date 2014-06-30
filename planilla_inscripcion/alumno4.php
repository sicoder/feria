<?
include ('conexion.php');

$boton=$_GET ['jquery_boton3'];



if($boton=='1'){
echo"
<button type='button' name='jquery_boton3' id='jquery_boton3' value='2' onclick='documento2(this.value)'> Borrar Alumno </button>
<fieldset>
<br>
		<legend>Cuarto Alumno</legend>

		
		<label id='apellido'> Apellido</label> <input type='text' id='apellido3'>
		<label id='nombre'>Nombre</label> <input type='text' id='nombre3'>
		<label id='tipo_doc'>Tipo Documento</label> <select id='tipo_doc3'>
														<option value='dni'>DNI</option>
														<option value='otro'>OTRO</option>
													</select>
		<label id='numero'> Numero Documento</label> <input type='text' id='numero3'>
		<label id='sexo'>Sexo</label> <select id='sexo3'>
										<option value='M'>MASCULINO</option>
										<option value='F'>FEMENINO</option>
										</select>
										
		<label id='edad'>Edad</label> <input type='number' id='edad3'>
		<label id='curso'>Curso </label> <input type='text' id='curso3'>
		<label id='tel'>Telefono</label> <input type='number' id='tel3'>
		<label id='domicilio'>Domicilio</label> <input type='text' id='domicilio3'>
		<label id='cp'>Codigo Postal</label> <input type='text' id='cp3'>
		<label id='provincia'>Provincia</label> <input type='text' id='provincia3'>
		<label id='localidad'> Localidad</label> <input type='text' id='localidad3'>
		<label id='email'>E-Mail</label> <input type='text' id='email3'>
		
	
	</fieldset>

";
}
?>

	