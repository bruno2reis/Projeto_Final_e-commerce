/* Para fazer com que os carrosséis não se movimentem automaticamente */

$(document).ready(function () {
    $("#salvar").click(function(e){   
        e.preventDefault();
        var form = $("#myForm").serialize();
        
        $("#myForm").validate({
            rules : {
                  email:{
                    required: true, email: true
                  },
                  senha:{
                         required:true
                  },
                  cpf:{
                      required:true,
                      number:true,
                  }
                                                  
            },
            messages:{
                  email:{
                    required: "Digite o seu e-mail para contato",
                    email: "Digite um e-mail válido "
                  },
                  senha:{
                    required: "Digite o sua senha",
                    minLength: "O sua senha deve conter, no mínimo, 5 caracteres"
                  },
                   
            }
     });
     

        //var form = new FormData($(this)[0]);
if($("#myForm").valid()){
    $.ajax({
        url: "cad.php",
        dataType: 'html',
        type: 'POST',
        data: form,
                beforeSend: function() {
                    
                    $('#insere_aqui').html('cadastrando'); 
                },
                complete: function() {
                    $('cadastrando').remove(); 
                },
                success: function(data, textStatus) {
                    $('#insere_aqui').html('<p>' + data + '</p>');  
                },
                error: function(xhr,er) {
                    $('#mensagem_erro').html('<p class="destaque">Error ' + xhr.status + ' - ' + xhr.statusText + '<br />Tipo de erro: ' + er + '</p>')
                }
        });
    }else{
        alert(error);die;
    }    
});  

});
