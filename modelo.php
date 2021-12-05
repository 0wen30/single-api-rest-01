<?php

header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

require_once 'db.php';

$conexion = new Conexion();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (isset($_GET['id'])) {
            $result = $conexion->consulta("SELECT * FROM personas WHERE id = $_GET[id]");
            echo json_encode($result->fetch_all(MYSQLI_ASSOC));
        } else {
            $result = $conexion->consulta("SELECT * FROM personas");
            echo json_encode($result->fetch_all(MYSQLI_ASSOC));
        }
        break;
    case 'POST':
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $ciudad = $_POST['ciudad'];
        $query = "INSERT INTO personas(nombre,edad,ciudad) values('$nombre','$edad','$ciudad')";
        $conexion->consulta($query);
        $result = $conexion->consulta("SELECT * FROM personas");
        echo json_encode($result->fetch_all(MYSQLI_ASSOC));
        break;
    case 'PUT':
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $ciudad = $_POST['ciudad'];
        $query = "UPDATE personas SET nombre = '$nombre', edad = '$edad', ciudad = '$ciudad' WHERE id = '$id'";
        $conexion->consulta($query);
        $result = $conexion->consulta("SELECT * FROM personas");
        echo json_encode($result->fetch_all(MYSQLI_ASSOC));
        break;
    case 'DELETE':
        $id = $_GET['id'];
        $query = "DELETE FROM personas WHERE id = $id";
        $conexion->consulta($query);
        $result = $conexion->consulta("SELECT * FROM personas");
        echo json_encode($result->fetch_all(MYSQLI_ASSOC));
        break;
}

?>