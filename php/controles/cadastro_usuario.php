<?php

   if(empty($_POST["nome"]) || empty($_POST["cpf"]) || empty($_POST["email"]) || empty($_POST["confirmaEmail"]) || empty($_POST["sexo"]) || empty($_POST["dataNascimento"]) || empty($_POST["estado"]) || empty($_POST["cidade"]) || empty ($_POST["logradouro"]) || empty($_POST["cep"]) || empty($_POST["numero"]) || empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['confirmarSenha'])){
        
     
        echo "CAMPOS VAZIOS </br> ";
        echo "<input type='button' class='btn btn-default' id='voltar' name='voltar' value='voltar' onclick='history.go(-1)'> ";
        exit;
        
        
    }else{
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
   }