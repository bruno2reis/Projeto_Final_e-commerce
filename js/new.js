/**
 * Created by bruno on 31/03/18.
 */
$( document ).ready(function() {
    $.ajax({
        type:'post',
        url: 'cadastro.php',
        success: function (data) {
            console.log('success'.data);
        }
    });

});