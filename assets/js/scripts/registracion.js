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
    
    var dataForObject = getDataByAjax($("#urlProvincias").val());   
    // Se setean las provincias
    $('#form-provincia').select2({        
        data: dataForObject
    });
    
    // En el evento change cargamos los departamentos
    $('#form-provincia').change(function(){
        $('#contenedor-departamento').css('display','none');
        $('#contenedor-localidad').css('display','none');
        $('#contenedor-barrio').css('display','none');
        
        var idProvincia = $('#form-provincia').select2('val');
        if(idProvincia !== '2' ) {  // 5001
            if ($('#contenedor-departamento').css('display') === 'block')
                $('#form-departamento').val(null).trigger('change');
            
            var parameter = {'idProvincia': idProvincia};           
            $('#form-departamento').select2({
                ajax: getDataByAjaxWithParameters($("#urlDepartamentos").val(), parameter )
            });        
            $('#contenedor-departamento').css('display','block');
        } else {
            var parameter = {'idLocalidad': 5001};           
            $('#form-barrio').select2({
                ajax: getDataByAjaxWithParameters($("#urlBarrios").val(), parameter )
            });
            $('#contenedor-barrio').css('display','block');
        }
    });
    
    $('#form-departamento').change(function(){
        if ($('#contenedor-localidad').css('display') === 'block')
            $('#form-localidad').val(null).trigger('change');
        
        var idDepartamento = $('#form-departamento').select2('val');
        alert(idDepartamento);
        var parameter = { 'idDepartamento': idDepartamento };
        $('#form-localidad').select2({
           ajax: getDataByAjaxWithParameters($('#urlLocalidades').val(), parameter ) 
        });
        $('#contenedor-localidad').css('display','block');
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

