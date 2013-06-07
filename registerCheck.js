/**
 * User: Abideen
 * Date: 19/04/13
 * Time: 10:59
 */

$(function()
{
    var password = $('#password');
    password.bind('input',function(e){
        //Also in this method, we need to check whether both passwords match, because the button is still checked even though the user changed the password and they didn't match

        if(password.val() == $('#password2').val())
            $('#passCheck3').addClass('icon-ok');
        else
            $('#passCheck3').removeClass('icon-ok');

        $('.progress .bar').addClass('hidden');
        $('#passCheck, #passCheck2').removeClass('icon-ok');
        if(password.val().length > 5){
            $('.progress .bar:eq(0)').removeClass('hidden');
            if(password.val().length > 7){
                $('#passCheck').addClass('icon-ok');
                if(/[^a-z]/.test(password.val())){
                    $('.progress .bar:eq(1)').removeClass('hidden');
                    $('#passCheck2').addClass('icon-ok');
                }
            }
            if(password.val().length > 10 && /[0-9]/.exec(password.val())[0] != null)
                $('.progress .bar:eq(2)').removeClass('hidden');
        }
    });

    $("#username").bind("input", function(){
        if($('#username').val().length > 4)
            $('#userCheck').addClass('icon-ok');
        else
            $('#userCheck').removeClass('icon-ok');
    });

    $('#password2').bind("input", function(){
        if(password.val() == $('#password2').val())
            $('#passCheck3').addClass('icon-ok');
        else
            $('#passCheck3').removeClass('icon-ok');
    });

    $('#email').bind("input", function(){
        if(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/.test($('#email').val()))
            $('#emailCheck').addClass('icon-ok');
        else
            $('#emailCheck').removeClass('icon-ok');
    });

    $("form").bind("submit", function(){
        if($('.checker.icon-ok').length == 5)
            return true;
        else
            return false;
    });
});