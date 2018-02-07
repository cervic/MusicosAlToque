/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function cleanForm(form){
    $(':input','#' + form)
    .not(':button, :submit, :reset, :hidden')
    .val('')
    .removeAttr('checked')
    .removeAttr('selected');
}

function getDataByAjax(url){
    var data = null;
    $.ajax({
      url: url,
      dataType: 'json',
      async: false,
      success: function(result) {
          data = result;
      }
    });
    
    return data;
}

function getDataByAjaxWithParameters(url, parameters){   
    return {
      type: 'POST',
      url: url,
      dataType: 'json',
      data: parameters,
      async: false,
      processResults: function(data){
       return {results: data};   
      }      
    };        
}


