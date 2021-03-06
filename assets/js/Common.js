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
    var data = null;
    $.ajax({
        type: 'POST',
        url: url,
        dataType: 'json',
        data: parameters,
        async: false,
        success: function(result) {
           data = result;
        }
    });
    
    return data;
}

function geDataServer(url, parameters){   
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


function validationSelect2(select, isValid){
    if (!select.context.validity.valid && select.parent().css("display") === "block") {
        $("#select2-" + select[0].id + "-container").parent().addClass("myErrorClass");
        isValid = false;
    }else{
        $("#select2-" + select[0].id + "-container").parent().removeClass("myErrorClass");            
    }

    return isValid;
}

function validationInput(input, isValid) {
    if (!input.context.validity.valid) {
        input.addClass('input-error');                
        isValid = false;
    } else {
        input.removeClass('input-error');
    }

    return isValid;
}
    
function showErrorInput(parameters, errorDiv, context) {
    // devuelve un objeto de tipo {isValid: bool, message: string}
    var result = getDataByAjaxWithParameters($("#urlValidationField").val(), parameters);
    if (result !== null && !result.isValid ){
        $("#" + errorDiv).css("display", "block");
        $("#" + errorDiv).text(result.message);        
    } else {
        $("#" + errorDiv).css("display", "none");        
    }
    // Setea la propiedad valid del input
    context.setCustomValidity(result.message);        
}

function validationFieldset(fieldSet, next_step) {
    fieldSet.find('input[type="text"], input[type="password"], input[type="email"], input[type="date"], textarea, select').each(function () {          
        if($(this).is('select')) {                
            next_step = validationSelect2($(this), next_step);                
        } else {
            next_step = validationInput($(this), next_step);                
        }                                       
    });
    
    return next_step;
}

