<?php
include_once '../Models/Zona.php';
include_once '../Util//Config/config.php';
$zona = new Zona();
session_start();
if ($_POST['funcion'] == 'read_all_zonas') {
    $zona->read_all_zonas();
    $json = array();
    foreach ($zona->objetos as $objeto) {
        $json[] = array(

            'id' => openssl_encrypt($objeto->id, CODE, KEY),
            'nombre' => $objeto->nombre,
            'tipo' => $objeto->tipo,
            'dias_recojo' => $objeto->dias_recojo,
            'horaro_recojo' => $objeto->horario_recojo,
            'responsable' => $objeto->responsable,
            'estado' => $objeto->estado,
            'mapa' => $objeto->mapa,
            'imagen' => $objeto->imagen,
            'descripcion' => $objeto->descripcion,
            'comentarios' => $objeto->comentarios
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if ($_POST['funcion'] == 'crear_zona') {
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $responsable = $_POST['responsable'];
    $zona->crear($nombre, $tipo, $responsable);
    $json = array(
        'mensaje' => 'listo'
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if ($_POST['funcion'] == 'editar_zona') {
    $formateado = str_replace(" ", "+", $_POST['id_zona_mod']);
    $id_zona = openssl_decrypt($formateado, CODE, KEY);
    $nombre = $_POST['nombre_mod'];
    $tipo = $_POST['tipo_mod'];
    $responsable = $_POST['responsable_mod'];
    $mensaje = '';
    $datos_cambiados = 'Ha hecho los siguientes cambios';
    $zona->obtener_zona($id_zona);
    if ($nombre != $zona->objetos[0]->nombre || $tipo != $zona->objetos[0]->tipo || $responsable != $zona->objetos[0]->responsable) {
        if ($nombre != $zona->objetos[0]->nombre) {
            $datos_cambiados .= 'Una zona cambio su nombre de ' . $zona->objetos[0]->nombre . ' a ' . $nombre . ', ';
        }
        if ($tipo != $zona->objetos[0]->tipo) {
            $datos_cambiados .= 'Una zona cambio su tipo de ' . $zona->objetos[0]->tipo . ' a ' . $tipo . ', ';
        }
        if ($responsable != $zona->objetos[0]->responsable) {
            $datos_cambiados .= 'Una zona cambio su responsable de ' . $zona->objetos[0]->responsable . ' a ' . $responsable . ', ';
        }
        $zona->editar($id_zona, $nombre, $tipo, $responsable);
        $mensaje = 'success';
    } else {
        $mensaje = 'danger';
    }
    $json = array(
        'mensaje' => $mensaje
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if ($_POST['funcion'] == 'eliminar_zona') {
    $id_usuario = $_SESSION['id'];
    $formateado = str_replace(" ", "+", $_POST['id']);
    $id_zona = openssl_decrypt($formateado, CODE, KEY);
    $zona->eliminar_zona($id_zona);
    $mensaje = 'success';
    $json = array(
        'mensaje' => $mensaje
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if ($_POST['funcion'] == 'llenar_zonas') {
    $zona->llenar_zonas();
    foreach ($zona->objetos as $objeto) {
        $json[] = array(
            'id' => $objeto->id,
            'nombre' => $objeto->nombre,
            'tipo' => $objeto->tipo,
            'responsable' => $objeto->responsable,
            'imagen' => $objeto->imagen,
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if ($_POST['funcion'] == 'llenar_zonas_mod') {
    $zona->llenar_zonas_mod();
    foreach ($zona->objetos as $objeto) {
        $json[] = array(
            'id' => $objeto->id,
            'nombre' => $objeto->nombre,
            'tipo' => $objeto->tipo,
            'responsable' => $objeto->responsable,
            'imagen' => $objeto->imagen,
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
