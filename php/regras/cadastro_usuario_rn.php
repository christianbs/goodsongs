<?php
include "../dados/cadastro_usuario_dao.php";

function listar_usuarios()
{
    listar();
}

function inserir_endereco_rn($endereco, $numero, $cidado, $estado, $cep)
{
    return inserir_endereco($endereco, $numero, $cidado, $estado, $cep);
}

function inserir_dados_rn($nome, $cpf, $email, $sexo, $nascimento, $id_endereco)
{
    return inserir_dados($nome, $cpf, $email, $sexo, $nascimento, $id_endereco);
}

function inserir_usuario_rn($usuario, $senha, $id_dados_pessoais)
{
    inserir_usuario($usuario, $senha, $id_dados_pessoais);
}