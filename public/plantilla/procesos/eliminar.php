<?php 

require_once "../conexion.php";
	require_once "../metodocrud.php";
$id_producto=$_POST['id_producto'];

	$datos=array(
			$id_producto);

	$obj= new metodos();
	if($obj->eliminar($datos)==1){
		header("location:../index.html");
	}else{
		echo "fallo al eliminar";
	}
 ?>