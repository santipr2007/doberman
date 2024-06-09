<?php require '../php/head.php' ?>
<?php require '../php/navbar.php' ?> 
<form class="registro-clientes container m-5" action="<?php echo BASE_URL ?>/vacunas/alta.php" method="post">
<div class="form-group">
    <label for="exampleInputname ">Nombre de la vacuna</label>
    <input type="text" class="form-control" id="nombre" placeholder="Name de vacuna" name="nombre_vacuna">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <input type="text" class="form-control" id="vacunas " aria-describedby="vacunas" placeholder="Enter descripcion" name="descripcion_vacuna">
    <small id="emailHelp" class="form-text text-muted">ingresa la descripcion de las vacunas.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






<?php require '../php/footer.php' ?>