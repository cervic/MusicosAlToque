/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){   
    $("#frmRegistracion").on('submit', function(evt){
        evt.preventDefault();  
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
    });
    
    // Se setean las provincias
    $('#form-provincia').select2({        
        data: getDataByAjax($("#urlProvincias").val())   
        //containerCssClass: 'select2-error'
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

