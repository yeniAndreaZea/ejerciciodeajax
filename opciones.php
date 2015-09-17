<?php 

 
if(isset($_POST['grado'])){ 
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


}


	if(isset($_POST["suma"])){
		$nombre=$_POST["name"];
		$apellido=$_POST["apellido"];
		$valor=$_POST["valor"];
		$grado=$_POST["selectGrado"];

		$cultura=$_POST['alumno'];
		if($grado == "Primero"){
			$valor +=35000;
		}
		if($grado == "Segundo"){
			$valor +=70000;
			
		}
		if($cultura == "Danza"){
			$valor +=($valor*0.2);
			
		}
		if($cultura == "Musica"){
			$valor +=($valor*0.3);
			
		}
		if($cultura == "Dibujo"){
			$valor += ($valor* 0.35);
			
		}
		echo "<br><br>EL ALUMNO " .$nombre. " ".$apellido. " TIENE QUE PAGAR UN VALOR DE  " .$valor;


	}


 ?>