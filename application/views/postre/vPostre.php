<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Cargar Postre</h1>
<form action="<?php echo base_url(); ?>cPostre/saveDessert" method="POST">
	<table>
		<tr>
			<td><label>Nombre</label></td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td><label>Precio</label></td>
			<td><label>S/</label><input type="text" name="price"></td>
		</tr>
		<tr>
			<td><label>Cantidad</label></td>
			<td><input type="text" name="quant"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Ingresar"></td>
		</tr>
	</table>
</form>
</body>
</html>