/**
 *  Obtiene los campos del form-login y
 */
function getDataFormLogin() {
    var data = new FormData($("#form-login")[0]);
    $('#modal_procesando').modal('show');
    $.ajax({
        url: USUARIO_CTROL + LOGIN,
        type: "POST",
        data: data,
        contentType: false,
        processData: false,
        success: function(rspta) {
            $('#modal_procesando').modal('hide');
            console.log("LOGIN: " + rspta);
            if (rspta != FAILS) { // Ingreso exitoso
                success("Bienvenido a Dellano", "Correcto");
                $(location).attr("href", "ViewPanel.php?i=" + $("#i").val());
            } else {
                $("#email_login").focus();
                $("#msg").removeClass('hide');
                timerWait("msg");
            }
        }
    });
}

/**
 *  Obtiene los datos correspondientes a un usuario
 */
function getDataFormUser() {
    user = $("#email").val();
    pass = $("#pass_id").val();
    var formData = new FormData($('#form-register')[0]);
    $.ajax({
        url: USUARIO_CTROL + SAVE,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function() {
            openModal("modal-load");
        },
        success: function(data) {
            if (data != FAILS) { // Registro exitoso
                sesionStart('Datos correctos', 'Bienvenido a Dellano');
            } else {
                console.log("Error al registrar: " + data);
                $("#msg_reg").show();
            }

        }
    });
}

/**
 *  Carga la vista del panel.
 */
function viewHome() {
    $.post(VIEW_HOME, function(view) {
        $(".content-wrapper").html(view);
        uploadListCatalogo();
        getImgPendiente();

    });
}

/**
 *  Carga la vista con la imagewn a editar
 */
function viewEdit() {
    $.post(VIEW_EDITOR, function(view) {
        $(".content-wrapper").html(view);
    });
}

/**
 *  Carga el perfil del usuario
 */
function viewProfile() {
    $.post(VIEW_PROFILE, function(view) {
        $(".content-wrapper").html(view);
        initGetData();
    });
}
/**
 * Carga select con el catalogo de imagenes.
 */
function uploadListCatalogo() {
    $.post(CATALOGO_CTROL + GET_ALL, function(rspta) {
        console.log("Catalogo: \n" + rspta + "\n **************************** \n");
        $("#idCata").selectpicker();
        $("#idCata").html(rspta);
        $("#idCata").selectpicker('refresh');
        setDataCatalogo();
    });
}
/**
 *  Muestra los datos dependiendo la seleccion del usuario.
 */
function setDataCatalogo() {
    var idCata = $("#id").val();
    $.post(CATALOGO_CTROL + GET_SINGLE, { idCata: idCata },
        function(rspta) {
            d = JSON.parse(rspta);
            $("#idCata").val(d.idCatalogo);
            $("#idCata").selectpicker('refresh');
            $('#idCata').trigger('change');
            $("#p_precio").val(d.precio);
            $("#costo").val(d.precio * $("#num_impresion").val());
            $("#total").val($("#costo").val());
        }
    );
}

function onChangeCantidad() {
    $("#costo").val((($("#p_precio").val()) * ($("#num_impresion").val())));
    $("#total").val($("#costo").val());
}

function onChangeCatalogo() {
    $.post(CATALOGO_CTROL + GET_SINGLE, {
            idCata: $("#idCata").val()
        },
        function(rspta) {
            d = JSON.parse(rspta);
            $("#p_precio").val(d.precio);
            $("#costo").val(d.precio * $("#num_impresion").val());
            $("#total").val($("#costo").val());
        }
    );
}
/**
 *  Obtiene los datos del usuario en sesion
 */
var user;

function initGetData() {
    $.post(USUARIO_CTROL + GET_SINGLE, function(rspta) {
        console.log("USER: " + rspta);
        d = JSON.parse(rspta);
        user = d;
        $("#nombre_us").html(d.nombre);
        $("#ape").html(d.apellido);
        getCompras();
    });
}
/**
 *  Obtiene total de compras del usuario
 */
function getCompras() {
    $.post(USUARIO_CTROL + COMPRAS, function(rspta) {
        console.log("USER: " + rspta);
        d = JSON.parse(rspta);
        $("#totalCompra").html(d.totalCompras);
    });
}
/**
 * Abre modal con datos del usuario a editar
 */
function onEdit() {
    $("#funcion").val('edit');
    $("#nombre").val(user.nombre);
    $("#apellido").val(user.apellido);
    $("#email").val(user.email);
    $("#pass_id").val(user.pass);
    $("#pass_confirm").val(user.pass);
    $('#modal-register').modal({
        show: true,
        backdrop: 'static'
    });
}

function uploadUSer() {
    var formData = new FormData($('#form-edit')[0]);
    $.ajax({
        url: USUARIO_CTROL + EDIT,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
            console.log("Editar: " + data);
            if (data != FAILS) { // Registro exitoso
                toastSuccess('Edicion exitosa');
            } else {
                console.log("Error al registrar: " + data);
                $("#msg_reg").show();
            }

        }
    });
}

/**
 * Cerrar sesión
 */
function onLogout() {
    $.post(USUARIO_CTROL + OUTPUT, function(rspta) {
        console.log("USER: " + rspta);
        if (rspta != FAILS) {
            $(location).attr("href", "../index.php");
        }

    });
}

function deleteImg(idParent) {
    if (confirm) {
        $("#" + idParent).remove();
        succesDelete();
    }
}

//Genera una cadena aleatoria según la longitud dada
function getRandomString(length) {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (var i = 0; i < length; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    return text;
}

//window.onscroll = function(){ window.scrollTo(0, 0) };
/*function loadCanvasEditor(id) {
    $('#modal_procesando').modal('show');

    $.post(IMAGEN_CTROL + GET_SINGLE, { "idUserImg": id },
        function(rspta) {
            d = JSON.parse(rspta);
            console.log("EDIT: \n" + rspta);
            $('#modal_procesando').modal('hide');
            //$(location).attr("href", "View.php?i=" + d.imagen);

        }
    );
} */

//window.onscroll = function(){ window.scrollTo(0, 0) };
function loadCanvasEditor(id) {
    $('#modal_procesando').modal('show');
    $.post(VIEW_EDITOR, function(res) {
        $(".content-wrapper").html(res);
        $.post(IMAGEN_CTROL + GET_SINGLE, { "idUserImg": id },
            function(rspta) {
                d = JSON.parse(rspta);
                console.log("EDIT: \n" + rspta);
                $('#modal_procesando').modal('hide');
                //$("footer").fadeOut();
                $('#image').attr("src", "../uploads/" + d.imagen);

            }
        );
    });
}


function getImgPendiente() {
    $('#modal_procesando').modal('show');
    $.post(IMAGEN_CTROL + GET_PENDIENTE, function(rspta) {
        $('#modal_procesando').modal('hide');

        $(rspta).insertAfter("#add-photo-container");
    });
}