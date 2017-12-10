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
    
    var data = getDataByAjax($("#urlProvincias").val());       
    // Se setean las provincias
    $("#form-localidad").select2({
        data: data
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

