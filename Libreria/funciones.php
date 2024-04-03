<?php

function salir(){

    session_destroy();
    cargar('Login.php');

}

//retorna los recursos para le sitio 
function base_url($path = '')
{
    return SERVER_URL . '/' . $path;
}


function cargar($url)
{
    $url = base_url($url);

    echo "
    <script>
        window.location ='{$url}';
    </script>
    ";
    exit();
}

function asig_inpt($label, $id, $valor = "", $extra = [])
{
    $type = "text";
    $placeholder = "";

    extract($extra);

    return <<<HTML
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">$label</span>
        <input type="$type" class="form-control" value="$valor" placeholder="$placeholder" name="$id" id="id$id" />
    </div>
    HTML;
}

function GUID()
{
    if (function_exists('com_create_guid') === true) {
        return trim(com_create_guid());
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

/**
 * Retorna el usuario actual 
 * @param boolean $redirect si es verdadero redirige a login.php si no hay usuario 
 */
function getuser($redirect = true)
{
    if (isset($_SESSION['pokeuser'])) {
        $temporal = $_SESSION['pokeuser'];

        $final = unserialize($temporal);

        return $final;
    }

    if ($redirect) {
        cargar('login.php');
    }

    return false;
}

function setuser($usuario){
    $_SESSION['pokeuser']= serialize($usuario);
}

class mensaje {
    public static function error($mensaje) {
        return "<div class='alert alert-danger' role='alert'>$mensaje</div>";
    }

    public static function success($mensaje) {
        return "<div class='alert alert-success' role='alert'>$mensaje</div>";
    }

    public static function warning($mensaje) {
        return "<div class='alert alert-warning' role='alert'>$mensaje</div>";
    }

    public static function info($mensaje) {
        return "<div class='alert alert-info' role='alert'>$mensaje</div>";
    }
}
