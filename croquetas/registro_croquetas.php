<?php require '../php/head.php' ?>
<?php require '../php/navbar.php' ?> 


<form class="registro-clientes container"action="<?php echo BASE_URL ?>/croquetas/alta.php" method="post">
<div class="form-group">
    <label for="exampleInputname ">marca</label>
    <input type="text" class="form-control" id="marca" placeholder="Marca" name="marca">
  </div>
  <div class="form-group">
    <label for="exampleInputname ">tipo</label>
    <input type="text" class="form-control" id="tipo" placeholder="Tipo" name="tipo">
  </div>
  <div class="form-group">
    <label for="exampleInputname ">precio</label>
    <input type="text" class="form-control" id="precio" placeholder="Precio" name="precio">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>






<?php require '../php/footer.php' ?>