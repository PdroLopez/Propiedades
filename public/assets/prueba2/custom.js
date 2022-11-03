var ejecutado = 0; var ano = (new Date).getFullYear();

jQuery(document).ready(function () {

    $("#fecha_actual").text(ano);

    //Ventana modal
    $("#errorCod2").hide();
    $("#errorCod1").hide();
    $("#successCod").hide();

    $("#close-modal").click(function (e) {
        e.preventDefault();
        $("#errorCod2").hide();
        $("#errorCod1").hide();
        $("#successCod").hide();
    })

    $('#btnBuscarCodigo').click(function (e) {
        e.preventDefault();
        validarBuscadorCodigo();
    });

    adaptacionImagenVH();

    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        $('.counter-count').each(function () {
            if (scroll >= 768 && ejecutado <= 3) {
                ejecutado += 1;
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3500,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now).toLocaleString('es'));
                    }
                });
            }

        });
    });

    $("#tst-inicio").click(function (e) {
        e.preventDefault();
        window.location = "index.aspx#testimonios";
    });

});


function adaptacionImagenVH() {
    $(window).load(function () {
        var heightImg = $(".slick-active").height();

        $(".slideshow-main .slick-slide img").filter(function () {
            var $this = $(this);

            if ($this.width() > $this.height()) {
                $this.css("height", heightImg + "px").css("width", "auto");
                $this.css("margin", "0 auto");

            } else {
                $this.css("max-height", heightImg + "px");
                $this.css("width", "auto");
                $this.css("margin", "0 auto");
            }

        });

    });
}

//Validación del envío del formulario por código
function validarBuscadorCodigo() {

    var codigo = "";
    codigo = $("#tbCodigo").val();

    if (codigo != "") {
        $.get("recursos/publico.ashx", {
            ac: "buscCodigo",
            co: codigo,
            _: Math.random() * 10
        },
            function (data) {
                if (data == "ok") {
                    $("#errorCod2").hide();
                    $("#errorCod1").hide();
                    $("#successCod").show();
                    window.location = "fichaPropiedad.aspx?i=" + codigo;
                } else {
                    $("#errorCod2").hide();
                    $("#errorCod1").show();
                }
            });
    } else {
        $("#errorCod1").hide();
        $("#errorCod2").show();
        return false;
    }

}
