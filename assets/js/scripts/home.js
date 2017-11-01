$(document).ready(function (){   
    // Llamada Ajax para traer las provincias
    var data = getDataByAjax($("#urlProvincias").val());       
    
    // Se setean las provincias
    $("#cboLocalidad").select2({
        data: data
     });
     
    // Llamada Ajax para traer los Instrumentos  
    data = getDataByAjax($("#urlInstrumentos").val());
    
    // Se setean los Instrumentos
    $("#cboInstrumento").select2({
        data: data
     });
     
    //Carga la partialView de registración en el modal PopUp
    $('#btnPublicacionMusico').click(function(){
        $.ajax({
            type    : 'POST', 
            url     : $('#urlPublicacionView').val(),
            cache   : false,
            success : function(data){ 
                if(data){
                    $('#modalLabel').text('Registración');
                    $('#form-content').html(data);
                }
            }
        });
    });
});       
        


