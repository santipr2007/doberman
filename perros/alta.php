<?php 
    require '../php/constants.php';

    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

    if($conn->connect_error){
        echo "error de conexion ";
        header('Location:'.BASE_URL.'/perros');
        die("Connection failed: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre_perro'];
    $edad = $_POST ['edad'];
    $fecha = $_POST ['fecha'];
    $pedegree = $_POST ['pedegree'];
    $cliente = $_POST ['dueno'];
    $croquetas = $_POST ['croquetas'];
    $vacunas = $_POST ['vacunas'];


    $sql = "INSERT INTO perros (nombre, edad, fecha_desparacitacion, pedigree, id_cliente, id_croquetas) 
            VALUES ('$nombre', '$edad', '$fecha', '$pedegree','$cliente', '$croquetas')";

    if($conn->query($sql) === TRUE){
        $last_id = $conn->insert_id;
        foreach($vacunas as $vacuna){
            $sql = "INSERT INTO perros_vacunas (id_perro, id_vacunas) VALUES ('$last_id', '$vacuna')";
            if($conn->query($sql) !== TRUE){
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        header('Location: '.BASE_URL.'/perros');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
        
    $conn->close();
?>