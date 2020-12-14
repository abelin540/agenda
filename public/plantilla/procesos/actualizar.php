<?php 

	require_once "../conexion.php";
	require_once "../metodocrud.php";

$id_producto=$_POST['id_producto'];
    $nombre=$_POST['nombre']; //name="nombre"
     //name="correo"
    $descripcion=$_POST['descripcion']; //name="mensaje"
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];

	$datos=array(
			$id_producto, $nombre, $descripcion, $cantidad, $precio);

				
	$obj= new metodos();

	if($obj->actualiza($datos)==1){
		header("location:../index.html");
	}else{
		echo "fallo al modificar";
	}
 ?>