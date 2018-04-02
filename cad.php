<?php
 
    if(isset($_POST['email']) && isset($_POST['psw']) && $_POST['email'] != '' && $_POST['psw'] != '') {
     
        $email = strip_tags($_POST['email']); 
        $psw = strip_tags($_POST['psw']); 
         
        sleep(2); //apagar
         
        $html = "<p>Os dados enviados foram:</p>";
        $html .= "<ul>";
        $html .= "<li>Email: <strong>$email</strong></li>";
        $html .= "<li>Senha: <strong>$psw</strong>";
        $html .= "</ul>";
         
        echo $html;
     
    } else {
     
        echo "<script type='text/javascript'>alert('Por favor preencha os campos')</script>"; 
         
    }
 
?>