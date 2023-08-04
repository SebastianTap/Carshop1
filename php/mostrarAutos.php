<?php
class Vehiculo{
    private $marca;
    private $modelo;
    private $año;
    private $precio;
    private $direccion;
    private $descripcion;
    private $niv;
    private $foto;
    

    public function Inicializar($marca, $modelo, $año, $precio, $direccion, $descripcion, $niv, $foto){
        $this -> marca = $marca;
        $this -> modelo = $modelo;
        $this -> año = $año;
        $this -> precio = $precio;
        $this -> direccion = $direccion;
        $this -> descripcion = $descripcion;
        $this -> niv = $niv;
        $this -> foto = $foto;
    }
    public function conectarBD(){

        $con=mysqli_connect("localhost","root","","carshop") 
        or die ("Problemas con la conexion de la base de datos"); 
        return $con;

    }
    public function SubirAuto(){

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $agregar=mysqli_query($this -> conectarBD(),"select * from inventario where niv='".$this->niv."'") 
        or die (mysqli_error($this -> conectarBD()));

        if($agre=mysqli_fetch_array($agregar)){
            echo "El registro ya existe";
        }else{
        
            mysqli_query($this->conectarBD(), "INSERT INTO inventario (marca, modelo, ano, precio, direccion, descripcion, niv, foto) VALUES 
            ('$this->marca','$this->modelo','$this->año','$this->precio','$this->direccion','$this->descripcion', '$this->niv', '$this->foto')" ) or 
            die("Problemas en el insert ".mysqli_error($this->conectarBD()));
            echo 'El registro a sido exitoso';
        }
    }

    public function llenarListaMarca($id_marca = 0){

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $registros=mysqli_query($this->conectarBD(),"select * from marca ")or die("Error en la consulta".mysqli_error($this->conectarBD()));
            while($reg=mysqli_fetch_array($registros)){
                $seleccionado = '';
                if($reg[0] == $id_marca){
                    $seleccionado = 'selected';
                }

                echo"<option value='$reg[0]' $seleccionado > $reg[1] </option>";
            }
            echo"<br>";
    }

    public function llenarListaModelo($id_modelo = 0,$id_marca){
        $registros=mysqli_query($this->conectarBD(),"SELECT * FROM modelos")or die("Error en la consulta".mysqli_error($this->conectarBD()));
            while($reg=mysqli_fetch_array($registros)){
                $seleccionado = '';
                if($reg[0] == $id_modelo ){
                    if($reg[0]==$id_marca){
                        $seleccionado = 'selected';

                    }
                    
                    
                }
                echo"<option value='$reg[0]' $seleccionado>$reg[1]</option>";

            }
            echo"<br>";
    }

    public function listarVehiculo(){

        $registro = mysqli_query($this -> conectarBD(), "select vh.id_veh, ma.marca, mo.modeloA, vh.ano, vh.precio,vh.direccion, vh.descripcion,vh.foto from inventario as vh inner join marca as ma on ma.id = vh.marca inner join modelos as mo on mo.id_M = vh.modelo order by vh.id_veh;")
        or die ("Error en la consulta".mysqli_error($this -> conectarBD()));

        echo '<table >';

        echo '<thead><tr><th>ID</th><th>Marca</th><th>Modelo</th><th>Año</th><th>Precio</th><th>Dirección</th><th>Descripción</th><th>Foto</th><th>Accion</th></tr></thead><tbody>';

        while ($reg=mysqli_fetch_array($registro)){
            echo '<tr><td>'.$reg['id_veh'].'</td>'; 
            echo '<td>'.$reg['marca'].'</td>';
            echo '<td>'.$reg['modeloA'].'</td>';
            echo '<td>'.$reg['ano'].'</td>';	 
            echo '<td>'.$reg['precio'].'</td>';
            echo '<td>'.$reg['direccion'].'</td>';
            echo '<td>'.$reg['descripcion'].'</td>';	 
            echo '<td><img src="data:image/jpeg;base64,'.base64_encode($reg['foto']).'"/></td>';	
            echo '<td>
            <span class="botonAccion">
                <a href="modificaVehiculo_vend.php?id='.$reg['id_veh'].'">Editar</a>
                <a href="borrarVehiculo.php?id='.$reg['id_veh'].'">Eliminar</a>
            </span>
        </td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    }

    public function listarVehiculoCards(){

        $registro = mysqli_query($this -> conectarBD(), "select vh.id_veh, ma.marca, mo.modeloA, vh.ano, vh.precio,vh.direccion, vh.descripcion,vh.foto from inventario as vh inner join marca as ma on ma.id = vh.marca inner join modelos as mo on mo.id_M = vh.modelo order by vh.id_veh;")
        or die ("Error en la consulta".mysqli_error($this -> conectarBD()));

        echo '<div class="contenedora">'; 

        $i = 1;
        while ($reg=mysqli_fetch_array($registro)){


            echo '<div class="carta">'; 
            echo '    <figure>'; 
            echo '        <img src="data:image/jpeg;base64,'.base64_encode($reg['foto']).'">'; 
            echo '    </figure>'; 
            echo '    <div class="contenido">'; 
            echo '        <h3><b>Marca: '.$reg['marca'].'</b></h3>';
            echo'       <p>Modelo: '.$reg['modeloA'].'</p>';
            echo'        <p>Precio: $'.$reg['precio'].'</p>';
            echo'       <p>Año: '.$reg['ano'].'</p>';
            echo'       <p>Direccion: '.$reg['direccion'].'</p>';
          //  echo'       <p>Descripcion: '.$reg['descripcion'].'</p>';
            echo '        <form action="../html/inicioSesion.html">'; 
            echo '        <input class="botonsP" id="boton" type="submit" value="Mas información">'; 
            echo '        </form>'; 
            echo '    </div>'; 
            echo ' </div>'; 
 
            if($i == 3){
                echo '</div><div class="contenedora">';
                $i=1;
            }

            $i = $i + 1;
        }

        echo '</div>';
    }

    public function borrarVehiculo($id_veh){ 
        mysqli_query($this -> conectarBD(), "delete from inventario where id_veh = $id_veh") or die(mysqli_error($this -> conectarBD()));
    } 

    public function modificaVehiculo($id_veh){

        $registro=mysqli_query($this->conectarBD(),"SELECT * FROM inventario WHERE id_veh='$id_veh'") 
        or die("Problemas en el select".mysqli_error($this->conectarBD()));
        if ($reg=mysqli_fetch_array($registro)){
            echo'<form action="actualizarVehiculo_vend.php" method="post" enctype="multipart/form-data">
            <div id="columna1">
                <br>
                <br>';
            echo'Marca
            <select name="marca" id="">';                
                     
                    $this->llenarListaMarca($reg['marca']); 
            echo'</select>';
            echo'Submarca
            <select name="modelo" id="">';
                
            $this->llenarListaModelo($reg['modelo']);
                 
            echo'</select>
            <br><br>
            <input type="hidden" name="id_veh" value="'.$reg['id_veh'].'">
            <br><br>
            Año
            <input class="controlsP" type="number" name="ano" placeholder="año" required value="'.$reg['ano'].'">
            Precio
            <input class="controlsP" type="number" name="precio" placeholder="Precio" required value="'.$reg['precio'].'">
            Dirección
            <input class="controlsP" type="text" name="direccion" placeholder="Dirección" required value="'.$reg['direccion'].'">
            </div>
            <div id="columna2">
                <br>
                <br>
                Descripción
                <input class="controlsP" type="text" name="descripcion" placeholder="Descripción" required value="'.$reg['descripcion'].'">
                Niv/Vin
                <input class="controlsP" type="text" name="niv" placeholder="Niv/Vin" required value="'.$reg['niv'].'">
                Foto
                <br>
                <input  type="file" name="imagen" placeholder="imagen"  required><br><br>               
                <input class="botonsP" id="boton" type="submit" value="Aceptar">
            </div>   
            </form> ';            
        }
    }

    Public function actualizarVehiculo($id_veh, $marca, $modelo, $año, $precio, $direccion, $descripcion, $foto, $niv ){ 
        $registros=mysqli_query($this->conectarBD(),"UPDATE inventario 
        SET id_veh = '$id_veh', marca = '$marca', modelo = '$modelo', ano = '$año', precio = '$precio', direccion = '$direccion', descripcion = '$descripcion', foto = '$foto', niv = '$niv' WHERE  id_veh='$id_veh'") or die("Error en la sentencia.<br>".mysqli_error($this->conectarBD())); 
    }

    public function cerrarBD(){
        mysqli_close($this->conectarBD());
    }
}
?>