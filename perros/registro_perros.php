<?php require '../php/head.php' ?>
<?php require '../php/navbar.php' ?> 


<form class="registro-clientes container">
<div class="form-group">
    <label for="exampleInputname ">nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Nombre del perro" >
  </div>
  <div class="form-group">
    <label for="exampleInputname ">edad</label>
    <input type="text" class="form-control" id="edad" placeholder="edad" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">fecha de desparacitacion</label>
    <input type="date" class="form-control" id="fecha_desparacitacion " aria-describedby="desparacitacion" placeholder="ingresa la fecha de desparacitacion">
    <small id="emailHelp" class="form-text text-muted">ingresa la descripcion de la vacuna.</small>
  </div>
  <label for="exampleInputname ">pedigree</label>
    <input type="text" class="form-control" id="pedigree" placeholder="Tiene pedigree" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






<?php require '../php/footer.php' ?>