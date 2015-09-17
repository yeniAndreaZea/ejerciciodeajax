<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<form action ="opciones.php" method="POST">
		<center>
			<br>
			<br><br>
			<br><br>
			<h1>ESCUELA DE CULTURA</h1>
		<br>

		<label for="opcion">NOMBRES DEL ALUMNO </label>
        <input type= "text" name="name"><br><br>
        <label for="opcion">APELLIDOS DEL ALUMNO </label>
        <input type= "text" name="apellido"><br>
   <BR>
	 
		<label for="opcion">CURSOS </label>
		<select id="selectGrado" name="selectGrado">
			<option value=""></option>
			<option value="Primero">Primero</option>
			<option value="Segundo">Segundo</option>
			
		</select>
		
		<div id="resultado"></div>
		<BR>
	 
		<label for="opcion">VALOR </label>
		<select id="valor" name="valor">
			<option value=""></option>
			<option value="35000">35.000</option>
			<option value="70000">70.000</option>
	
			
		</select>
		
		<div id="resultado"></div><br><br>
				<input name='suma' type='submit' value='ENVIAR' />
</br>
	</form>
</form>


	<script>
		
		$( "#selectGrado").change(function() {
			var grado = $("#selectGrado").val();
			$.ajax({
				method: "POST",
				url: "opciones.php",
				data: { grado: grado}
			})
			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
 
	</script>
</body>

</html>
