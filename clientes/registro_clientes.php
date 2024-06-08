<?php require '../php/head.php' ?>
<?php require '../php/navbar.php' ?> 


<form class="registro-clientes container" action="<?php echo BASE_URL ?>/clientes/alta.php" method="post">
<div class="form-group">
    <label for="exampleInputname ">nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="nombre" name ="nombre_cliente">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">correo electronico</label>
    <input type="email" class="form-control" id="correo electronico " aria-describedby="emailHelp" placeholder="Enter email" name="correo">
    <small id="emailHelp" class="form-text text-muted">ingresa tu correo electronico.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputNumero">telefono </label>
    <input type="text" class="form-control" id="telefono" placeholder="telefono" name="telefono">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>






<?php require '../php/footer.php' ?>