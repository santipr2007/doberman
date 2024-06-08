<?php 
    require '../php/constants.php';

    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_PORT);

    if($conn->connect_error){
        echo "error de conexion ";
        die("Connection failed: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre_vacuna'];
    $descripcion = $_POST['descripcion_vacuna'];

    $sql = "INSERT INTO vacunas (nombre, descripcion) VALUES ('$nombre', '$descripcion')";

    if($conn->query($sql) === TRUE){
        header("Location: /");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>