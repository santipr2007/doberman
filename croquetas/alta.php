<?php 
    require '../php/constants.php';

    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

    if($conn->connect_error){
        echo "error de conexion ";
        //header("Location:$BASE_URL/vacunas");
        die("Connection failed: " . $conn->connect_error);
    }

    $marca = $_POST['marca'];
    $tipo = $_POST ['tipo'];
    $precio = $_POST ['precio'];

    $sql = "INSERT INTO croquetas (marca, tipo, precio) VALUES ('$marca', '$tipo', '$precio')";

    if($conn->query($sql) === TRUE){
        header("Location:" .BASE_URL."/croquetas");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>