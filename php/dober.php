<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php
    $nombredue=$_POST["nombre1"];
    $nombre=$_POST["nombre"];
    $edad=$_POST["edad"];
    $genero=$_POST["sexo"];
    $croquetas=$_POST["croque"];
    $baño=$_POST["bano"];
    $vacunas=$_POST["vacuna"];
    $desparacitacion=$_POST["despa"];
    $pedigree=$_POST["pedigree"];
    echo"Nombre del dueño: ".$nombredue."<br>";
    echo " <br>";
    echo"Nombre de la mascota: ".$nombre."<br>";
    echo " <br>";
    echo"Edad de la mascota: ".$edad."<br>";
    echo " <br>";
    echo"Genero de la mascota: ".$genero."<br>";
    echo " <br>";
    echo " le das croquetas: ";
    if (isset($_POST["seL1"])){
        $sel1=$_POST["seL1"];
        echo " $sel1,  "; 
    }	
    if (isset($_POST["seL2"])){
        $sel2=$_POST["seL2"];
        echo " $sel2, ";  			
    }
    if (isset($_POST["seL3"])){
        $sel3=$_POST["seL3"];
        echo " $sel3, "; 
    }
    if (isset($_POST["seL4"])){
        $sel4=$_POST["seL4"];
        echo " $sel4, "; 
    }
    echo " <br>";
    echo " <br>";
    echo"Lo bañas cada: ".$baño."<br>";
    echo " <br>";
    echo"vacunas: ".$vacunas."<br>";
    echo " <br>";
    echo"Lo desparacitas cada: ".$desparacitacion."<br>";
    echo " <br>";
    echo"Pedigree: ".$pedigree."<br>";
    
?>
</div>
<img src="doberman echado.jpeg" class="imagen">
    
</body>
</html>