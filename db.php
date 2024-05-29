<?php
//paramaetros de conexión
$servername="localhost";
$username="cristina";
$password="1234"; 
$dbname="formacion";

//crear la conexión
$conn=new mysqli($servername,$username,$password,$dbname);

//comprobar la conexión
if($conn->connect_error){
    //la conexión ha ido mal
    die("Connection failed: ".$conn->connect_error);
}

//echo "La conexión ha sido un exito";