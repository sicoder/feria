<?
include ("conexion.php");

$cientifico=$_GET ['jquery_boton_cientifico'];
//echo"$cientifico";
if($cientifico=='1'){

echo"

<button type='button' name='jquery_boton_cientifico' id='jquery_boton_cientifico' value='2' onclick='documento_cientifico(this.value)'> Borrar Profesor </button>

	<fieldset>
		<legend>Asesor Cientifico</legend>
			<label id='apellido'> Apellido</label> <input type='text' id='apellido'>
			<label id='nombre'>Nombre</label> <input type='text' id='nombre'>
			<label id='tipo_doc'>Tipo Documento</label> <select id='tipo_doc'>
															<option value='dni'>DNI</option>
															<option value='otro'>OTRO</option>
														</select>
			<label id='numero'> Numero Documento</label> <input type='text' id='numero'>
			<label id='sexo'>Sexo</label> 	<select id='sexo'>
												<option value='M'>MASCULINO</option>
												<option value='F'>FEMENINO</option>
											</select>
			<label id='tel'>Telefono</label> <input type='number' id='tel'>
			<label id='email'>E-Mail</label> <input type='text' id='email'>
			<label id='titulo'>Titulo</label> <input type='text' id=titulo''>
			<label id='disciplina'>Disciplina</label><input type='text' id='disciplina'>
			<label id='instinve'>Instituto Investigacion</label> <input type='text' id='instinve'>
			<label id='categoria'>Categoria</label> <input type='text' id='categoria'>
			<label id='localidad'>Localidad</label> <input type='text' id='localidad'>
	</fieldset>
	";
}
?>