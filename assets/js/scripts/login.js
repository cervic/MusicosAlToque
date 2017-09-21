/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $('#btnIngresar').click(function(){          
        $.ajax({                        
            type: 'POST',
            url: $( '#frmLogin' ).attr( 'action' ),
            dataType: 'json',
            data: $('#frmLogin').serialize(),
            cache: false,
            success:function(data){                
                $( ".contenedor_error" ).empty();
                if(!data.isValid){                    
                    showErrors(data);
                }
                else{
                    cleanForm('frmLogin');
                    $('#LayoutModal').modal('toggle');
                    location.reload();
                }                     
            }
        });
    });
});

function showErrors(data){    
    $('#errorEmail').html(data.txtEmail);
    $('#errorPassword').html(data.txtPassword);
    $('#login').html(data.login);
}

