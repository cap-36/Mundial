<?php
include('php/conexion.php');

$error = false;

$ncarton = intval($_GET["perfil-carton"]);
$cedula = intval($_GET["perfil-cedula"]);
$fase = intval($_GET["perfil-fase"]);
$grupo = strval($_GET["grupo-a"]);
$perfil = intval($_GET["perfil-perfil"]);
$equipoUno = intval($_POST["equipoUno"]);
$marcadorUno = intval($_POST["marcadorUno"]);
$equipoDos = intval($_POST["equipoDos"]);
$marcadorUno = intval($_POST["marcadorDos"]);
$fecha = strval($_GET["perfil-fecha"]);

try {
    $pdo = $conexion->prepare("INSERT INTO marcadores(carton, cedula, fase, grupo, perfil, equipo_uno, marcador_uno, equipo_dos, marcador_dos, fecha) VALUES
    ($ncarton,$cedula,$fase,'$grupo',$perfil,$equipoUno,$marcadorUno,$equipoDos,$marcadorUno,'$fecha')");

    $pdo->execute();
    print($pdo->errorInfo());

    echo json_encode('true');
} catch (PDOException $error) {
    echo json_encode($error->getMessage());
    die();
}