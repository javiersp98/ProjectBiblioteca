<?php

// Si no est� logueado ejecuta credentials_check()
if ((strlen($_SESSION['username'])) == 0) {
    credentials_check();
}

if ((strlen($_SESSION['username'])) != 0) {
    var_dump($_SESSION['username']) ;
}


//credentials_check();

// Compara el usuario introducido con los de la bd
function credentials_check() {
    // Conecta con la BD
    include "connect_mysqli.php";
    // Convierte los datos del formulario en variables PHP
    $username = $_POST['input-user'];
    $password = $_POST['input-password'];
    
    // Enviamos la consulta, traeremos solo los valores que concuerden con los introducidos
    $sql = "SELECT usuario , contrasena FROM users WHERE usuario = '$username' AND contrasena = '$password'";
    $result = $con->query($sql);
    
    // Comprueba si hay escrito un usuario
    if ((strlen($username)) > 0) {
        // Comprueba que haya usuarios en la bd
        if ($result->num_rows > 0 ) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            // Compara el usuario y la contrase�a con cada fila de la bd
            if (($username == $row['usuario']) && ($password == $row['contrasena'])) {
                
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['start']    = time();
                $_SESSION['expire']   = $_SESSION['start'] + (5 * 60);
                
                // Redirige a la pagina home
                header('Location: ../home.php');
                
            } else {
                header('Location: ../login.php');
            }
        } else {
            header('Location: ../login.php');
        }
    } else {
        header('Location: ../login.php');
    }
}


// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "Usuario ".$row["usuario"]."Contrasena ".$row["contrasena"]."<br>";
//     }
// } else {
//     echo "0 results";
// }
