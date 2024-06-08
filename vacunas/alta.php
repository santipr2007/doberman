<?php 
    $servername = "localhost";
    $username = "admin";
    $password = "123456789";
    $dbname = "doberma";
    $port = 3306;

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if($conn->connect_error){
        echo "error de conexion ";
        //header("Location:$BASE_URL/vacunas");
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