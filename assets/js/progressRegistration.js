
jQuery(document).ready(function () {

    /*
     Fullscreen background
     */
    $.backstretch("http://localhost/MusicosAlToque/assets/img/backgrounds/1.jpg");

    $('#top-navbar-1').on('shown.bs.collapse', function () {
        $.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function () {
        $.backstretch("resize");
    });

    /*
     Form
     */
    $('.registration-form fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"], .registration-form input[type="password"], .registration-form textarea').on('focus', function () {        
        $(this).removeClass('input-error');
    });

    // next step
    $('.registration-form .btn-next').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;
        parent_fieldset.find('input[type="text"], input[type="password"], input[type="email"], textarea, select').each(function () {                        
            if($(this).is('select')) { 
                next_step = validationSelect2($(this), next_step); 
            } else {
                next_step = validationInput($(this), next_step);
            }                                       
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
            });
        }
        
        var parameters = {data: {field:'usuario', text: 'Hola'}}
        var result = getDataByAjaxWithParameters($("#urlValidationField").val(), parameters);
        alert(result.field);
    });
    

    // previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });
    
    function Validation(context) {
        var isValid = true;
        $(context).find('input[type="text"], input[type="password"], input[type="email"], input[type="date"], textarea, select').each(function () {                 
            if($(this).is('select')) { 
                isValid = validationSelect2($(context), isValid); 
            } else {
                isValid = validationInput($(context), isValid);
            } 
            if (!isValid) {
                e.preventDefault();                
            }
        });
    }
});
