<?php
    require_once("../models/modelo.php");
    $productos = new Productos();
    $datos = $productos->getProductos();
    require_once("../views/vista.php");
?>