<?php
include('php/conexion.php');

$error = false;

$cedula = intval($_POST["cedula"]);
$nombres = strval($_POST["nombres"]);
$email = strval($_POST["email"]);
$telefono = intval($_POST["telefono"]);
$direccion = strval($_POST["direccion"]);
$ciudad = strval($_POST["ciudad"]);
$nfarmacia = strval($_POST["nfarmacia"]);
$ncarton = intval($_POST["ncarton"]);
$perfil = intval($_POST["perfil"]);
$fecha = strval($_POST["date"]);

$clave = intval($_POST["clave"]);
$estado = intval($_POST["estado"]);
$idUsuario = intval($_POST["idUsuario"]);

try {
    $pdo = $conexion->prepare("INSERT INTO usuarios(cedula, nombres, correo, telefono, direccion, ciudad,  nfarmacia, carton, perfil, clave, estado, id_usuario, fecha) VALUES
    ($cedula,'$nombres','$email',$telefono,'$direccion','$ciudad','$nfarmacia',$ncarton,$perfil,$clave,$estado,$idUsuario,'$fecha')");

    $pdo->execute();
    print($pdo->errorInfo());

    echo json_encode('true');
} catch (PDOException $error) {
    echo json_encode($error->getMessage());
    die();
}