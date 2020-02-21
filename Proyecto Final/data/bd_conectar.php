<?php
//conectar.php
function connectionDB(){
	$HOST="localhost";
	$USER="root";
	$PASS="";
	$DB="jungle";
	$con = mysqli_connect( $HOST,$USER,$PASS ) or die ("No se ha podido conectar al servidor de Base de datos");
	$db = mysqli_select_db( $con, $DB ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	return $con;
}

?>
