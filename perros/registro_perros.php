<?php 
require '../php/head.php'; 
require '../php/navbar.php'; 
require '../php/constants.php';

function getCroquetas() {
    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
    $sql = "SELECT * FROM croquetas";
    $result = $conn->query($sql);
    $croquetas = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $croquetas[] = $row;
        }
    }
    $conn->close();
    return $croquetas;
}

function getClientes () {
    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
    $sql = "SELECT * FROM cliente ORDER BY nombre ASC";
    $result = $conn->query($sql);
    $clientes = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $clientes[] = $row;
        }
    }
    $conn->close();
    return $clientes;

}

function getVacunas() {
    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
    $sql = "SELECT id, nombre FROM vacunas";
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

<form class="registro-clientes container mt-5 mb-5"
    action="<?php echo BASE_URL ?>/perros/alta.php" 
    method="post">
  <div class="form-group">
    <label for="exampleInputname ">Nombre del cachorro</label>
    <input type="text" class="form-control" id="nombre" placeholder="Nombre del perro" name="nombre_perro">
  </div>
  <div class="form-group">
    <label for="dueno">Dueño</label>
    <?php
    $clientes = getClientes();
    if(count($clientes) > 0) {
        echo '<select class="form-control" id="dueno" name="dueno">';
        foreach($clientes as $cliente) {
            echo '<option value="'.$cliente['id'].'">'.$cliente['nombre'].'</option>';
        }
        echo '</select>';
    } else {
        echo '<p>No hay clientes registrados</p>';
        echo '<a href="'.BASE_URL.'/clientes/registro_clientes.php">Click aquì para registrar clientes</a>';
    }
   ?>
  </div>
  <div class="form-group">
    <label for="exampleInputname ">edad</label>
    <input type="number" class="form-control" id="edad" placeholder="edad"  name = "edad">
  </div>
  <div class="form-group">
    <label for="alimento">Qué alimento le das a tu perro?</label>
    <div class="container row">
        <?php
        $croquetas = getCroquetas();
        if(count($croquetas) > 0) {
            foreach($croquetas as $croqueta) {
                echo '<div class="col-md-3">';
                echo '<div class="custom-control custom-radio custom-control-inline">';
                echo '<input type="radio" id="'.$croqueta['id'].'" name="croquetas" value="'.$croqueta['id'].'" class="custom-control-input">';
                echo '<label class="custom-control-label" for="'.$croqueta['id'].'">'.$croqueta['marca'].'</label>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No hay croquetas registradas</p>';
            echo '<a href="'.BASE_URL.'/croquetas/registro_croquetas.php">Click aquì para registrar croquetas</a>';
        }
        ?>
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputname ">¿Qué vacunas tiene tu perro?</label>
    <?php 
      $vacunas = getVacunas();
      if(count($vacunas) > 0) {
        foreach($vacunas as $vacuna) {
            echo '<div class="custom-control custom-checkbox">';
            echo '<input type="checkbox" class="custom-control-input"
                   id="v-'.$vacuna['id'].'" 
                   name="vacunas[]" value="'.$vacuna['id'].'">';
            echo '<label class="custom-control-label" 
                  for="v-'.$vacuna['id'].'">'.$vacuna['nombre'].'</label>';
            echo '</div>';
        }
      } else {
        echo '<p>No hay vacunas registradas</p>';
        echo '<a href="'.BASE_URL.'/vacunas/registro_vacunas.php">Click aquì para registrar vacunas</a>';
      }
    ?>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">fecha de desparacitacion</label>
    <input type="date" class="form-control" id="fecha_desparacitacion " aria-describedby="desparacitacion" placeholder="ingresa la fecha de desparacitacion" name ="fecha">
  </div>
  <div class="form-group">
    <p>Tiene pedegree?</p>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="yes" name="pedegree" class="custom-control-input" value=1>
      <label class="custom-control-label" for="yes">Si</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="no" name="pedegree" class="custom-control-input" value=0>
      <label class="custom-control-label" for="no">No</label>
    </div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>






<?php require '../php/footer.php' ?>