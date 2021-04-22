<?php
require('./conexion.php');
include('./head.php');

$montanias = $mysqli->query("SELECT * FROM montania");
?>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="col-md-12">
            <h1 class="text-center">Opciones de trekking</h1>
            <div class="row">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <?php while ($rowMontanias = $montanias->fetch_assoc()) { ?>
                    <li class="nav-item">
                        <button class="nav-link" id="<?php echo $rowMontanias['id'] ?>" data-bs-toggle="pill"
                            data-bs-target="#pills-<?php echo $rowMontanias['id'] ?>" type="button" role="tab"
                            aria-selected="true" value="asdsad"><?php echo $rowMontanias['nombre'] ?></button>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="tab-content" id="contenido-tab">

            </div>
        </div>
    </div>
</body>
<?php include('./footer.php') ?>