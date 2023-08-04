<?php
class Modelo{

    private $modelo;

    public function Inicializar($modelo){
        $this->modelo= $modelo;

    }

    public function conectarBD(){

        $con=mysqli_connect("localhost","root","","carshop") 
        or die ("Problemas con la conexion de la base de datos"); 
        return $con;

    }


    public function llenarListaMarca($id_marca = 0){

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $registros=mysqli_query($this->conectarBD(),"SELECT * FROM marca ")or die("Error en la consulta".mysqli_error($this->conectarBD()));
            while($reg=mysqli_fetch_array($registros)){
                $seleccionado = '';
                if($reg[0] == $id_marca){
                    $seleccionado = 'selected';
                }

                echo"<option value='$reg[0]' $seleccionado > $reg[1] </option>";
            }
            echo"<br>";
    }
}


?>