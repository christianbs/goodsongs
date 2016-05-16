<?php
include "../dados/cadastro_usuario_dao.php";
session_start();
$login = $_SESSION['login'];
$senha = $_SESSION['senha'];
if ($login == "" || $senha == "") {
    header("location:login.php");
}
