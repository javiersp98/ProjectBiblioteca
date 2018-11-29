<?php

// Conecta con la BD
include('../db_functions/connect.php');

// Convierte los datos del formulario en variables PHP
$titulo = $_POST['input-titulo'];
$autor = $_POST['input-autor'];
$discografica = $_POST['input-discografica'];
$estilo = $_POST['input-estilo'];
$ano = $_POST['input-ano'];

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO vinilo (titulo, autor, discografica, estilo, ano)
VALUES ('$titulo', '$autor', '$discografica', '$estilo', '$ano')";

if (mysql_query($sql) === TRUE) {
    // Si todo sale bien vovlemos a Libros
    header("Location: ../vinilos.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql . "<br>" . $con->error;
}