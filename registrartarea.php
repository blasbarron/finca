<?php
//var_dump($_POST);
require "conexion.php";  
var_dump($_POST);
$opcion = $_POST['opcion'];
switch ($opcion) {
	case 'registrar':
	//var_dump($_POST);
		$responsable = $_POST['responsable'];
		$tarea = $_POST['tarea'];
		$Consulta = $Conexion ->query("INSERT INTO tareas VALUES (NULL, '$responsable', '$tarea', NOW(),NULL)");
			echo "true";
		break;
	case 'versubtareas':
		
		var_dump("Entro");
		break;
	
	default:
		# code...
		break;
}

?>