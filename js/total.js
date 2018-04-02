/* Para fazer com que os carrosséis não se movimentem automaticamente */

$(document).ready(function () {

$("#salvar").click(function(e){   
    e.preventDefault();
    //var form = new FormData($(this)[0]);
    var form = $("#myForm").serialize();
   
    $.ajax({
    url: "cad.php",
    dataType: 'html',
    type: 'POST',
    data: form,
            beforeSend: function() {
                $('#insere_aqui').html('iconCarregando'); 
            },
            complete: function() {
                $('iconCarregando').remove(); 
            },
            success: function(data, textStatus) {
                $('#insere_aqui').html('<p>' + data + '</p>');  
            },
            error: function(xhr,er) {
                $('#mensagem_erro').html('<p class="destaque">Error ' + xhr.status + ' - ' + xhr.statusText + '<br />Tipo de erro: ' + er + '</p>')
            }
    });
    
});

});
