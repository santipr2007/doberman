<?php 
    $servername = "localhost";
    $username = "user";
    $password = "System32";
    $dbname = "doberman";
    $port = 3307;

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if($conn->connect_error){
        header('Location:$BASE_URL/vacunas');
        die("Connection failed: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre_vacuna'];
    $descripcion = $_POST['descripcion_vacuna'];

    $sql = "INSERT INTO vacunas (nombre, descripcion) VALUES ('$nombre', '$descripcion')";

    if($conn->query($sql) === TRUE){
        header('Location:$BASE_URL/vacunas');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    h
    
?>