<?php
 
 require_once 'init.php';


    if(isset($_POST['email']) && isset($_POST['psw']) && $_POST['email'] != '' && $_POST['psw'] != '') {
     
        $email = strip_tags($_POST['email']); 
        $psw = strip_tags($_POST['psw']); 
        
        $PDO = db_connect();
        $sql = "INSERT INTO users(name, email) VALUES(:name, :email)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':name', $name);   
        $stmt->bindParam(':email', $email);
 
 
        if ($stmt->execute())
        {
            $html = "<p> Usuário cadastrado com sucesso!</p>";
            echo $html;

            header('Location: index.php');
        }
        else
        {
            echo "Erro ao cadastrar </br>";
            print_r($stmt->errorInfo());
        }
        /*    
        sleep(2); //apagar
         
        $html = "<p>Os dados enviados foram:</p>";
        $html .= "<ul>";
        $html .= "<li>Email: <strong>$email</strong></li>";
        $html .= "<li>Senha: <strong>$psw</strong>";
        $html .= "</ul>";
         
        echo $html;
    */ 
    } else {
     
        echo "<script type='text/javascript'>alert('Por favor preencha os campos')</script>"; 
         
    }
    
 
?>