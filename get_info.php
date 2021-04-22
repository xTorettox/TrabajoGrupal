<?php
require('./conexion.php');

$id_montania = $_POST['id_montania'];

$montania = $mysqli->query("SELECT * FROM montania WHERE id='$id_montania'");
$rowMontania = $montania->fetch_assoc();

$resp = '';

$resp .= '<div class="card mb-3 mt-4">
            <img src="' . $rowMontania['imagen'] . '" class="card-img-top mt-3" alt="...">
            <div class="card-body">
                <h5 class="card-title">' . $rowMontania['nombre'] . '</h5>
                <p class="card-text">' . $rowMontania['descripcion'] . '</p>
            </div>
        </div>';

echo $resp;