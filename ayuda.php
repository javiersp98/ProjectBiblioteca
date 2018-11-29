<html>
<head>
    <!--TITULO DE LA PAGINA-->
    <title>PBDM - Ayuda</title>    
    <!--CSS-->
    <link href="css/ayuda.css" rel="stylesheet" type="text/css"/>
    <!--BOOTSRAP-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>    
<body>

    <!--BARRA SUPERIOR-->
    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">PBDM Online</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php">Home</a></li>
                <li><a href="libros.php">Libros</a></li>
                <li><a href="vinilos.php">Vinilos</a></li>
            </ul>
        </div>
    </nav>

    <!--BARRA INFERIOR-->
    <nav class="navbar navbar-fixed-bottom navbar-inverse">
        <div class="container-fluid">        
            <ul class="nav navbar-nav navbar-left">
                <li><a href="opciones.php">Opciones</a></li>
                <li class="active"><a href="ayuda.php">Ayuda</a></li>               
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><?php //echo $_SESSION['username']; ?></a></li>
            </ul>
        </div>
    </nav>
    
    <!--TEXTO PRINCIPAL-->
    <div class="texto">
        
        <h3>Introducción</h3>
        PBDM (PHP Book and Disc Manager) es la aplicación web que estás usando ahora mismo.
        Entre sus funciones destacan poder crear, editar y borrar registros de libros y discos de
        música de una única base de datos.
        
        <br>
        <h3>Menú Home</h3>
        Este es el lugar donde comienzas una vez te has logueado en la aplicación. Sus funciones son
        contener los accesos a las demás partes de la aplicación y avisar de cómo estará el tiempo
        mañana para prevenir que los usuarios pillen un resfriado.
        
        <br>
        <h3>Menú Libros/Vinilos</h3>
        La zona más frecuentada de la aplicación, pues es la que permite trabajar con la base de datos.
        Contiene varios botones de vital importancia
        <br> · Crear: Al pulsarlo abre una ventana en la que puedes crear nuevos libros o discos.
        <br> · Editar: Permite editar o realizar cambios a un registro creado anteriormente.
        <br> · Borrar: Elimina el registro seleccionado. No es reversible, si borras el que no es
        y la pifias ten más cuidado la próxima :)
        
        <br>
        <h3>Menú Opciones</h3>
        Aún en construcción...
        
        <br>
        <h3>Menú Ayuda</h3>
        ¿Este no hará falta explicarlo no?
        
        <br>
        <h3>Nota del Desarrollador</h3>
        PBDM fue diseñado únicamente para hacer las funciones descritas aquí arriba.
        El desarrollador no responderá ante cualquier queja en la que se transmita que
        el programa no hace algo que no esté especificado arriba.
        
    </div>

</body>
</html>