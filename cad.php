<?php
 
 require_once 'init.php';
    if(isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['nome'])
        && isset($_POST['cpf']) && isset($_POST['dtnasc']) && isset($_POST['sexo'])
        && isset($_POST['tel']) && $_POST['email'] != '' && $_POST['psw'] != ''
        && $_POST['nome'] != '' && $_POST['cpf'] =! '' && $_POST['dtnasc']
            && $_POST['tel'] != '' && $_POST['sexo']) {
     
        $email = strip_tags($_POST['email']); 
        $senha = strip_tags(md5($_POST['psw']));
        $nome = strip_tags($_POST['nome']);
        $cpf = strip_tags($_POST['cpf']);
        $dtnascimento = strip_tags($_POST['dtnasc']);
        $tel = strip_tags($_POST['tel']);
        $sexo = strip_tags($_POST['sexo']);

        $PDO = db_connect();

        session_start();

        session_cache_expire(0);
        //$_SESSION['usuario'] = $nome;

        $sql = "select email from farma_senac where email = :email";
        $result_id = $PDO->prepare($sql);
        $result_id->bindParam('email', $email);
        $result_id->execute();
        $num_rows = $result_id->fetchColumn();

        if($num_rows > 0){
            echo "<script>alert(' Usuário cadastrado já está cadastrado!'); document.location.href = 'index.php';</script>";
        }else{
            $sql = "INSERT INTO usuario(senha, email, nome,cpf, dtnascimento, telefone, sexo) 
                VALUES
                    (:senha, :email, :nome, :cpf, :dtnascimento, :telefone, :sexo)";
            $stmt = $PDO->prepare($sql);
            $stmt->bindParam(':senha', $senha);   
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':dtnascimento', $dtnascimento);
            $stmt->bindParam(':telefone', $tel);
            $stmt->bindParam(':sexo', $sexo);

            if ($stmt->execute())
            {
                $_SESSION['usuario'] = $stmt->lastInsertId();
                echo "<script>alert(' Usuário cadastrado com sucesso!'); document.location.href = 'index.php';</script>";
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