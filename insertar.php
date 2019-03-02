<?php
 $imagen = $_FILES['imagen']['name'];


 $datos = array(
  $_POST['nombre'],
  $_POST['sexo'],
  $_POST['marca'],
  $_POST['vehiculo'],
  $imagen

 );

 var_dump($datos);

 //inserta  perro :v 
 
 $cn = new mysqli("localhost","root","","example");

 $query = "insert into c(nombre,sexo,marca,vehiculo,imagen) VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";


 return mysqli_query($cn,$query);


?>