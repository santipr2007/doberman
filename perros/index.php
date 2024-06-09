<?php
require '../php/constants.php';
require '../php/head.php';
require '../php/navbar.php';

function get_perros(){
    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
    $sql = "SELECT perros.id, perros.nombre, perros.edad, 
                perros.fecha_desparacitacion, perros.pedigree, 
                cliente.nombre as dueno, croquetas.marca as croquetas
            FROM perros
            JOIN cliente ON perros.id_cliente = cliente.id
            JOIN croquetas ON perros.id_croquetas = croquetas.id";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $perros = [];
        while($row = $result->fetch_assoc()){
            $perros[] = $row;
        }
        $conn->close();
        return $perros;
    } else {
        $conn->close();
        return [];
    }
    
}

function getVacunas($idPerro) {
    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
    $sql = "SELECT pv.id_vacunas, v.nombre FROM perros_vacunas pv
    INNER JOIN vacunas v ON pv.id_vacunas = v.id
    WHERE pv.id_perro = $idPerro";

    $result = $conn->query($sql);
    $vacunas = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $vacunas[] = $row;
        }
    }
    $conn->close();
    return $vacunas;

}

?>
<main class="container mt-5 mb-5">
        <h1>Vacunas registradas</h1>
        <!-- make a table with two columns Nombre and Descripción -->
        <button class="btn btn-primary m-3"><a href="registro_perros.php">Registrar perro</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Fecha desparacitada</th>
                    <th>Dueño</th>
                    <th>Croquetas</th>
                    <th>Pedegree</th>
                    <th>Vacunas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $perritos = get_perros(); ?>
                <?php if(count($perritos) > 0) { ?> 
                    <?php foreach($perritos as $perro) { ?>
                            <?php $vacunas = getVacunas($perro['id']); ?>
                        <tr>
                            <td><?= $perro['id']; ?></td>
                            <td><?= $perro['nombre']; ?></td>
                            <td>
                                <?php 
                                    echo $perro['edad'];
                                    echo " años"; 
                                ?>
                            </td>
                            <td><?= $perro['fecha_desparacitacion']; ?></td>
                            <td><?= $perro['dueno']; ?></td>
                            <td><?= $perro['croquetas']; ?></td>
                            <td><?= $perro['pedigree'] ? 'Sí' : 'No' ?></td>
                            <td><?= implode(', ', array_column($vacunas, 'nombre')) ?></td>
                            <!-- <td><?= json_encode($vacunas) ?></td> -->
                            <td>
                                <a class="m-2" href="edit.php?id=<?php echo $perro['id']; ?>">Editar</a>
                                <a class="m-2" href="baja.php?id=<?php echo $perro['id']; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } else {?>
                    <tr>
                        <td colspan="8">
                            No hay perros registrados
                            <a href="registro_perros.php">Registrar perro</a>
                        </td>
                    </tr>
                <?php } ?>




            </tbody>
        </table>
    </main>

<?php 
    require '../php/footer.php';
?> 
