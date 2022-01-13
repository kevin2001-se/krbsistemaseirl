$(document).ready(function () {
    
    const url = document.querySelector("#url").value;

    $("#guardarGeneral").click(function (e) { 
        e.preventDefault();

        var load = $(this).parent().parent().parent().find(".loaders");

        const nombre = $("#nombre").val();
        const titulo = $("#titulo").val();
        const descripcion = $("#descripcion").val();
        const plabras_claves = $(".tags_palabras").tagsinput('items');
        
        const form = new FormData();
        form.append("nombre",nombre);
        form.append("titulo",titulo);
        form.append("descripcion",descripcion);
        form.append("palabras",plabras_claves);

        $.ajax({
            type: "POST",
            url: "api/pagina.ajax.php",
            data: form,
            contentType: false,
            processData: false,
            beforeSend: function() {
              // setting a timeout
              load.addClass("loader-form");
              load.html(`
              <div class="loader" id="loader-1"></div>
              `);
            },
            success: function (response) {
                load.removeClass("loader-form");
                load.html("");
                
                if (response == "success") {
                    
                    Swal.fire({
                        icon: "success",
                        title: "Ok",
                        text: "Se Actualizo Correctamente"
                    })

                }else if(response == "vacios"){

                    toastr.error('Los Campos no pueden estar vacios.');

                }else{
                    toastr.error('Error Inesperado');
                }

            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              toastr.error('Error Server');
            },
        });

    });

    $("#contactoForm").submit(function (e) { 
        e.preventDefault();

        var load = $(this).parent().find(".loaders");
        
        const correo = $("#correo").val();
        const celular = $("#celular").val();
        const telefono = $("#telefono").val();
        const direccion = $("#direccion").val();

        if (correo.length <= 0 || celular.length <= 0 || direccion.length <= 0) {
            toastr.error('Los Campos no pueden estar vacios.');
            return;
        }

        const form = new FormData();
        form.append("correo",correo);
        form.append("celular",celular);
        form.append("telefono",telefono);
        form.append("direccion",direccion);

        $.ajax({
            type: "POST",
            url: "api/pagina.ajax.php",
            data: form,
            contentType: false,
            processData: false,
            beforeSend: function() {
                // setting a timeout
                load.addClass("loader-form");
                load.html(`
                <div class="loader" id="loader-1"></div>
                `);
              },
            success: function (response) {
                load.removeClass("loader-form");
                load.html("");

                if (response == "success") {
                    
                    Swal.fire({
                        icon: "success",
                        title: "Ok",
                        text: "Se Actualizo Correctamente"
                    })

                }else if(response == "vacios"){

                    toastr.error('Los Campos no pueden estar vacios.');

                }else{
                    toastr.error('Error Inesperado');
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              toastr.error('Error Server');
            },
        });

    });

    $("#editarRedes").submit(function (e) { 
        e.preventDefault();
        
        var load = $(this).parent().find(".loaders");

        const facebook = $("#facebook").val();
        const twitter = $("#twitter").val();
        const youtube = $("#youtube").val();
        const whatsapp = $("#whatsapp").val();
        const instagram = $("#instagram").val();
        const telegram = $("#telegram").val();

        const form = new FormData();
        form.append("facebook",facebook)
        form.append("twitter",twitter)
        form.append("youtube",youtube)
        form.append("whatsapp",whatsapp)
        form.append("instagram",instagram)
        form.append("telegram",telegram)

        $.ajax({
            type: "POST",
            url: "api/pagina.ajax.php",
            data: form,
            contentType: false,
            processData: false,
            beforeSend: function() {
                // setting a timeout
                load.addClass("loader-form");
                load.html(`
                <div class="loader" id="loader-1"></div>
                `);
              },
            success: function (response) {
                load.removeClass("loader-form");
                load.html("");

                if (response == "success") {
                    
                    Swal.fire({
                        icon: "success",
                        title: "Ok",
                        text: "Se Actualizo Correctamente"
                    })

                }else{
                    toastr.error('Error Inesperado');
                }

            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              toastr.error('Error Server');
            },
        });

    });

});