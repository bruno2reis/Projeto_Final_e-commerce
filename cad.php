<?php
 
 require_once 'init.php';

    //$email = isset($_POST['email']) ? $_POST['email'] : null;
    
    if(isset($_POST['email'])  && isset($_POST['psw']) && isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['dtnasc']) 
    && isset($_POST['sexo']) && isset($_POST['tel'])
    && $_POST['email'] != ''&& $_POST['psw'] != '' && $_POST['cpf'] != '' && $_POST['nome'] != '' && $_POST['dtnasc'] != '' && $_POST['sexo']  
    != '' && $_POST['tel'] != '') {
     
        $email = strip_tags($_POST['email']); 
        $senha = strip_tags(md5($_POST['psw']));
        $nome = strip_tags($_POST['nome']);
        $cpf = strip_tags($_POST['cpf']);
        //var_dump($_POST['dtnasc']);die;
        //$date_nasc = dateConvert($_POST['dtnasc']);
        //var_dump($date_nasc);die;
        //$sexo = strip_tags($_POST['sexo']);
        $tel = strip_tags($_POST['tel']);

        $PDO = db_connect();

        session_start();

        $sql = " SELECT * FROM USUARIO WHERE nome = :nome";
        $result_id = $PDO->prepare($sql);
        $result_id->bindParam('nome', $nome);
        $result_id->execute();
        $num_rows = $result_id->fetchColumn();

        if($num_rows > 0){
            echo "<script type='text/javascript'>alert('Usuario já cadastrado !'); window.location.href = 'index.php'; </script>";
    
        }else{
            $sql = "INSERT INTO usuario(senha, email, nome, cpf, telefone) VALUES (:senha, :email, :nome, :cpf,   :telefone)";
            $stmt = $PDO->prepare($sql);
            $stmt->bindParam(':senha', $senha);   
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            //$stmt->bindParam(':dt_nascimento', $date_nasc);
            //$stmt->bindParam(':sexo', $sexo);
            $stmt->bindParam(':telefone', $tel);
     
     
            if ($stmt->execute())
            {
                echo "<script type='text/javascript'>alert('Usuario cadastrado com sucesso!'); window.location.href = 'index.php';</script>";
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