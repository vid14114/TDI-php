/**
 * Created with JetBrains PhpStorm.
 * User: abideen
 * Date: 19/04/13
 * Time: 10:59
 * To change this template use File | Settings | File Templates.
 */

$(function()
{
    $('input[name=inputPassword]').bind('input',function(e){
        alert('Typed in');
    });
});
/*<div class="bar bar-danger" style="width: 35%;">Weak</div>
 <div class="bar bar-warning" style="width: 35%;">Medium</div>
 <div class="bar bar-success" style="width: 30%;">Strong</div>
 */