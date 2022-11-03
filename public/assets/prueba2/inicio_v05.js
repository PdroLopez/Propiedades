jQuery(document).ready(function () {

    //Cambio de región
    $('#ddlRegion').change(function (e) {
        e.preventDefault();
        region = $(this).val();
        completarComunasDeLaRegion("ddlComunaCont", region);
    });

    $('#botBuscar').click(function (e) {
        e.preventDefault();
        validarBuscador();
    });

})

function completarComunasDeLaRegion(campoDestino, regionSeleccionada) {

    $("#" + campoDestino).html("");

    $.get("../recursos/publico.ashx", {
        ac: "completarComunasDeLaRegion",
        idr: regionSeleccionada,
        _: Math.random() * 10
    },
    function (data) {

        $("#" + campoDestino).html("<select id='ddlComuna' class='selectpicker' data-live-search='true' data-size='5' title='Comuna'>" + data + "</select>");

        var select = $('#ddlComuna');
        if (select.length > 0) {
            select.selectpicker();
        }

    });
}

//Validación del envío del formulario del buscador principal
function validarBuscador() {

    $.get("recursos/publico.ashx", {
        ac: "agregarBusqueda",
        tp: $("#ddlTP").val(),
        op: $("#ddlOp").val(),
        re: $("#ddlRegion").val(),
        co: $("#ddlComuna").val(),
        se: ses,
        _: Math.random() * 10
    },
    function (data) {
        window.location = "listado.aspx?op=" + $("#ddlOp").val() + "&tp=" + $("#ddlTP").val() + "&re=" + $("#ddlRegion").val() + "&co=" + $("#ddlComuna").val() + "&or=1"
    });

}

$(window).keypress(function (e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        if ($("#tbCodigo").val() != "") {
            validarBuscadorCodigo();
        } else {
        validarBuscador();
        }
    }
});