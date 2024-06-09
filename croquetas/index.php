<?php
    require_once '../php/head.php';
    require_once '../php/navbar.php';
    require_once '../php/constants.php';

    function getCroquetas() {
        $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
        if(!$conn) {
            die('Connection failed: ' . $conn->connect_error);
        }
    
        $sql = 'SELECT * FROM croquetas ORDER BY marca ASC';
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['marca'] . '</td>';
                echo '<td>' . $row['tipo'] . '</td>';
                echo '<td>' . $row['precio'] . '</td>';
                echo '<td>';
                echo '<a class="m-2" href="edit.php?id=' . $row['id'] . '">Editar</a>';
                echo '<a class="m-2" href="delete.php?id=' . $row['id'] . '">Eliminar</a>';
                echo '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="4">No hay croquetas registradas';
            echo '<a href="create.php">Registrar croquetas</a>';
            echo '</td></tr>';
        }
        $conn->close();
    }
    
?>
    <main class="container mt-5">
        <h1>Croquetas registradas</h1>
        <!-- make a table with two columns Nombre and Descripción -->
        <button class="btn btn-primary m-3"><a href="./registro_croquetas.php">Registrar croquetas</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>marca</th>
                    <th>tipo</th>
                    <th>precio</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php getCroquetas(); ?>
            </tbody>
        </table>
    </main>
<?php
    require_once '../php/footer.php';
?>