<?php
session_start();
?>




<?php  
$_SESSION["usuario"] = $_POST['usuario'];
echo "Usuario: " .$_SESSION['usuario'];
echo "<a href='entrar.php'> Volver </a>"
?>
<a href='entrar.php'> Volver </a>

