<?php

include "../regras/cadastro_usuario_rn.php";

$nome = htmlspecialchars($_POST["nome"]);
$cpf = htmlspecialchars($_POST["cpf"]);
$email = htmlspecialchars($_POST["email"]);
$confirmaEmail = htmlspecialchars($_POST["confirmaEmail"]);
$sexo = htmlspecialchars($_POST["sexo"]);
$dataNascimento = htmlspecialchars($_POST["dataNascimento"]);
$estado = htmlspecialchars($_POST["estado"]);
$cidade = htmlspecialchars($_POST["cidade"]);
$logradouro = htmlspecialchars($_POST["logradouro"]);
$cep = htmlspecialchars($_POST["cep"]);
$numero = htmlspecialchars($_POST["numero"]);
$usuario = htmlspecialchars($_POST['usuario']);
$senha = htmlspecialchars($_POST['senha']);
$confirmar_senha = htmlspecialchars($_POST['confirmarSenha']);

$id_endereco = inserir_endereco_rn($logradouro, $numero, $cidade, $estado, $cep);
$id_dados = inserir_dados_rn($nome, $cpf, $email, $sexo, $dataNascimento, $id_endereco);
inserir_usuario_rn($usuario, $senha, $id_dados);

header("location:../../inicio.php");