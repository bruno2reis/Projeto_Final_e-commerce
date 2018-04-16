<?php

require_once 'login_users.php';
if(isset($_SESSION['logado'])){
    session_destroy();
    header("Location:index.php");
}