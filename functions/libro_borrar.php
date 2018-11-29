<?php

// Conectamos con la base de datos
include('../db_functions/connect.php');

// Obtenemos el ID del registro a borrar
$id = $_GET['id'];

// Borramos el registro
$result = mysql_query("DELETE FROM library.libro WHERE id=$id")
or die(mysql_error());

// Volvemos a libros.php tras terminar el borrado
header("Location: ../libros.php");

?>