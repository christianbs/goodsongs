<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

include "../dados/cadastro_usuario_dao.php";

if (fazer_login($login, $senha)) {
    header("location:../../inicio.php");
} else {
    header("location:../../login.php?erro=true");
}