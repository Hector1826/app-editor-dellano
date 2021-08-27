/**
 *  Acción realizada exitosamente
 * */
function success(txt, title) {
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: title,
        html: '<h2 class="text-orange"><b>' + txt + '</b></h2>',
        showConfirmButton: false,
        timer: 3500
    });
}

/**
 *  Error al realizar la acción
 * */
function danger(txt, title) {
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: title,
        html: '<h2 class="text-orange"><b>' + txt + '</b></h2>',
        showConfirmButton: true,
        timer: 3500
    });
}

function succesDelete() {
    Swal.fire(
        '¡Borrado!',
        'La imagen ha sido borrada.',
        'success'
    );
}

/**
 *  Dialogo de confirmación
 */
const confirm = function() {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#28a745',
        cancelButtonColor: '#dc3545',
        confirmButtonText: '¡Sí, bórralo!',
        cancelButtonText: '¡No, Cancelar!'
    });
};
/* Abre modal */
function openModal(idModal) {
    $("*").modal('hide');
    $("#" + idModal).modal({
        show: true,
        backdrop: 'static'
    });
}

function timerWait(idElemento) {
    setTimeout(function() {
        $("#" + idElemento).fadeOut(500);
    }, 1500);
}