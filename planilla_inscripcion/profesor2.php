<?
include ("conexion.php");

$profesor=$_GET ['boton_profesor'];
//echo"$profesor";
if($profesor=='1'){
echo"
<button type='button' name='jquery_boton_profesor' id='jquery_boton_profesor' value='2' onclick='documentoprofesor(this.value)'> Borrar Asesor</button>
<fieldset>
<legend>Segundo Asesor</legend>
		<label id='apellido_profesor1'> Apellido</label> <input type='text' id='apellido_profesor1'>
		<label id='nombre_profesor1'>Nombre</label> <input type='text' id='nombre_profesor1'>
		<label id='tipo_doc_profesor1'>Tipo Documento</label> <select id='tipo_doc_profesor1'>
														<option value='dni'>DNI</option>
														<option value='otro'>OTRO</option>
													</select>
		<label id='numero_profesor1'> Numero Documento</label> <input type='text' id='numero_profesor1'>
		<label id='sexo_profesor1'>Sexo</label> <select id='sexo_profesor1'>
										<option value='M'>MASCULINO</option>
										<option value='F'>FEMENINO</option>
										</select>
										
		<label id='edad_profesor1'>Edad</label> <input type='number' id='edad_profesor1'>
		<label id='tel_profesor1'>Telefono</label> <input type='number' id='tel_profesor1'>
		<label id='domicilio_profesor1'>Domicilio</label> <input type='text' id='domicilio_profesor1'>
		<label id='cp_profesor1'>Codigo Postal</label> <input type='text' id='cp_profesor1'>
		<label id='provincia_profesor1'>Provincia</label> <input type='text' id='provincia_profesor1'>
		<label id='localidad_profesor1'> Localidad</label> <input type='text' id='localidad_profesor1'>
		<label id='email_profesor1'>E-Mail</label> <input type='text' id='email_profesor1'>

</fieldset>";
}

?>