<?php
    require_once '../php/head.php';
    require_once '../php/navbar.php';
    require_once '../php/constants.php';

    function getClientes() {
        $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
        if(!$conn) {
            die('Connection failed: ' . $conn->connect_error);
        }
    
        $sql = 'SELECT * FROM cliente ORDER BY nombre ASC';
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['nombre'] . '</td>';
                echo '<td>' . $row['correo'] . '</td>';
                echo '<td>' . $row['telefono'] . '</td>';
                echo '<td>';
                echo '<a class="m-2" href="baja.php?id=' . $row['id'] . '">Eliminar</a>';
                echo '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="4">No hay Clientes registrados';
            echo '<a href="create.php">Registrar cliente</a>';
            echo '</td></tr>';
        }
    }
    
?>
    <main class="container mt-5 mb-5">
        <h1>Clientes registrados</h1>
        <!-- make a table with two columns Nombre and Descripción -->
        <button class="btn btn-primary m-3"><a href="registro_clientes.php">Registrar cliente</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php getClientes(); ?>
            </tbody>
        </table>
    </main>
<?php
    require_once '../php/footer.php';
?>
