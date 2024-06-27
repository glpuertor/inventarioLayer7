$( document ).ready(function() {
    $(".elimin").on("click",function(){
        let id = $(this).attr('data-id');
        Swal.fire({
            title: "¿Esta seguro?",
            text: "¡Usted eliminara este artículo!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si",
            cancelButtonText: "No"
          }).then((result) => {
            if (result.isConfirmed) {

                var currentToken = $('meta[name="csrf-token"]').attr("content");

        return $.ajax({

            type: "DELETE",
            url: "elimiararticulo/"+id,
            data:{
                "_token": currentToken,
                id: id,

            },
            dataType: "json",
            success: function(data) {
                if(data.message == "Eliminado correctamente"){
                    $("#alertElimin").text(data.message).addClass('alert-success');
                }

            else{
                $("#alertElimin").text(data.message).addClass('alert-warning');
            }

            },
            error: function(ex) {


            }

        });


            //   Swal.fire({
            //     title: "Deleted!",
            //     text: "Your file has been deleted.",
            //     icon: "success"
            //   });
            }
          });
    })
});
