<?php 
    require '../php/constants.php';

    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
    if($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
        exit(0);
    }

    $id = $_GET['id'];
    $sql = "DELETE FROM clientes WHERE id = $id";

    if($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: ' . BASE_URL . '/cliente');
    } else {
        $conn->close();
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }

?>