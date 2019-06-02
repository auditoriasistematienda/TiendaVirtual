$(document).ready(function(){
    $(".btn-update-item").on('click', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var slug = $(this).data('slug');
        var cantidad = $("#producto_" + id).val();

        window.location.href = "actualizar/" + slug + "/" + cantidad
    });
});