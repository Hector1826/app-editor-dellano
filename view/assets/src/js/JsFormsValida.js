/**
 *  Valida formulario para iniciar sesion
 */
function validateFormLogin() {
    $('#form-login').validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            pass: {
                required: true,
                minlength: 5
            },
        },
        messages: {
            email: {
                required: "Campo requerido",
                email: "Ingresa dirección de correo electrónico correcta"
            },
            pass: {
                required: "Proporciona contraseña",
                minlength: "Tu contraseña debe tener mas de 5 caracteres de longitud"
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.input-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: getDataFormLogin
    });
}

/**
 *  Valida formulario de registro y edición de un usuario
 */
function validateFormUser() {
    $('#form-register').validate({
        rules: {
            nombre: {
                required: true,
                maxlength: 30
            },
            email: {
                required: true,
                email: true,
            },
            pass: {
                required: true,
                minlength: 5
            },
            pass_confirm: {
                required: true,
                minlength: 5,
                equalTo: '#pass_id'
            },
            apellido: {
                required: true,
                maxlength: 30
            },
            terms: {
                required: true
            },

        },
        messages: {
            email: {
                required: "Campo requerido",
                email: "Ingresa dirección de correo electrónico correcta"
            },
            pass: {
                required: "Proporciona contraseña",
                minlength: "Tu contraseña debe tener mas de 5 caracteres de longitud"
            },
            pass_confirm: {
                required: "Proporciona contraseña",
                minlength: "Tu contraseña debe tener mas de 5 caracteres de longitud",
                equalTo: "Las contraseñas no coinciden"
            },
            apellido: {
                required: "Proporciona tus apellidos",
                maxlength: "Tus apellidos no debe tener mas de 30 caracteres de longitud"
            },
            terms: { required: "Debe aceptar los terminos y condiciones para poder continuar" },
            nombre: {
                required: "Proporciona tu nombre",
                maxlength: "Tu nombre no debe tener mas de 30 caracteres de longitud"
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.input-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: getDataFormUser
    });
}

/**
 *  Validación de campos para Inisio de sesión
 */
function dataValidateEdit() {
    $('#form-edit').validate({
        rules: {
            nombre: {
                required: true,
                maxlength: 30
            },
            email: {
                required: true,
                email: true,
            },
            pass: {
                required: true,
                minlength: 5
            },
            pass_confirm: {
                required: true,
                minlength: 5,
                equalTo: '#pass'
            },
            apellido: {
                required: true,
                maxlength: 30
            },
        },
        messages: {
            email: {
                required: "Campo requerido",
                email: "Ingresa dirección de correo electronico correcta"
            },
            pass: {
                required: "Proporciona contraseña",
                minlength: "Tu contraseña debe tener mas de 5 caracteres de longitud"
            },
            pass_confirm: {
                required: "Proporciona contraseña",
                minlength: "Tu contraseña debe tener mas de 5 caracteres de longitud",
                equalTo: "Las contraseñas no coninsiden"
            },
            apellido: {
                required: "Proporciona tus apellidos",
                maxlength: "Tus apellidos no debe tener mas de 30 caracteres de longitud"
            },
            nombre: {
                required: "Proporciona tu nombre",
                maxlength: "Tu nombre no debe tener mas de 30 caracteres de longitud"
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.input-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: uploadUSer

    });
}