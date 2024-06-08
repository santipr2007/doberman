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

    $nombre = $_POST['nombre_perro'];
    $edad = $_POST ['edad'];
    $fecha = $_POST ['fecha'];
    $pedigree = $_POST ['pedigree'];

    $sql = "INSERT INTO perros (nombre, edad, fecha, pedigree) VALUES ('$nombre', '$edad', '$fecha', '$pedigree')";

    if($conn->query($sql) === TRUE){
        header("Location: /perros");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
?>