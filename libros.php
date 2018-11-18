<html>  

<!--BOOTSRAP-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php //include "db/db_logincheck.php";?>

<!--BARRA SUPERIOR-->
<nav class="navbar navbar-fixed-top navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">PBDM Online</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">Home</a></li>
        <li class="active"><a href="libros.php">Libros</a></li>
        <li><a href="vinilos.php">Vinilos</a></li>
    </ul>
</div>
</nav>

<!--BARRA INFERIOR-->
<nav class="navbar navbar-fixed-bottom navbar-inverse">
<div class="container-fluid">        
    <ul class="nav navbar-nav navbar-left">
        <li><a href="#">Opciones</a></li>
        <li><a href="#">Ayuda</a></li>                
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php //echo $_SESSION['username']; ?></a></li>
    </ul>
</div>
</nav>


<table class="table table-striped">
  		<br><br><br>
		<thead>
		<tr>
			<th>Id</th>
			<th>Isbn</th>
			<th>T&iacute;tulo</th>
			<th>Autor</th>
			<th>Editorial</th>
			<th>Tema</th>
			<th>A&ntilde;o</th>			
		</tr>
		</thead>
<?php 
// Conectamos con la BD
include "db/db_connect.php";
// Consulta a la BD
foreach ($con->query('SELECT * from libro') as $row){?> 
<tr>
	<td>  <?php echo $row['id']        ?></td>
    <td>  <?php echo $row['isbn']      ?></td>
    <td>  <?php echo $row['titulo']    ?></td>
    <td>  <?php echo $row['autor']     ?></td>
    <td>  <?php echo $row['editorial'] ?></td>
    <td>  <?php echo $row['tema']      ?></td>
    <td>  <?php echo $row['ano']       ?></td>
 </tr>
<?php } ?>
</table>


</html>    