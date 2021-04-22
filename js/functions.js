$("#select_province").change(function () {
    valor = $("#select_province option:selected").val();
    $.ajax({
        url: './get_montanias.php',
        type: 'POST',
        data: { valor },
        success: function (resp) {
            $("#select_montania").html(resp);
        },
        error: function () {
            console.log('errror');
        }
    })
});

$("#select_montania").change(function () {
    id_montania = $("#select_montania option:selected").val();
    $.ajax({
        url: './get_info.php',
        type: 'POST',
        data: { id_montania },
        success: function (resp) {
            $("#info").html(resp);
        },
        error: function () {
            console.log('errror');
        }
    })
});

$(".nav-link").click(function (e) {
    idSeleccionado = e.target.id;
    $.ajax({
        url: './info_tab.php',
        type: 'POST',
        data: { idSeleccionado },
        success: function (resp) {
            $("#contenido-tab").html(resp);
        },
        error: function () {
            console.log('errror');
        }
    })
});

$(".list-li-desc li").click(function (e) {
    idSeleccionado = e.target.id;
    $.ajax({
        url: './info_modal.php',
        type: 'POST',
        data: { idSeleccionado },
        success: function (resp) {
            console.log(resp);
            $("#modal-desc").html(resp);
        },
        error: function () {

        }
    })
})

$("#input-user").change((e) => {
    valor = $("#input-user").val();
    $.ajax({
        url: './validar_usuario.php',
        type: 'POST',
        data: { valor },
        success: (resp) => {
            console.log(resp);
        },
        error: () => {

        }
    })
})

$("#formularioUsuario").submit((e) => {
    e.preventDefault();
    console.log('asdasd');
});

$(".boton-paginacion").click((e) => {
    paginaDestino = e.target.id;
    paginaPresente = e.target.value;
    if (paginaDestino == "sig") {
        pagina = parseInt(paginaPresente) + 4;
    } else {
        pagina = parseInt(paginaPresente) - 4;
    }
    $.ajax({
        url: "./pagina_listado.php",
        type: "POST",
        data: { pagina },
        success: (resp) => {
            $("#tbody-pagina").html(resp);
            pagina = parseInt(pagina);
            $(".boton-izq").attr("id", parseInt($(".boton-izq").attr("id")) + 1);
            $(".boton-der").attr("id", parseInt($(".boton-der").attr("id")) + 1);
        },
        error: () => {

        }
    })
})