<?php
require_once 'init.php';
//require_once 'funcoescarrinho.php';

session_start();
$nome = (isset($_POST['nome'])) ? $_POST['nome'] : null;
$senha = md5((isset($_POST['psw']))? $_POST['psw'] : null);
$PDO = db_connect();

$sql = "SELECT * FROM USUARIO WHERE nome =:nome AND senha=:senha";

$result_id = $PDO->prepare($sql);
$result_id->bindParam('nome', $nome);
$result_id->bindParam('senha', $senha);
$result_id->execute();
$num_rows = $result_id->fetchColumn();

if($num_rows > 0 ){
    
    $_SESSION['nome'] = $nome;
    $_SESSION['senha'] = $senha;

    //print_r($_SESSION['email']);die;
    echo "<script type='text/javascript'>alert('Bem vindo !'); window.location.href = 'index.php'; </script>";
}else{ 

    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    echo "<script type='text/javascript'>alert('Por favor prezados realize sua cadastro !'); window.location.href = 'cadastro.php';</script>";
}