<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']=="POST") {
    echo "Creando contacto nuevo <BR>";
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $mensaje=$_POST['mensaje'];
    $correo=$_POST['correo'];


    echo "NOMBRE: ".$nombre."<br>";
    echo "TELEFONO: ".$telefono."<br>";
    echo "correo: ".$correo."<br>";
    echo "mensaje: ".$mensaje."<br>";
    $sql= "INSERT INTO contactos (nombre, telefono, correo, mensaje) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nombre, $telefono, $correo, $mensaje);
    $result = $stmt->execute();

    if ($result){
        $stmt->close();
        $conn->close();
        echo "CONTACTO CREANDO CON EXITO";
        header("Location: contacto.php?status=success&msg=Mensaje Guardado!");
    }else {
        echo "ERROR AL CREAR CONTACTO";
    }


}else{
    echo "ERROR EN METODO POST";
}
