<html>
    
<!--BOOTSRAP y AJAX-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/login.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<form class="form-horizontal" method="post" action="db/db_logincheck.php">
	<div class="form-group">
    	<label class="control-label col-sm-2" for="email">Email:</label>
    	<div class="col-sm-3">
    	<input type="" class="form-control" id="input-user" name="input-user" placeholder="Introduce el usuario">
    	</div>
    </div>
  	<div class="form-group">
    	<label class="control-label col-sm-2" for="pwd">Password:</label>
    	<div class="col-sm-3 ">
      	<input type="password" class="form-control" id="input-password" name="input-password" placeholder="Introduce la contrase&ntilde;a">
    	</div>
  	</div>  
  	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-4">
      	<button type="submit" class="btn btn-default">Entrar</button>
    	</div>
  	</div>
</form>


    
</html>