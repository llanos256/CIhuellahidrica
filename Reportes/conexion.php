<?php
// datos de conexion a la BD
$user='root';
$password='';
$database='huellahidrica';
$host='localhost';
$mysqli = new mysqli($host,$user,$password,$database);
if($mysqli->connect_errno){
    echo "fallo en la conexión con MySQL:".$mysqli->connect_error;
}