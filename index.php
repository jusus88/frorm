<form>
	<table>
		<tr>
			<td><label for="nombres" >Nombres</label></td>
			<td><input type="text" name="Nombres" id="nombres"></td>
		</tr>
		<tr>
			<td><label for="Apellidos">Apellidos</label></td>
			<td><input type="text" name="Apellidos" id="Apellidos"></td>
		</tr>
		<tr>
			<td>Sexo</td>
			<td>
				<input type="radio" name="sexo" value="f" id="f">
				<label for="f">Femenino</label>
				<input type="radio" name="sexo" value="m" id="m">
				<label for="m" >Masculino</label>
			</td>
		</tr>
		<tr>
			<td colspan="2"><label>Fecha de Nacimiento</label></td>
		</tr>
		<tr>
			<td colspan="2"><input type="date" name="fechanac"></td>
		</tr>
		<tr>
			<td colspan="2">
				<select name="dia">
					<option value="1">01</option>
					<option value="2">02</option>
					<option value="3">03</option>
					<option value="4">04</option>
					<option value="31">05</option>
				</select>
				<select name="mes">
					<option value="enero">enero</option>
					<option value="...">....</option>
					<option value="diciembre"> diciembre</option>
				</select>
				<select name="year">
					<option value="1998">1998</option>
					<option value="...">..</option>
					<option value="2020">2020</option>
					
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><button type="">Guardar</button></td>
		</tr>
	</table>
	
</form>
