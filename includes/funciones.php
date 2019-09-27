<?php
require_once 'Medoo.php';
require_once 'db.php';

if ($_POST) {
    switch ($_POST['accion']) {
        case 'login':
            login();
            break;
    }
}
function login()
{
    global $db;
    $respuesta = [];
    $usuario = $db->get("usuarios", "*", ["AND" => ["nombre" => $_POST['name'], "password"  => $_POST['password']]]);
    if ($usuario > 0) {
        $respuesta["status"] = 1;
        session_start();
        error_reporting(0);
       /*  $_SESSION['auth'] = $usuario["id,nombre,correo,status,nivel"]; */
        $_SESSION['id'] = $usuario["id"];
        $_SESSION['nombre'] = $usuario["nombre"];
        $_SESSION['correo'] = $usuario["correo"];
        $_SESSION['status'] = $usuario["status"];
        $_SESSION['nivel'] = $usuario["nivel"]; 
    } else {
        $respuesta["status"] = 0;
    }
    echo json_encode($respuesta);
}

