/**
 * Created with JetBrains PhpStorm.
 * User: abideen
 * Date: 19/04/13
 * Time: 10:59
 * To change this template use File | Settings | File Templates.
 */

$(function()
{
    var password = $('#password');
    password.bind('input',function(e){
        $('.progress .bar').addClass('hidden');
        if(password.val().length > 5){
            $('.progress .bar:eq(0)').removeClass('hidden');
            console.log("Im here 2");
            if(password.val().length > 7 && /[^a-z]/.exec(password.val())[0] != null){
                console.log("Im here 3");
                $('.progress .bar:eq(1)').removeClass('hidden');
            }
            if(password.val().length > 10 && /[0-9]/.exec(password.val())[0] != null){
                $('.progress .bar:eq(2)').removeClass('hidden');
                console.log("Im here 4");
            }
        }
    });
});
/*<div class="bar bar-danger" style="width: 35%;">Weak</div>
 <div class="bar bar-warning" style="width: 35%;">Medium</div>
 <div class="bar bar-success" style="width: 30%;">Strong</div>
 */