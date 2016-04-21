<?php

include "mysql.php";

// Exemplos de Chamada
// inserir_endereco("Casa do Caralho", 200, "São Paulo", "SP", 05338000);
// inserir_dados("Chris", "11122233344", "chris@", "M", "1993-10-18", 6);
// inserir_usuario("christian", "12345", 5);

function listar()
{
    global $conexao;
    $sql = "select * from dados_pessoais";
    $resultado = mysqli_query($conexao, $sql) or die ("Não foi possível acessar o banco de dados.");
    if ($resultado) {
        while ($linha = mysqli_fetch_array($resultado)) {
            echo $linha['nome'] . "<br>";
        }
    }
}

function inserir_endereco($endereco, $numero, $cidado, $estado, $cep)
{
    global $conexao;
    $sql = "insert into endereco(endereco, numero, cidade, estado, cep) values('" . $endereco . "', " . $numero . ", '" . $cidado . "', '" . $estado . "', " . $cep . ");";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir endereço: " . mysqli_error($conexao));
    return mysqli_insert_id($conexao);
}

function inserir_dados($nome, $cpf, $email, $sexo, $nascimento, $id_endereco)
{
    global $conexao;
    $sql = "insert into dados_pessoais(nome, cpf, email, sexo, nascimento, id_endereco) values('" . $nome . "', '" . $cpf . "', '" . $email . "', '" . $sexo . "', '" . $nascimento . "', " . $id_endereco . ");";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: " . mysqli_error($conexao));
    return mysqli_insert_id($conexao);
}

function inserir_usuario($usuario, $senha, $id_dados_pessoais)
{
    global $conexao;
    $sql = "insert into usuario(usuario, senha, id_dados_pessoais) values('" . $usuario . "', '" . $senha . "', " . $id_dados_pessoais . ");";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir usuário: " . mysqli_error($conexao));
}