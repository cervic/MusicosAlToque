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
     
    //Carga la partialView de registración en el modal PopUp
    $('#btnPublicacionMusico').click(function(){
        $.ajax({
            type    : 'POST', 
            url     : $('#urlRegistracionView').val(),
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
        


