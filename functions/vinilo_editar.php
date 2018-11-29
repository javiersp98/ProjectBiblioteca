<?php

include('../db_functions/connect.php');

// Convierte los datos del formulario en variables PHP
$id = $_POST['input-id'];
$titulo = $_POST['input-titulo'];
$autor = $_POST['input-autor'];
$discografica = $_POST['input-discografica'];
$estilo = $_POST['input-estilo'];
$ano = $_POST['input-ano'];

// Borramos el registro anterior
$sql = "DELETE FROM library.vinilo WHERE id=$id";
$result = mysql_query($sql) or die(mysql_error());

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO vinilo (id, titulo, autor, discografica, estilo, ano)
VALUES ('$id', '$titulo', '$autor', '$discografica', '$estilo', '$ano')";

if (mysql_query($sql) === TRUE) {
    // Si todo sale bien vovlemos a vinilos
    header("Location: ../vinilos.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Volvemos a vinilos.php tras terminar el borrado
header("Location: ../vinilos.php");