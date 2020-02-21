<?php

require_once ("bd_conectar.php");

// Descripción de la consulta
$sql = "select * from shoe where name like '%".$nombreShoe."%'";
// Conexión a la base de datos según los datos de la función
$conexion = connectionDB();
// Resultado devuelto por la sentencia de base de datos
$resultado = mysqli_query($conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");

$datos = array();
// Si hay películas que coincidan con los criterios de  la consulta
// las leeremos con un bucle
if(mysqli_num_rows($resultado) != 0) {
	// leemos fila a fila la lista de registros
	while ($fila = mysqli_fetch_array( $resultado  )){
		// Convertimos cada registro a un array nombrado de php clave-valor
		$shoe = array(
			"id" => $fila["id"],
			"name" => $fila["name"],
			"description" => $fila["description"],
			"img" => $fila["img"],
			"year" => $fila["year"]
		);
		// Añadimos nueva película en el array general
		array_push($datos, $shoe);
	}
}


mysqli_close( $conexion );

// Generamos el contenido json a partir del array de datos
header('Content-Type: application/json');
$json = json_encode($datos);
print_r($json);

?>
