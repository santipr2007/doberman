<?php require '../php/head.php' ?>
<?php require '../php/navbar.php' ?> 


<form class="registro-clientes container">
<div class="form-group">
    <label for="exampleInputname ">nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">correo electronico</label>
    <input type="email" class="form-control" id="correo electronico " aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">ingresa tu correo electronico.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputNumero">telefono </label>
    <input type="text" class="form-control" id="telefono" placeholder="telefono">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>






<?php require '../php/footer.php' ?>