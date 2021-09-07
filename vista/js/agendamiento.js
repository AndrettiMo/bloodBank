$(document).ready(function(){



    $("#btnAgendar").click(function(){

        var nombre=$("#txtNombre").val();
        var apellido = $("#txtApellido").val();
        var tipoDocumento =$("#tipoDocumento").val();
        var numeroDocumento = $("#numeroDocumento").val();
        var fecha = $("#fecha").val();
        var hora=$("#hora").val();
        var lugar = $("#txtLugar").val();
        var email = $("#txtEmail").val();


     var objData = new FormData();

     objData.append("nombre",nombre);
     objData.append("apellido",apellido);
     objData.append("tipoDocumento",tipoDocumento);
     objData.append("numeroDocumento",numeroDocumento);
     objData.append("fecha",fecha);
     objData.append("hora",hora);
     objData.append("lugar",lugar);
     objData.append("email",email);


     $.ajax({
        url: "control/agendamientoControlador.php",
        type: "post",
        dataType: "json",
        data: objData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
    
            if (respuesta=="ok") {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Su cita ha sido agendada correctamente.' ,
                    showConfirmButton: false,
                    timer: 3000
                  })

              
            }

            else{

                alert("Error por favor revisar datos");
            }
        }
    })






    })




})