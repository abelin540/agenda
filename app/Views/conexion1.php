
<?php 

class conectar{
    public function conexion1(){
        $conexion=mysqli_connect('localhost',
                                    'root',
                                    '',
                                    'agenda');
        return $conexion;
    }
}


?>