$(document).ready(function(){
    $('.field-input').focus(function(){
        $(this).parent().addClass('is-focused has-label');
    });

    // à la perte du focus
    $('.field-input').blur(function(){
        $parent = $(this).parent();
        if($(this).val() == ''){
            $parent.removeClass('has-label');
        }
        $parent.removeClass('is-focused');
    });

    // si un champs est rempli on rajoute directement la class has-label
    $('.field-input').each(function(){
        if($(this).val() != ''){
            $(this).parent().addClass('has-label');
        }
    });

    $('#regForm').submit(function(){
        var name = $('#password2').val();
        var email = $('#expass').val();
        var password = $('#password').val();

        var result = true;

        if(password == ""){
            $('#password').parent().addClass('is-focused error');
            result = false;
        }

        return result;

    });


    $('#password').keyup(function(){
        if($('#password').val() == ""){
            $('#password').parent().addClass('is-focused error');
        }else{
            $('#password').parent().removeClass('error');
        }
    });
    
});