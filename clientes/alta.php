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