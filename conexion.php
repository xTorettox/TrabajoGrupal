<?php
$config = parse_ini_file('./private/config.ini');

$mysqli = new mysqli($config['server'], $config['user'], $config['pass'], $config['namedb']);
$mysqli->set_charset('utf8');
if ($mysqli->connect_error) {
    die('Error en la conexion' . $mysqli->connect_error);
}