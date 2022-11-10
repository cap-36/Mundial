<?php
include('php/conexion.php');

$error = false;

try {
    $consulta = $conexion->prepare("SELECT carton as carton, correo as correo, cedula as cedula, fase as fase, orden as orden, puntos as puntos FROM cartones");

    $respuesta = $consulta->execute();
    while($datos = $consulta->fetchAll(PDO::FETCH_ASSOC)) {
        if(!empty($datos)) {
            echo json_encode($datos);
        } else {
            echo json_encode([]);
        }
    }
} catch (PDOException $error) {
    echo $error->getMessage();
    die();
}