<?php

$conexion = new PDO("pgsql:host=172.27.100.99 dbname=bdfutbol user=postgres port=5432 password=postgres04");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    // echo json_encode('conectado correctamente');
