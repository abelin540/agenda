<?php 
		require_once "scripts.php";
		//  session_start();
		// if (isset($_SESSION['usuario'])) {
		// 	header("location:vistas/index2.php");
		//}
	?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    
    <title>categoria</title>
  </head>
  <body>
  <header>
            
  <header>
              
              <ul class="nav navbar-nav navbar-right" style="background:	#F1F4B7 " >


              <nav class="main_nav_container" >
				<div class="main_nav" >
					<ul class="main_nav_list"style="background-color:powderblue;">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <a class="navbar-brand" href="<?php echo base_url()?>/"><img src="plantilla/images/agenda.jpg" width="100" height="100"></a>

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>/">inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>/in">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="<?php echo base_url()?>/inde">categorias</a>
      </li>

      
   
    </ul>


   


      
  </div>


 

   



</div>

</nav>



              </header>


            </header>
                
                  
           
    <body>
    <section aling ="center" style="background-image:url(plantilla/images/agen.jpg)"> 

<h1 align="center" >Categorias </h1>
                <div class="container" >
                <div class="row" style="background:redjk ">
                <div class="col-sm-12">
                <form method="POST" role="form" action="<?php echo base_url().'/crear1' ?>">


               
<br>
                <label for="nombre">nombre</label>
                <input type="text" name="nombre" id=nombre class="form-control" required>


                <label for="nombre">descripcion</label>
                <input type="text" name="descripcion" id=descripcion class="form-control" required>

               
                <label for="nombre">fecha</label>
                <input type="text" name="fecha" id=fecha class="form-control" required>



                
                <br>
                <button class="btn btn-primary">Guardar</button>
                </form>
                </div>
                </div>
                </div>

            <hr>

            
            <hr>
              <h2 align="center" >Listado de contactos </h2>
              <div>
	<table table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>


				<td>nombre</td>
				<td>descripcion</td>
				<td>fecha</td>
        <td>editar</td>
        <td>actualizar</td>


			

			</tr>
		</thead>

    <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			
      <tr>
      <td>nombre</td>
				<td>descripcion</td>
				<td>fecha</td>
        <td>editar</td>
        <td>actualizar</td>
        </tr>
  
      </tfoot>
		<tbody >
  
		
    <?php foreach($datos as $key): ?>
                <tr>
                
                <td><?php echo $key->nombre ?></td>
                <td><?php echo $key->descripcion ?></td>
                <td><?php echo $key->fecha ?></td>

                <td>
                <a href="<?php echo base_url().'/obtenerdatos1/'.$key->id_categoria ?>" class="btn btn-warning btn-sm">Editar</a> 
                
                </td>
                <td>
                <a href="<?php echo base_url().'/eliminar1/'.$key->id_categoria ?>" class= "btn btn-danger btn-sm">Eliminar</a>
                </td>
                <?php endforeach; ?>

                </tr>

                </tbody>

		
	</table>

</div>


<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>

<script type="text/javascript">
			$(document).ready(function() {
				$('#iddatatable').DataTable();
			});


      </script>
		
                
                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                    <script src="librerias/jquery.min.js"></script>
<script src="librerias/bootstrap/popper.min.js"></script>
<script src="librerias/bootstrap/bootstrap.min.js"></script>
<script src="librerias/datatable/jquery.dataTables.min.js"></script>
<script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>
<script src="librerias/alertify/alertify.js"></script>
                
                    <script type="text/javascript"> 
		let mensaje = '<?php echo $mensaje ?>';

		if(mensaje == '1'){
			swal('😃','Agregado con exito', 'success');
			
		}else if(mensaje == '0'){

			swal('🙁','Falló al agregar', 'error');
			
		}else if(mensaje == '2'){

			swal('xD','Actualizado correctamente', 'success');

		}else if(mensaje == '3'){

			swal('🙁','Falló al actualizar', 'error');

		}else if(mensaje == '4'){

			swal('xD','Eliminado con exito', 'success');

		}else if(mensaje == '5'){

			swal('🙁','Falló al eliminar', 'error');

		}


                   
    

            

                

                
                
                </script>






</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
 
 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url();?>plantilla/js/buscar.js"></script>





  </body>
</html>
