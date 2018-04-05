<?php

//require_once "banco.php";

$email = (isset($_POST['email'])) ? $_POST['email'] : null;


header('Content-type: application/json');
echo json_decode($email);


?>