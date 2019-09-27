<!-- si la sesion existe redireccionar a index.php -->
<!DOCTYPE html>
<html lang="mx">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<link rel="stylesheet" href="css/login.css">
</head>

<body>
	<div class="login-page">
		<div class="form">
			<form class="login-form">
				<input type="text" name="name" placeholder="Usuario" autocomplete="on" />
				<input type="password" name="password" placeholder="Contraseña" />
				<input type="checkbox" name="checkbox" placeholder="recordar" />
				<button id="btn-login" type="button">Login</button>
			</form>
			<span class="alert alert-danger" id="error"></span>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
	<script src="js/login.js"></script>
</body>

</html>