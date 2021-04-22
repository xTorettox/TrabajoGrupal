<?php include('./head.php') ?>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-12">
            <h1 class="text-center">Formulario de Registro</h1>
            <div class="row">
                <form id="formularioUsuario">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="input-user" placeholder="Nombre de usuario">
                        <label for="floatingInput">Nombre de usuario</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Empresa">
                        <label for="floatingPassword">Empresa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" pattern="[0-9]{0,15}"
                            title="Ingrese solo numeros, por favor" id="floatingPassword"
                            placeholder="Telefono (solo numeros)">
                        <label for="floatingPassword">Telefono (solo numeros)</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingPassword" placeholder="Email">
                        <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea type="text" class="form-control" id="floatingPassword" placeholder="Comentarios"
                            style="height: 6em;"></textarea>
                        <label for="floatingPassword">Comentarios</label>
                    </div>
                    <button type="submit" class="btn btn-light border">Enviar</button>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include('./footer.php') ?>