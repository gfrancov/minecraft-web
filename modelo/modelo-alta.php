<?php

include_once __DIR__.'/modelo-database.php';


function tokenCreado($nickname, $token) {
 
    $conexion = conexionDatabase('mcweb');
    $comprovarUsuario = "SELECT * FROM tempreg WHERE nick = '{$nickname}' AND token = '{$token}'";
    $resultcomprovarUsuario = mysqli_query($conexion, $comprovarUsuario);

    $filesComprovarUsuario = mysqli_num_rows($resultcomprovarUsuario);

    return $filesComprovarUsuario;

}

function usuarioRegistrado($nickname) {

    $conexion = conexionDatabase('mcweb');
    $usuarioRegistrado = "SELECT * FROM users WHERE nick = '{$nickname}'";
    $resultUsuarioRegistrado = mysqli_query($conexion, $usuarioRegistrado);

    $filesUsuarioRegistrado = mysqli_num_rows($resultUsuarioRegistrado);

    return $filesUsuarioRegistrado;

}

function crearUsuario($nickname, $contra) {

    $conexion = conexionDatabase('mcweb');
    $crearUsuario = "INSERT INTO `users` (nick, pass) VALUES ('{$nickname}', '{$contra}')";
    $resultCrearUsuario = mysqli_query($conexion, $crearUsuario);

    return $resultCrearUsuario;

}

?>