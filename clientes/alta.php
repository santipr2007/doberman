<?php 
    require '../php/constants.php';
    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME, DB_PORT);
    if($conn->connect_error){
        echo "error de conexion ";
        die("Connection failed: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre_cliente'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO cliente (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";

    if($conn->query($sql) === TRUE){
        header("Location: /clientes");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>