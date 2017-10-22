$(document).ready(function (){   
    var data = new Array();
    
    // Llamada Ajax para traer las provincias  
    $.ajax({
      url: $("#urlProvincias").val(),
      dataType: 'json',
      async: false,
      success: function(result) {
          data = result;
      }
    });       
    
    // Se setean las provincias
    $("#cboLocalidad").select2({
        data: data
     });
     
    // Llamada Ajax para traer los Instrumentos  
    $.ajax({
      url: $("#urlInstrumentos").val(),
      dataType: 'json',
      async: false,
      success: function(result) {
          data = result;
      }
    }); 
    
    // Se setean los Instrumentos
    $("#cboInstrumento").select2({
        data: data
     });
     
    //Carga la partialView de registración en el modal PopUp
    $('#btnPublicacionMusico').click(function(){
        $.ajax({
            type    : 'POST', 
            url     : $('#urlPublicacionMusicoView').val(),
            cache   : false,
            success : function(data){ 
                if(data){
                    $('#modalLabel').text('Músico');
                    $('#form-content').html(data);
                }
            }
        });
    });
    
    $('#btnPublicacionBanda').click(function(){
        $.ajax({
            type    : 'POST', 
            url     : $('#urlPublicacionBandaView').val(),
            cache   : false,
            success : function(data){ 
                if(data){
                    $('#modalLabel').text('Banda');
                    $('#form-content').html(data);
                }
            }
        });
    });    
});       
        


