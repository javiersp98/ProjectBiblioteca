<html>
<head>
    <!--TITULO DE LA PAGINA-->
    <title>PBDM - Opciones</title>
    <!--CSS-->
    <link href="css/opciones.css" rel="stylesheet" type="text/css"/>
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
                <li class="active"><a href="opciones.php">Opciones</a></li>
                <li><a href="ayuda.php">Ayuda</a></li>               
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><?php //echo $_SESSION['username']; ?></a></li>
            </ul>
        </div>
    </nav>

</body>
</html>
