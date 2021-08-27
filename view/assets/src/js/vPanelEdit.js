$(document).ready(function() {
    viewHome();
    // Abrir el inspector de archivos
    $(document).on("click", "#add-photo", function() {
        $("#add-new-photo").click();
    });

    // -> Abrir el inspector de archivos

    var formData = new FormData();

    // Cachamos el evento change

    $(document).on("change", "#add-new-photo", function() {

        var files = this.files;
        var element;
        var supportedImages = ["image/jpeg", "image/png", "image/jpg"];
        var seEncontraronElementoNoValidos = false;

        for (var i = 0; i < files.length; i++) {
            element = files[i];

            if (supportedImages.indexOf(element.type) != -1) {
                var id = getRandomString(7);
                //createPreview(element, id);
                formData.append(id, element);
                formData.append("idCata", $("#idCata").val());
                formData.append("cantidad", $("#num_impresion").val());
                formData.append("costo", $("#costo").val());
                formData.append("code", id);

            } else {
                seEncontraronElementoNoValidos = true;
            }
        }

        if (seEncontraronElementoNoValidos) {
            danger("Se encontraron archivos no validos.");
        } else {
            //$('#modal_procesando').modal('show');
            $.ajax({
                url: IMAGEN_CTROL + SAVE,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    $("*").modal('hide');
                    formData = new FormData();
                    location.reload();
                },
                error: function(e) {
                    console.log(e.responseText);
                }
            });
            success("Todos los archivos se subieron correctamente.");

        }

    });

});