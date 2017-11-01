/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    //Carga la partialView de registración en el modal PopUp
    $('#btnModalRegistracion').click(function(){
        $.ajax({
            type    : 'POST', 
            url     : $('#urlRegistracionView').val(),
            cache   : false,
            success : function(data){ 
                if(data){
                    $('#modalLabel').text('');
                    $('#form-content').html(data);
                }
            }
        });
    });
    
    // Carga la partialView de login en el modal PoUp
    $('#btnModalLogin').click(function(){        
        $.ajax({
            type    : 'POST', 
            url     : $('#urlLoginView').val(),
            cache   : false,
            success : function(data){ 
                if(data){
                    $('#modalLabel').text('Ingresar a Músicos al Toque');
                    $('#form-content').html(data);
               }
            }
        });
    });
    
    $('#btnCerrarSession').click(function(){
        $.ajax({
            type    : 'POST',
            url     : $("#urlCerrarSession").val(),
            cache   : false,
            success : function(data){
                window.location.href = $('#urlHome').val();
            }
        });
    });
});

