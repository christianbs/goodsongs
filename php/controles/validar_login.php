<?php
session_start();
$login = $_SESSION['login'];
$senha = $_SESSION['senha'];
if ($login == "" || $senha == "") {
    header("location:login.php");
}
