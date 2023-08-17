<?php
include_once '../Models/Trabajador.php';
include_once '../Util//Config/config.php';
$trabajador = new Trabajador();
session_start();
if ($_POST['funcion'] == 'read_all_trabajadores') {
    $trabajador->read_all_trabajadores();
    $json = array();
    foreach ($trabajador->objetos as $objeto) {
        $json[] = array(

            'id' => openssl_encrypt($objeto->id, CODE, KEY),
            'user' => $objeto->user,
            'pass' => $objeto->pass,
            'nombres' => $objeto->nombres,
            'apellidos' => $objeto->apellidos,
            'dni' => $objeto->dni,
            'email' => $objeto->email,
            'telefono' => $objeto->telefono,
            'estado' => $objeto->estado
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if ($_POST['funcion'] == 'crear_trabajador') {
    $user = $_POST['user'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $trabajador->crear($user, $nombres, $apellidos, $dni, $email, $telefono);
    $json = array(
        'mensaje' => 'listo'
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if ($_POST['funcion'] == 'eliminar_trabajador') {
    $id_usuario=$_SESSION['id'];
    $formateado = str_replace(" ", "+", $_POST['id']);
    $id_trabajador = openssl_decrypt($formateado, CODE, KEY);
    $trabajador->eliminar_trabajador($id_trabajador);
    $mensaje='success';
    $json=array(
        'mensaje'=>$mensaje
    );
    $jsonstring=json_encode($json);
    echo $jsonstring;
}
if ($_POST['funcion'] == 'llenar_usuarios') {
    $trabajador->llenar_usuarios();
    foreach ($trabajador->objetos as $objeto) {
        $json[] = array(
            'id' => $objeto->id,
            'nombres' => $objeto->nombres,
            'apellidos' => $objeto->apellidos
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if ($_POST['funcion'] == 'llenar_usuarios_mod') {
    $trabajador->llenar_usuarios_mod();
    foreach ($trabajador->objetos as $objeto) {
        $json[] = array(
            'id' => $objeto->id,
            'nombres' => $objeto->nombres,
            'apellidos' => $objeto->apellidos
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}