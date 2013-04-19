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
        console.log(password.val());
    });
});
/*<div class="bar bar-danger" style="width: 35%;">Weak</div>
 <div class="bar bar-warning" style="width: 35%;">Medium</div>
 <div class="bar bar-success" style="width: 30%;">Strong</div>
 */