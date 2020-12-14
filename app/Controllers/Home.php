<?php namespace App\Controllers;
use App\Models\usuario;

class Home extends BaseController
{

	public function index()
				{

					return view('inicio');
				}
	


				public function con(){
					return view('contact');
				}
					
				
	public function contacto()
	{

		$nomb = new usuario();
		$datos=$nomb->listarnombres();


	$mensaje =session('mensaje');
	$data =[
		"datos"=>$datos,

		"mensaje"=>$mensaje
	];
		return view('contacto', $data);
	}


			
		
			


			



			public function crear(){
			
	$datos = [
		
		"id_categoria" => $_POST['id_categoria'],

		"nombre" => $_POST['nombre'],
		"paterno"=> $_POST['paterno'],
		"materno"=> $_POST['materno'],
		"telefono"=> $_POST['telefono'],
		"email"=> $_POST['email'],

		


		"fecha"=> $_POST['fecha']

	];

	$Usuarios = new usuario();
	$respuesta = $Usuarios->insertar($datos);
	if ($respuesta >0){
	return redirect()->to(base_url().'/')->with('mensaje','1');
	}else{
		return redirect()->to(base_url().'/')->with('mensaje','0');

	}
		}

		public function eliminar($idnombre){

			$eli =new usuario();
	$data =[ "id_contacto"=>$idnombre];
	$respuesta=$eli->eliminar($data);

	if($respuesta){

		return redirect()->to(base_url().'/')->with('mensaje', '4');
	}else{
		return redirect()->to(base_url().'/')->with('mensaje', '5');

	}

		}

		public function actualizar(){


			$datos = [
				"id_contacto" => $_POST['id_contacto'],

				
		"nombre" => $_POST['nombre'],
		"paterno"=> $_POST['paterno'],
		"materno"=> $_POST['materno'],
		"telefono"=> $_POST['telefono'],
		"email"=> $_POST['email'],

		


		"fecha"=> $_POST['fecha']
			
			];
			$idnombre =$_POST['id_contacto'];
			$Crud = new usuario();
			$respuesta =$Crud->actualizar($datos, $idnombre);
			if ($respuesta){
				return redirect()->to(base_url().'/in')->with('mensaje','2');
				}else{
					return redirect()->to(base_url().'/in')->with('mensaje','3');
				
				}

		}

		public function obtenerdatos($id_nombre){

			$data=["id_contacto"=> $id_nombre];

			$Crud = new usuario();
			$respuesta= $Crud->obtenerdatos($data);
			$datos =["datos"=>$respuesta];
			return view('actualizar', $datos);
		}

			///////////////////////////// controladores y metodos para catgoria	




			public function index2()
				{

					$nomb = new usuario();
					$datos=$nomb->listarnombres1();
	
				$mensaje =session('mensaje');
				$data =[
					"datos"=>$datos,
					"mensaje"=>$mensaje
				];
					return view('categoria', $data);
				}
	
					
				
		

	
				public function crear1(){
			
					
					$datos = [
						

						"nombre" => $_POST['nombre'],
						"descripcion"=> $_POST['descripcion'],
					
				
						"fecha"=> $_POST['fecha']
				
					];
				
					$Usuarios = new usuario();
					$respuesta = $Usuarios->insertar1($datos);
					if ($respuesta >0){
					return redirect()->to(base_url().'/inde')->with('mensaje','1');
					}else{
						return redirect()->to(base_url().'/inde')->with('mensaje','0');
				
					}
						}


		
				public function eliminar1($idnombre){
		
					$eli =new usuario();
			$data =[ "id_categoria"=>$idnombre];
			$respuesta=$eli->eliminar1($data);
		
			if($respuesta){
		
				return redirect()->to(base_url().'/inde')->with('mensaje', '4');
			}else{
				return redirect()->to(base_url().'/inde')->with('mensaje', '5');
		
			}
		
				}
		
				public function actualizar1(){
		
		
					$datos = [
						"id_categoria" => $_POST['id_categoria'],
		
						"nombre" => $_POST['nombre'],
						"descripcion"=> $_POST['descripcion'],
					
				
						"fecha"=> $_POST['fecha']
					
					];
					$idnombre =$_POST['id_categoria'];
					$Crud = new usuario();
					$respuesta =$Crud->actualizar1($datos, $idnombre);
					if ($respuesta){
						return redirect()->to(base_url().'/inde')->with('mensaje','2');
						}else{
							return redirect()->to(base_url().'/inde')->with('mensaje','3');
						
						}
		
				}
		
				public function obtenerdatos1($id_nombre){
		
					$data=["id_categoria"=> $id_nombre];
		
					$Crud = new usuario();
					$respuesta= $Crud->obtenerdatos1($data);
					$datos =["datos"=>$respuesta];
					return view('actualizar1', $datos);
				}


				public function fetchDatafromDatabase()
				{
					$resultList = $this->ajax_model->fetchAllData('*','person',array());
					
					$result = array();
					$i = 1;
					foreach ($resultList as $key => $value) {
			
						$result['data'][] = array(
							$i++,
							$value['name'],
							$value['message'],
							$value['age'],
						);
					}
					echo json_encode($result);
				}


		
		//--------------------------------------------------------------------


		function mostrar (){
if($this->input->is_ajax_request()){
$buscar= $this->input->post("buscar");
$datos =$this->usuario->mostrar($buscar);
echo json_encode($datos);
}


		}


		

			}