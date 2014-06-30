<?
include ('conexion.php');

$boton=$_GET ['jquery_boton2'];


  $options="<div align='center'>
				<button type='button' name='jquery_boton3' id='jquery_boton3' onclick='documento2(this.value)' value='1'> + </button>
				
			</div> </label>";



if($boton=='1'){
echo"
<button type='button' name='jquery_boton2' id='jquery_boton2' value='2' onclick='documento1(this.value)'> Borrar Alumno </button>

<fieldset>
<br>
		<legend>Tercer Alumno</legend>

		
		<label id='apellido'> Apellido</label> <input type='text' id='apellido2'>
		<label id='nombre'>Nombre</label> <input type='text' id='nombre2'>
		<label id='tipo_doc'>Tipo Documento</label> <select id='tipo_doc2'>
														<option value='dni'>DNI</option>
														<option value='otro'>OTRO</option>
													</select>
		<label id='numero'> Numero Documento</label> <input type='text' id='numero2'>
		<label id='sexo'>Sexo</label> <select id='sexo2'>
										<option value='M'>MASCULINO</option>
										<option value='F'>FEMENINO</option>
										</select>
										
		<label id='edad'>Edad</label> <input type='number' id='edad2'>
		<label id='curso'>Curso </label> <input type='text' id='curso2'>
		<label id='tel'>Telefono</label> <input type='number' id='tel2'>
		<label id='domicilio'>Domicilio</label> <input type='text' id='domicilio2'>
		<label id='cp'>Codigo Postal</label> <input type='text' id='cp2'>
		<label id='provincia'>Provincia</label> <input type='text' id='provincia2'>
		<label id='localidad'> Localidad</label> <input type='text' id='localidad2'>
		<label id='email'>E-Mail</label> <input type='text' id='email2'>
		
	
	</fieldset>
	<label id='boton3' name='boton3'>
	";
	
	
	echo"$options";
	}
	?>
	</label>
	