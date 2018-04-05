<?php
 
 require_once 'init.php';


    if(isset($_POST['email']) && isset($_POST['psw']) && $_POST['email'] != '' && $_POST['psw'] != '') {
     
        $email = strip_tags($_POST['email']); 
        $senha = strip_tags(md5($_POST['psw'])); 
        
        $PDO = db_connect();

        session_start();

        $sql = "select email from farma_senac where email = :email";
        $result_id = $PDO->prepare($sql);
        $result_id->bindParam('email', $email);
        $result_id->execute();
        $num_rows = $result_id->fetchColumn();

        if($num_rows > 0){
            // o header location não funcionão ver outra forma
                header("Location: index.php");
        }else{
            $sql = "INSERT INTO usuario(senha, email) VALUES(:senha, :email)";
            $stmt = $PDO->prepare($sql);
            $stmt->bindParam(':senha', $senha);   
            $stmt->bindParam(':email', $email);
     
     
            if ($stmt->execute())
            {
                $html = "<p> Usuário cadastrado com sucesso!</p>";
                echo $html;
                // o header location não funcionão ver outra forma
            }
            else
            {
                echo "Erro ao cadastrar </br>";
                print_r($stmt->errorInfo());
            }
            
        }
    } else {
     
        echo "<script type='text/javascript'>alert('Por favor preencha os campos')</script>"; 
         
    }
    
 
?>