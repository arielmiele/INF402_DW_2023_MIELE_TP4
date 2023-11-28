<?php
require_once 'conexionDB.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $consulta = "SELECT ID, Nombre, Descripcion, Precio, CantidadEnStock, Categoria, FechaDeIngreso FROM productos where id = " . $_GET['id'];
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($data)) {
        echo (json_encode($data, JSON_UNESCAPED_UNICODE));
        $conexion = null;
    } else {
        echo "Producto inexistente";
    }
} else {
    echo "Error";
};
