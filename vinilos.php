<html>
<head>
    <!--TITULO DE LA PAGINA-->
    <title>PBDM - Vinilos</title>
    <!--CSS-->
    <link href="css/libros.css" rel="stylesheet" type="text/css"/>
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
        <li class="active"><a href="vinilos.php">Vinilos</a></li>
    </ul>
</div>
</nav>

<!--BARRA INFERIOR-->
<nav class="navbar navbar-fixed-bottom navbar-inverse">
<div class="container-fluid">        
    <ul class="nav navbar-nav navbar-left">
        <li><a href="opciones.php">Opciones</a></li>
        <li><a href="ayuda.php">Ayuda</a></li>                
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php //echo $_SESSION['username']; ?></a></li>
    </ul>
</div>
</nav>

<!--CREAR-->
<button type="button" class="btn btn-primary separar" data-toggle="modal" data-target="#modal_anadir">
  Crear
</button>
<!--MODAL CREAR-->
<div class="modal fade" id="modal_anadir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear un nuevo Vinilo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--FORMULARIO CREAR DATOS-->
        <form action="functions/vinilo_crear.php" method="POST">                    
            T&iacute;tulo<br>
            <input type="text" class="form-control form-space" name="input-titulo" value="" />
            Autor<br>
            <input type="text" class="form-control form-space" name="input-autor" value="" />
            Discogr&aacute;fica<br>
            <input type="text" class="form-control form-space" name="input-discografica" value="" />
            Estilo<br>
            <input type="text" class="form-control form-space" name="input-estilo" value="" />
            A&ntilde;o<br>
            <input type="text" class="form-control form-space" name="input-ano" value="" />
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="reset"  class="btn btn-danger">Limpiar</button>
                <button type="submit" class="btn btn-success">Crear</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!--RESULTADOS BD-->
<table class="table table-striped">
    <thead>
    <tr>
        <th>Id</th>
        <th>T&iacute;tulo</th>
        <th>Autor</th>        
        <th>Discogr&aacute;fica</th>
        <th>Estilo</th>
        <th>A&ntilde;o</th>
    </tr>
    </thead>
<?php
// Conectamos con la BD
include "db_functions/connect.php";
// Consulta a la BD
$res = mysql_query("SELECT * FROM vinilo")
or die(mysql_error());
while($row = mysql_fetch_array( $res )) {?>

<tr>    
    <td><?php echo $row['id'];?></td>    
    <td><?php echo $row['titulo'];?></td>
    <td><?php echo $row['autor'];?></td>
    <td><?php echo $row['discografica'];?></td>
    <td><?php echo $row['estilo'] ;?></td>
    <td><?php echo $row['ano'];?></td>
    
    <!--EDITAR-->
    <td>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_editar_<?php echo $row['id'] ;?>">
        Editar
        </button>
        <!--MODAL EDITAR-->
        <div class="modal fade" id="modal_editar_<?php echo $row['id'] ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Edición de artículo</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <!--FORMULARIO EDITAR DATOS-->                        	
                    <form action="functions/vinilo_editar.php" method="POST">
                        Id<br>
                        <input type="text" class="form-control form-space" name="input-id" value="<?php echo $row['id']?>" readonly/>
                        T&iacute;tulo<br>
                        <input type="text" class="form-control form-space" name="input-titulo" value="<?php echo $row['titulo']?>" />
                        Autor<br>
                        <input type="text" class="form-control form-space" name="input-autor" value="<?php echo $row['autor']?>" />
                        Discogr&aacute;fica<br>
                        <input type="text" class="form-control form-space" name="input-discografica" value="<?php echo $row['discografica']?>" />
                        Estilo<br>
                        <input type="text" class="form-control form-space" name="input-estilo" value="<?php echo $row['estilo']?>" />
                        A&ntilde;o<br>
                        <input type="text" class="form-control form-space" name="input-ano" value="<?php echo $row['ano']?>" />

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>                                    
                          <button type="submit" class="btn btn-warning">Editar</button>
                        </div>
                    </form>
              </div>
            </div>
          </div>
        </div>        
    </td>
	
    <!--BORRAR CON CONFIRMACIÓN-->
    <td>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_borrar_<?php echo $row['id'] ;?>">
        Borrar
        </button>
        <!--MODAL BORRAR-->
        <div class="modal fade" id="modal_borrar_<?php echo $row['id'] ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">¿Seguro que desea borrar el libro?</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">                
                Borrar este art&iacute;culo será irreversible.		
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>						
                  <?php echo '<a href="functions/vinilo_borrar.php?id=' . $row['id'] . '" class="btn btn-danger">Borrar</a>'; ?>
                </div>
              </div>
            </div>
          </div>
        </div>		
    </td>
	
    <!--BORRAR SIN CONFIRMACIÓN-->
    <td>
        <?php // echo '<td><a href="vinilo_borrar.php?id=' . $row['id'] . '" class="btn btn-danger">Borrar</a></td>'; ?>
    </td>   
</tr>

<?php } ?>
 
</table>
</body>
</html>