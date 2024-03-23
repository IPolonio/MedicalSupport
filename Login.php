<?php
require("Libreria/Principal.php");
define('DEFAULT_USER', 'admin');
define('DEFAULT_PASSWORD', 'admin');
define('ANOTHER_USER', 'maria');
define('ANOTHER_PASSWORD', '1234');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mensaje = "";
$user = new User();
if ($_POST) {
    $user = new User();
    $user->usuario = $_POST['username'];
    $user->password  = $_POST['password'];

    if (($user->usuario == DEFAULT_USER && $user->password == DEFAULT_PASSWORD)) {
            $user->usuario = "Default user";
            setuser($user);
            cargar('panel.php');
        
    } elseif ($user->usuario == ANOTHER_USER && $user->password == ANOTHER_PASSWORD) {
        $user->usuario = "Maria";
        setuser($user);
        cargar('personal.php');
    } else {
        $mensaje = mensaje::warning("La contraseña o el usuario es incorrecto");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="container mt-5">
        
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fa fa-user-circle fa-4x"></i>
                    </div>

                    <h4 class="card-title text-center">Iniciar sesión</h4>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario</label>
                            <input value="<?= $user->usuario; ?>" type="text" class="form-control" id="username" name="username" placeholder="Ingrese su nombre de usuario" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input value="<?= $user->password; ?>" type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
                            <div class="text-end">
                                <i class="far fa-eye-slash password-icon"></i>
                            </div>
                            <div><?= $mensaje    ?></div>

                        </div>
                        <button class="btn btn-primary w-100">Ingresar</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<h1 class="text-center">Medical Support <i class="fa fa-medkit"></i>
<script>
    const contrasinput = document.querySelector('#password')
    const contrasicon = document.querySelector('.password-icon');

    contrasicon.addEventListener('click', () => {
        if (contrasinput.type === 'password') {


            contrasinput.type = 'text';
            contrasicon.classList.remove('fa-eye-slash')
            contrasicon.classList.add('fa-eye')

        } else {
            contrasinput.type = 'password'
            contrasicon.classList.remove('fa-eye')
            contrasicon.classList.add('fa-eye-slash')
        }
    });
</script>
</body>

</html>