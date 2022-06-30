 <?php
require 'conexion.php';

if(isset($_POST['guarda'])){

    $nombre = $_POST ['nombre']; 
    $apellidopaterno= $_POST['apellidopaterno']; 
    $apellidomaterno= $_POST['apellidomaterno'];
    $contenido= $_POST['contenido'];
    $telefono= $_POST['telefono'];
    $direccion= $_POST['direccion'];
    $fechas= $_POST['fechas'];
    $opcion= $_POST['opcion'];
    $correo= $_POST['correo'];
    $personal= $_POST['personal'];
    $servicio= $_POST['servicio'];

    
$consulta = $conexion->query("INSERT INTO familiar (id_usuario, opcion, nombre, apellidopaterno, apellidomaterno, contenido, telefono, direccion, fechas, correo,personal, servicio) VALUES (null,'$opcion','$nombre','$apellidopaterno','$apellidomaterno','$contenido', '$telefono','$direccion', '$fechas', '$correo','$personal','$servicio')");

if($consulta != false){
    
    echo '<script>alert("Dato guardado con exito")</script>';

    
    echo'<script>window.location.replace("http://localhost/Nuevproyect/Buz.php");</script>';

}else{
//mysqli_query($conexion, $consulta); 
//mysqli_close($conexion); 
}
}
?>