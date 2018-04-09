<?php
require_once 'init.php';
$email = (isset($_POST['email'])) ? $_POST['email'] : null;
$senha = (isset($_POST['psw']))? $_POST['psw'] : null;

$PDO = db_connect();
session_status();

$sql = "SELECT * FROM USUARIO WHERE email =:email";

$result_id = $PDO->prepare($sql);
$result_id->bindParam('email', $email);
$result_id->execute();
$num_rows = $result_id->fetchColumn();

if($num_rows > 0 ){
    echo "<script type='text/javascript'>alert('Usuario já cadastrado !'); window.location.href = 'index.php'; </script>";

}else{
    $sql = "INSERT INTO usuario(senha, email) VALUES (:senha, :email)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':email', $email);

    if($stmt->execute()){
        echo "<script type='text/javascript'>alert('Usuario cadastrado com sucesso!'); window.location.href = 'index.php';</script>";

    }else{
        echo "Erro ao cadastrar </br>";
        print_r($stmt->errorInfo());
    }
}