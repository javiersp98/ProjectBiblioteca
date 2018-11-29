<?php

include('../db_functions/connect.php');

// Convierte los datos del formulario en variables PHP
$id = $_POST['input-id'];
$isbn = $_POST['input-isbn'];
$titulo = $_POST['input-titulo'];
$autor = $_POST['input-autor'];
$editorial = $_POST['input-editorial'];
$tema = $_POST['input-tema'];
$ano = $_POST['input-ano'];

// Borramos el registro anterior
$sql = "DELETE FROM library.libro WHERE id=$id";
$result = mysql_query($sql) or die(mysql_error());

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO libro (id, isbn, titulo, autor, editorial, tema, ano)
VALUES ('$id', '$isbn', '$titulo', '$autor', '$editorial', '$tema', '$ano')";

if (mysql_query($sql) === TRUE) {
    // Si todo sale bien vovlemos a libros
    header("Location: ../libros.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Volvemos a libros.php tras terminar el borrado
header("Location: ../libros.php");