<?php

//conexion
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';

$db = mysqli_connect ($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

//Iniciar sesion
session_start();
