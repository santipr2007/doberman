<?php
    require_once '../php/head.php';
    require_once '../php/navbar.php';
    require_once '../php/constants.php';

    function getVacunas() {
        $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
        if(!$conn) {
            die('Connection failed: ' . $conn->connect_error);
        }
    
        $sql = 'SELECT * FROM vacunas ORDER BY nombre ASC';
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['nombre'] . '</td>';
                echo '<td>' . $row['descripcion'] . '</td>';
                echo '<td>';
                echo '<a class="m-2" href="edit.php?id=' . $row['id'] . '">Editar</a>';
                echo '<a class="m-2" href="delete.php?id=' . $row['id'] . '">Eliminar</a>';
                echo '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="4">No hay vacunas registradas';
            echo '<a href="create.php">Registrar vacuna</a>';
            echo '</td></tr>';
        }
    }
    
?>
    <main class="container mt-5 mb-5">
        <h1>Vacunas registradas</h1>
        <!-- make a table with two columns Nombre and Descripción -->
        <button><a href="registro_vacunas.php">Registrar vacuna</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php getVacunas(); ?>
            </tbody>
        </table>
    </main>
<?php
    require_once '../php/footer.php';
?>
