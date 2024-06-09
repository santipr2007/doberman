<?php 
    require '../php/constants.php';

    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

    if($conn->connect_error){
        echo "error de conexion ";
        //header("Location:$BASE_URL/vacunas");
        die("Connection failed: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre_cliente'];
    $correo = $_POST ['correo'];
    $telefono = $_POST ['telefono'];

    $sql = "INSERT INTO cliente (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";

    if($conn->query($sql) === TRUE){
        echo("Location: /clientes");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>