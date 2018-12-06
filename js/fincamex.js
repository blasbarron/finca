//Función que controla el filtro de monitoreo y el catalogo de Rutas, se genero de sta manera 
//por que no funcionaba correctamente de la manera que se implemento.

$(document).ready(function () {
    (function ($) {
        $('#filter').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
            $('.tablaSort tr').hide();
            $('.tablaSort tr').filter(function () {
                return rex.test($(this).text());
            }).show();
        })
    }(jQuery));
});


function registrar(){
          var opcion = "registrar";
          $.ajax({
            type: 'post',
            url: 'registrartarea.php',
             data: $('#form_edit').serialize()+"&opcion="+opcion,
            success: function (response) {
                location.reload();
              //alert(response);
              
            }
          });
        };