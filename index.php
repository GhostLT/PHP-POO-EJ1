<?php 
require_once('Persona.php');
require_once('Deportista.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//ahora vamos a crear la instancia
		$persona = new Persona;
		//ahora para acceder a una propiedad requerimos 
	 	//crear metodos
	 	echo "el valor de la propiedad cabeza es : " . $persona->cabeza() . "<br>";
	 	//Si lo que queremos es asignar un valor a la propiedad es de la siguiente manera
	 	$persona->genero="femenino";
	 	echo "el valor de la propiedad genero es : " . $persona->genero() . "<br>";
	 ?>
	 <h3> Persona Deportista</h3>
	<?php 
		$deportista = new Deportista;
		$deportista->genero ='tercer genero';
		echo "el valor de la propiedad genero es : " . $deportista->genero() . "<br>";
	 	$deportista->pais ='mexico';
		echo "el valor de la propiedad pais es : " . $deportista->pais . "<br>";
	 	echo $deportista->correr();
	 ?>
</body>
</html>