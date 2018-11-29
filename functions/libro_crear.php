<?php

// Conecta con la BD
include('../db_functions/connect.php');

// Convierte los datos del formulario en variables PHP
$isbn = $_POST['input-isbn'];
$titulo = $_POST['input-titulo'];
$autor = $_POST['input-autor'];
$editorial = $_POST['input-editorial'];
$tema = $_POST['input-tema'];
$ano = $_POST['input-ano'];

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO libro (isbn, titulo, autor, editorial, tema, ano)
VALUES ('$isbn', '$titulo', '$autor', '$editorial', '$tema', '$ano')";

if (mysql_query($sql) === TRUE) {
    // Si todo sale bien vovlemos a Libros
    header("Location: ../libros.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql . "<br>" . $con->error;
}