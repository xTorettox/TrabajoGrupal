<?php
require('./conexion.php');

$id_provincia = $_POST['valor'];

$montanias = $mysqli->query("SELECT * FROM montania WHERE id_provincia='$id_provincia'");

$resp = '';

$resp .= '<option disabled selected>Seleccione una opción</option>';
while ($rowMontanias = $montanias->fetch_assoc()) {
    $resp .= '<option value="' . $rowMontanias['id'] . '">' . $rowMontanias['nombre'] . '</option>';
}

echo $resp;