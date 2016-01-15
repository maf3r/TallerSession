

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset = "utf-8">
  <title>Formulario</title>	
</head
<body>
  
<div>
<?php
if (isset($_SESSION["usuario"])){
  echo "<p> Hola usuario: (" . $_SESSION["usuario"] . ") [<a href='salir.php'> Salir </a>]</p>";  
}
else{
  ?>
   <form action = "datos.php" method = "post">
   <fieldset>
    <label>Usuario</label>
    <input type = "text" name = "usuario"/> </br>
    <label>Contraseña</label>
    <input type = "text" name = "clave"/> </br>
    <button type = "submit">Enviar</button>
   </fieldset>
  </form>
<?php } ?>
</div>

</body>
</html> 
