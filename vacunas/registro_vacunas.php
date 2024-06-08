<?php require '../php/head.php' ?>
<?php require '../php/navbar.php' ?> 


<form class="registro-clientes container">
<div class="form-group">
    <label for="exampleInputname ">nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Name de vacuna" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">descripcion</label>
    <input type="text" class="form-control" id="vacunas " aria-describedby="vacunas" placeholder="Enter descripcion">
    <small id="emailHelp" class="form-text text-muted">ingresa la descripcion de las vacunas.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






<?php require '../php/footer.php' ?>