<?php
require_once 'init.php';

$msg = false;
$codprod = null;
$PDO = db_connect();

if(isset($_FILES['arquivo'])){

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "img/";

        move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome);

        $sql_code = "INSERT INTO produto (codprod, img) VALUES (null, '$novo_nome')";

        $result_id = $PDO->prepare($sql_code);
        $result_id->bindParam('img', $novo_nome);
        $result_id->bindParam('codprod', $codprod);
        //$result_id->bindParam('data', NOW());
        $result_id->execute();
        $num_rows = $result_id->fetchColumn();
        var_dump($num_rows);die;
        if($num_rows){
            echo "<script type='text/javascript'>alert('Foto cadastrada !'); window.location.href = 'cad_img.php'; </script>";

        }else{

            echo "<script type='text/javascript'>alert('Foto não foi cadstrada !'); window.location.href = 'cad_img.php'; </script>";
        }

}