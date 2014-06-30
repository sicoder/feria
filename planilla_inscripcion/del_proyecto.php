
	<fieldset>
		<legend>Del proyecto</legend>
			
				<label id='titulo'>Titulo </label> <input type='text' id='titulo'>
			
				Nivel <?echo" <select id='nivel' name='nivel' >";
												$sql="select id, nombre from niveles group by id";
													
													$consulta=mysql_query($sql,$conexion);
														echo"<option disabled selected>Seleccione Nivel</option>	";
														while ($vector= mysql_fetch_row ($consulta)) {
															echo"<option value='$vector[0]'>$vector[1]</option>	";
														}
														
													
												ECHO"</select>";
												
												?>
												
				
				<label id='area1'>Area </label> <select id='area' name='area'>
														echo"<option disabled selected>Seleccione Area</option>	";
												</select>
												
				<label id='esp'>Especialidades o Disciplinas</label> <input type='text' id='esp'>
								
								<br>
								
				<label id='resumen1'>Resumen </label> <textarea onkeypress='wordCount()' onblur='wordCount2()' name='resumen' id='resumen' cols='68' rows='4' ></textarea>
				<label id='cantidadpalabras'></label>
				
			

	</fieldset>