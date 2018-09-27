
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
        parent_fieldset.find('input[type="text"], input[type="password"], textarea, select').each(function () {
            if($(this).is('select')) { 
                next_step = validationSelect2($(this), next_step); 
            } else {
                if ($(this).val() === "") {
                    $(this).addClass('input-error');                
                    next_step = false;
                } else {
                    $(this).removeClass('input-error');
                } 
            }                                       
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
            });
        }        
    });
    

    // previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });

    // submit
    $('.registration-form').on('submit', function (e) {

        $(this).find('input[type="text"], input[type="password"], textarea').each(function () {
            if ($(this).val() === "") {
                e.preventDefault();
                $(this).addClass('input-error');
            } else {
                $(this).removeClass('input-error');
            }
        });

    });
    
    function validationSelect2(select, isValid){
        if ((select.val() === "" || select.val() === null) && select.parent().css("display") === "block") {
            $("#select2-" + select[0].id + "-container").parent().addClass("myErrorClass");
            isValid = false;
        }else{
            $("#select2-" + select[0].id + "-container").parent().removeClass("myErrorClass");            
        }
        
        return isValid;
    }
});
