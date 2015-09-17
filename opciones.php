<?php 
	$miGrado = $_POST['grado'];

	$arrPrimero = array('Danza', 'Teatro', 'Dibujo'); 
 	$arrSegundo = array('Teatro', 'Dibujo');
	
	$arrRecorrer;

	$miSelect = "<strong> GRADO A </strong>";

	if($miGrado == 'Primero'){
		$arrRecorrer = $arrPrimero;
	}else if ($miGrado == 'Segundo'){

		$arrRecorrer = $arrSegundo;

	}


	$miSelect .= "<select id='alumno' name='alumno'>";
	foreach ($arrRecorrer as $nombre) {
		$miSelect .= "<option value=".$nombre.">".$nombre."</option>";
	}
	$miSelect .= "</select><br><br>";
	
	echo $miSelect;


	if($miGrado != 'Segundo'){
		$miGrado = $_POST['grado'];

	$arrPrimer = array('Danza', 'Musica'); 
 	
	
	$arrRecorrer;

	$miSelect = "<strong> GRADO B </strong>";

	if($miGrado == 'Primero'){
		$arrRecorrer = $arrPrimer;
	}

	$miSelect .= "<select id='alumno' name='alumno'>";
	foreach ($arrRecorrer as $nombre) {
		$miSelect .= "<option value=".$nombre.">".$nombre."</option>";
	}
	$miSelect .= "</select><br><br>";
	
	echo $miSelect;


	}

		$miGrado = $_POST['grado'];

	$arrPrime = array('Teatro', 'Dibujo', 'Musica'); 
 	$arrSegund = array('Teatro', 'Musica');
	
	$arrRecorrer;

	$miSelect = "<strong> GRADO C </strong>";

	if($miGrado == 'Primero'){
		$arrRecorrer = $arrPrime;
	
	}else if ($miGrado == 'Segundo'){

		$arrRecorrer = $arrSegundo;

	}


	$miSelect .= "<select id='alumno' name='alumno'>";
	foreach ($arrRecorrer as $nombre) {
		$miSelect .= "<option value=".$nombre.">".$nombre."</option>";
	}
	$miSelect .= "</select><br><br>";
	
	echo $miSelect;



	if(isset($_POST["ENVIAR"])){
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$valor=$_POST["valor"];
		$grado=$_POST["selectGrado"];

		$cultura=$_POST['otro'];

		if($grado == "primero"){
			$valor ==35.000;
		}
		if($grado == "segundo"){
			$valor ==70000;
			
		}
		if($cultura == "Danza"){
			$valor ==($valor*0.2);
			
		}
		if($cultura == "Musica"){
			$valor ==($valor*0.3);
			
		}
		if($cultura == "Dibujo"){
			$valor ==($valor*0.35);
			
		}
		echo "<br><br>EL ALUMNO".$nombre."TIENE QUE PAGAR POR LA MATRICULA".$valor;


	}
 ?>