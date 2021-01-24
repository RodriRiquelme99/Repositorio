<?php session_start();

// ARCHIVO INDEX DE EL ADMIN

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

// COMPROBAR SESION

comprobarSession();

if (!$conexion) {
    header('Location: ../error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion); 

require '../views/admin_index.view.php';



?>