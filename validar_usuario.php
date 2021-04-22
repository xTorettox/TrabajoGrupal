<?php
require('./conexion.php');

$usuario = $_POST['valor'];

$validacion = $mysqli->query("SELECT email FROM usuario WHERE nombre_usuario='$usuario'");

if ($validacion->num_rows == 1) {
    echo "existe uno igual";
} else {
    echo "no existe uno igual";
}