<?php
include('php/conexion.php');

$error = false;

try {
    $consulta = $conexion->prepare("SELECT * FROM usuarios");

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