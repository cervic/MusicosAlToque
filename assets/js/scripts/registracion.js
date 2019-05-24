/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){                  
    $('.registration-form').on('submit', function (e) {       
        Validation(this);
    }); 
    
    // Se setean las provincias
    $('#form-provincia').select2({        
        data: getDataByAjax($("#urlProvincias").val())
    });
    
    // En el evento change cargamos los departamentos
    $('#form-provincia').change(function(){
        $('#contenedor-departamento').css('display','none');
        $('#contenedor-localidad').css('display','none');
        $('#contenedor-barrio').css('display','none');
        
        var idProvincia = $('#form-provincia').select2('val');
        $('#form-departamento').empty(); // limpio el combo de departamentos
        if(idProvincia !== '2' ) {  // 5001            
            var parameter = {'idProvincia': idProvincia};   

            $('#form-departamento').select2({
                data: getDataByAjaxWithParameters($("#urlDepartamentos").val(), parameter)         
            });    
            $('#form-departamento').select2('val','');
            $('#contenedor-departamento').css('display','block');
            $('#form-departamento').val(null).trigger('change');
            
            if ($('#contenedor-localidad').css('display') === 'block')
                $('#form-localidad').val(null).trigger('change');
        } else {
            var parameter = {'idLocalidad': 5001}; 
            $('#form-barrio').select2({
                data: getDataByAjaxWithParameters($("#urlBarrios").val(), parameter )
            });
            $('#contenedor-barrio').css('display','block');
            $('#form-barrio').val(null).trigger('change');
        }
    });
    
    $('#form-departamento').change(function(){
        $('#form-localidad').empty(); // limpio el combo de localidades
        var idDepartamento = $('#form-departamento').select2('val');
        var parameter = { 'idDepartamento': idDepartamento };
        $('#form-localidad').select2({
           data: getDataByAjaxWithParameters($('#urlLocalidades').val(), parameter ) 
        });
        $('#contenedor-localidad').css('display','block');
        $('#form-localidad').val(null).trigger('change');
    });
    
    $('#form-instrumento').select2({
       data: getDataByAjax($("#urlInstrumentos").val()) 
    });
    
    $('#form-estilo-musical').select2({
       data: getDataByAjax($("#urlEstilosMusicales").val()) 
    });
    /*$('#btnRegistrarse').click(function(){            
        $.ajax({                        
            type: 'POST',
            url: $( '#frmRegistracion' ).attr( 'action' ),
            dataType: 'json',
            data: $('#frmRegistracion').serialize(),
            cache: false,
            success:function(data){
                $( ".contenedor_error" ).empty();
                if(!data.isValid)
                    showErrors(data);
                else{
                    cleanForm('frmRegistracion');
                    $('#LayoutModal').modal('toggle');
                }                     
            }
        });
    });*/
});

function showErrors(data){
    $('#errorNombre').html(data.txtNombre);
    $('#errorApellido').html(data.txtApellido);
    $('#errorUsuario').html(data.txtUsuario);
    $('#errorEmail').html(data.txtEmail);
    $('#errorPassword').html(data.txtPassword);
    $('#errorConfirmPassword').html(data.txtConfirmPassword);
}
$("#form-usuario").change( function(event) {     
    var parameters = { data: { field: 'usuario', text: event.target.value } };    
    showErrorInput(parameters, "error-usuario", this);    
});

$("#form-email").change( function(event) {    
    var parameters = { data: { field: 'email', text: event.target.value } };    
    showErrorInput(parameters, "error-email", this);    
});

$("#form-password").change( function(evt) {
    validationPassword(evt);
});
$("#form-confirm-password").change( function(evt) {
    validationPassword(evt);
});

function validationPassword(evt) {    
    var pass1 = $("#form-password").val();
    var pass2 = $("#form-confirm-password").val();        
    if (pass1 !== "" && pass2 !== "" && pass1 !== pass2) {        
        $("#error-password").css("display", "block");
        $("#error-password").text("Las contraseñas ingresadas no son iguales");
        evt.target.setCustomValidity("Las contraseñas ingresadas no son iguales");
    } else {
        $("#error-password").css("display", "none");
        evt.target.setCustomValidity("");
    }    
}

