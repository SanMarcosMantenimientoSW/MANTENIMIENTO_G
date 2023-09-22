<?php
include_once '../Models/Usuario.php';
include_once '../Util/Config/config.php';
$usuario = new Usuario();
session_start();
if ($_POST['funcion'] == 'login') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $usuario->verificar_usuario($user);
    if ($usuario->objetos != null) {
        $pass_bd = openssl_decrypt($usuario->objetos[0]->pass, CODE, KEY);
        if ($pass_bd == $pass) {
                $_SESSION['id'] = $usuario->objetos[0]->id;
                $_SESSION['user'] = $usuario->objetos[0]->user;
                $_SESSION['tipo_usuario'] = $usuario->objetos[0]->id_tipo;
                $_SESSION['avatar'] = $usuario->objetos[0]->avatar;
            echo 'logueado';
        }

    }

}
if ($_POST['funcion'] == 'verificar_sesion') {
    if (!empty($_SESSION['id'])) {
        $json[] = array(
            'id' => $_SESSION['id'],
            'user' => $_SESSION['user'],
            'tipo_usuario' => $_SESSION['tipo_usuario'],
            'avatar' => $_SESSION['avatar'],
        );
        $jsonstring = json_encode($json[0]);
        echo $jsonstring;
    } else {
        echo '';
    }
}
if ($_POST['funcion'] == 'verificar_usuario') {
    $username = $_POST['value'];
    $usuario->verificar_usuario($username);
    if ($usuario->objetos != null) {
        echo 'success';
    }
}
if ($_POST['funcion'] == 'registrar_usuario') {
    $username = $_POST['username'];
    $pass = openssl_encrypt($_POST['pass'], CODE, KEY);
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $usuario->registrar_usuario($username, $pass, $nombres, $apellidos, $dni, $email, $telefono);
    echo 'success';
}
if ($_POST['funcion'] == 'obtener_datos') {
    $usuario->obtener_datos($_SESSION['id']);
    foreach ($usuario->objetos as $objeto) {
        $json[] = array(
            'username' => $objeto->user,
            'nombres' => $objeto->nombres,
            'apellidos' => $objeto->apellidos,
            'dni' => $objeto->dni,
            'email' => $objeto->email,
            'telefono' => $objeto->telefono,
            'avatar' => $objeto->avatar,
        );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}
if ($_POST['funcion'] == 'editar_datos') {
    $id_usuario = $_SESSION['id'];
    $nombres = $_POST['nombres_mod'];
    $apellidos = $_POST['apellidos_mod'];
    $dni = $_POST['dni_mod'];
    $email = $_POST['email_mod'];
    $telefono = $_POST['telefono_mod'];
    $avatar = $_FILES['avatar_mod']['name'];
    $usuario->obtener_datos($id_usuario);
    $datos_cambiados='ha echo los siguientes cambios: ';
    if ($nombres!=$usuario->objetos[0]->nombres||$apellidos!=$usuario->objetos[0]->apellidos||$dni!=$usuario->objetos[0]->dni||$email!=$usuario->objetos[0]->email||$telefono!=$usuario->objetos[0]->telefono||$avatar!='') {
        if ($nombres!=$usuario->objetos[0]->nombres) {
            $datos_cambiados.='su nombre cambio de '.$usuario->objetos[0]->nombres.' a'.$nombres.', ';
        }
        if ($apellidos!=$usuario->objetos[0]->apellidos) {
            $datos_cambiados.='su apellido cambio de '.$usuario->objetos[0]->apellidos.' a'.$apellidos.', ';
        }
        if ($dni!=$usuario->objetos[0]->dni) {
            $datos_cambiados.='su dni cambio de '.$usuario->objetos[0]->dni.' a'.$dni.', ';
        }
        if ($email!=$usuario->objetos[0]->email) {
            $datos_cambiados.='su email cambio de '.$usuario->objetos[0]->email.' a'.$email.', ';
        }
        if ($telefono!=$usuario->objetos[0]->telefono) {
            $datos_cambiados.='su telefono cambio de '.$usuario->objetos[0]->telefono.' a'.$telefono.', ';
        }
        if ($avatar != '') {
            $datos_cambiados.='su avatar fue cambiado. ';
            $nombre = uniqid() . '-' . $avatar;
            $ruta = '../Util/Img/Users/' . $nombre;
            move_uploaded_file($_FILES['avatar_mod']['tmp_name'], $ruta);
            $usuario->obtener_datos($id_usuario);
            foreach ($usuario->objetos as $objeto) {
                $avatar_actual = $objeto->avatar;
                if ($avatar_actual != 'user_default.png') {
                    unlink('../Util/Img/Users/' . $avatar_actual);
                }
            }
            $_SESSION['avatar'] = $nombre;
        } else {
            $nombre = '';
        }
        $usuario->editar_datos($id_usuario, $nombres, $apellidos, $dni, $email, $telefono, $nombre);
        echo 'success';
    } else {
        echo 'danger';
    }
}
if ($_POST['funcion'] == 'cambiar_contra') {
    $id_usuario = $_SESSION['id'];
    $user = $_SESSION['user'];
    $pass_old = $_POST['pass_old'];
    $pass_new = $_POST['pass_new'];
    $usuario->verificar_usuario($user);
    if (!empty($usuario->objetos)) {
        $pass_bd = openssl_decrypt($usuario->objetos[0]->pass, CODE, KEY);
        if ($pass_bd==$pass_old) {
            $pass_new_encriptada=openssl_encrypt($pass_new, CODE, KEY);
            $usuario->cambiar_contra($id_usuario, $pass_new_encriptada);
            echo 'success';
        } else {
            echo 'error';
        }        
    } else {
        echo 'error';
    }
}
if ($_POST['funcion'] == 'read_all_trabajadores') {
    $usuario->read_all_trabajadores();
    $json = array();
    foreach ($usuario->objetos as $objeto) {
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
    $pass = $_POST['pass'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $usuario->crear($user, $pass, $nombres, $apellidos, $dni, $email, $telefono);
    $json = array(
        'mensaje' => 'listo'
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if ($_POST['funcion'] == 'eliminar_trabajador') {
    $formateado = str_replace(" ", "+", $_POST['id']);
    $id_usuario = openssl_decrypt($formateado, CODE, KEY);
    $usuario->eliminar_trabajador($id_usuario);
    $mensaje='success';
    $json=array(
        'mensaje'=>$mensaje
    );
    $jsonstring=json_encode($json);
    echo $jsonstring;
}
if($_POST['funcion'] == 'tipo_usuario'){
    $tipo_usuario=$_SESSION['tipo_usuario'];
    echo $tipo_usuario;
}
if ($_POST['funcion'] == 'llenar_usuarios') {
    $usuario->llenar_usuarios();
    foreach ($usuario->objetos as $objeto) {
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
    $usuario->llenar_usuarios_mod();
    foreach ($usuario->objetos as $objeto) {
        $json[] = array(
            'id' => $objeto->id,
            'nombres' => $objeto->nombres,
            'apellidos' => $objeto->apellidos
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}