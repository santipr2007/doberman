<?php 
    require '../php/constants.php';

    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
    if($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
        exit(0);
    }

    $id = $_GET['id'];
    $sql = "DELETE FROM cliente WHERE id = $id";

    if($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: ' . BASE_URL . '/clientes');
    } else {
        $conn->close();
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }

?>