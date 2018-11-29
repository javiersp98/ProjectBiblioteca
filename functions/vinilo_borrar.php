<?php

// Conectamos con la base de datos
include('../db_functions/connect.php');

// Obtenemos el ID del registro a borrar
$id = $_GET['id'];

// Borramos el registro
$result = mysql_query("DELETE FROM library.vinilo WHERE id=$id")
or die(mysql_error());

// Volvemos a vinilos.php tras terminar el borrado
header("Location: ../vinilos.php");

?>