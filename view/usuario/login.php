<?php
session_start();
require_once("c://xampp/htdocs/pruebaC/controller/usuarioController.php");

$obj= new usarioController();
$lista_usuarios = $obj->login(($_POST['usuario']),($_POST['contrasenia']));

if($lista_usuarios['n_usuario']>0){
		print_r("EL usuario y contraseña Existe");
	$_SESSION['usuario']=$lista_usuarios['usuario'];
	$_SESSION['logueado']=true;
	header("Location:/pruebaC/index.php");
}else{
	$mensaje="Error: El usuario o la contraseña incorrectos";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pruebaC/Css/login.css">
    <title>Login</title>
</head>
<body>

    <div class="login-box">
    <h2>Login</h2>

    <form autocomplete="off"  action="login.php" method="post">
        <div class="user-box">
        <input class="form-control" type="text" name="usuario" required>
        <label for="usuario" class="form-label">Usuario</label>
        </div>
        <div class="user-box">
        <input class="form-control" type="password" name="contrasenia" required>
        <label for="contrasenia" class="form-label">Password</label>
        </div>
        <button class="btn btn-primary" type="submit" >
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Entrar
</button >
    </form>
    </div>
</body>
</html>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pruebaC/Css/login2.css">
    <title>Login</title>
</head>
<body>
    
<h2>Weekly Coding Challenge #1: Sign in/up Form</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>

<script>

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
            

</body>
</html>
-->