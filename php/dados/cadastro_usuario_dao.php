<?php

include "mysql.php";

// Exemplos de Chamada
// inserir_endereco("Casa do Caralho", 200, "São Paulo", "SP", 05338000);
// inserir_dados("Chris", "11122233344", "chris@", "M", "1993-10-18", 6);
// inserir_usuario("christian", "12345", 5);


function carregar_usuario_para_update($id)
{

    global $conexao;
    $sql = "select * from dados_pessoais inner join usuario on dados_pessoais.id = usuario.id_dados_pessoais 
        inner join endereco on dados_pessoais.id = dados_pessoais.id_endereco
        where usuario.id = " . $id . ";";


    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao carregar_usuario_para_update: " . mysqli_error($conexao));
    if ($resultado) {
        while ($linha = mysqli_fetch_array($resultado)) {

            $nome = $linha['nome'];
            $cpf = $linha['cpf'];
            $email = $linha['email'];
            $sexo = $linha['sexo'];
            $nascimento = $linha['nascimento'];
            $usuario = $linha['usuario'];
            $senha = $linha['senha'];
            $endereco = $linha['endereco'];
            $numero = $linha['numero'];
            $cidade = $linha['cidade'];
            $estado = $linha['estado'];
            $cep = $linha['cep'];
            $idEndereco = $linha['id_endereco'];

        }
    }

    $listaDeDadosDoUsuario = array($nome, $cpf, $email, $sexo, $nascimento, $usuario, $senha, $endereco, $numero, $cidade, $estado, $cep, $idEndereco);

    return $listaDeDadosDoUsuario;


}

function update_dados_pessoais($idDadosPessoais, $nome, $cpf, $email, $sexo, $nascimento)
{

    global $conexao;
    $sql = "UPDATE dados_pessoais SET nome='$nome',cpf='$cpf',email='$email',sexo='$sexo',nascimento='$nascimento'
    where id=" . $idDadosPessoais . ";";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao atualizar os dados_pessoais: " . mysqli_error($conexao));


}

function update_endereco($idEndereco, $endereco, $numero, $cidade, $estado, $cep)
{

    global $conexao;
    $sql = "UPDATE endereco SET endereco='$endereco',numero='$numero',cidade='$cidade',estado='$estado',cep='$cep'
    where id=" . $idEndereco . " ;";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao atualizar o endereco: " . mysqli_error($conexao));

}

function update_usuario($idDadosPessoais, $usuario, $senha)
{

    global $conexao;
    $sql = "UPDATE usuario SET usuario='$usuario',senha='$senha'
    where id=" . $idDadosPessoais . " ;";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao atualizar o usuario: " . mysqli_error($conexao));

}


function listar_usuarios_admin()
{
    global $conexao;
    $sql = "select * from dados_pessoais inner join usuario on dados_pessoais.id = usuario.id_dados_pessoais where usuario.ativo = 1;";
    $resultado = mysqli_query($conexao, $sql) or die ("Não foi possível acessar o banco de dados.");
    if ($resultado) {
        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<th>";
        echo "Nome";
        echo "</th>";
        echo "<th style='text-align: center;'>";
        echo "Editar";
        echo "</th>";
        echo "<th style='text-align: center;'>";
        echo "Excluir";
        echo "</th>";
        echo "</thead>";
        echo "<tbody>";
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr>
                <td>" . $linha['nome'] . "</td>
                <td style='text-align: center;'><a data-toggle=\"modal\" data-target=\"#modalAlterarUsuario\" onclick='setIdAlterarUsuario(\"" . $linha['id'] . "\")'><span class=\"glyphicon glyphicon-pencil\"></a></span></td>
                <td style='text-align: center;'><a data-toggle=\"modal\" data-target=\"#modalExcluirUsuario\" onclick='setIdUsuarioExcluido(\"" . $linha['id'] . "\")'><span class=\"glyphicon glyphicon-remove-circle\"></a></span></td>
             </tr>";
        }
        echo "</tbody>";
        echo "</table>";
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
    $admin = verificar_existencia_usuario_admin();
    $sql = "insert into usuario(usuario, senha, id_dados_pessoais, administrador, ativo) values('" . $usuario . "', '" . md5($senha) . "', " . $id_dados_pessoais . ", " . $admin . ", 1);";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir usuário: " . mysqli_error($conexao));
}

function verificar_existencia_usuario_admin()
{
    global $conexao;
    $sql = "select * from usuario where administrador = 1 and ativo = 1;";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir usuário: " . mysqli_error($conexao));
    $contador = 0;
    if ($resultado) {
        while ($linha = mysqli_fetch_array($resultado)) {
            $contador = $contador + 1;
        }
    }
    if ($contador > 0) {
        return 0;
    } else {
        return 1;
    }
}

function buscar_nome_por_id($idusuario)
{
    global $conexao;
    $sql = "select * from dados_pessoais inner join usuario on dados_pessoais.id = usuario.id_dados_pessoais where usuario.id = " . $idusuario . ";";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir usuário: " . mysqli_error($conexao));
    if ($resultado) {
        while ($linha = mysqli_fetch_array($resultado)) {
            return $linha['nome'];
        }
    }
}

function deletar_usuario($id)
{
    /*global $conexao;
    $sql = "select * from usuario where id_dados_pessoais = " . $id;
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: " . mysqli_error($conexao));
    if ($resultado) {
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "deletando usuario com id " . $linha['id'];
            $sql = "delete from usuario where id = " . $linha['id'];
            mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: " . mysqli_error($conexao));
        }
    }
    deletar_dados($id);*/
    global $conexao;
    $sql = "update usuario set ativo = 0 where id = ".$id.";";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: " . mysqli_error($conexao));
}

function deletar_dados($id)
{
    global $conexao;
    $sql = "select * from dados_pessoais where id = " . $id;
    $id_endereco = "";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: " . mysqli_error($conexao));
    if ($resultado) {
        while ($linha = mysqli_fetch_array($resultado)) {
            $id_endereco = $linha['id_endereco'];
        }
    }
    $sql = "delete from dados_pessoais where id = " . $id;
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: " . mysqli_error($conexao));
    deletar_endereco($id_endereco);

}

function deletar_endereco($id)
{
    global $conexao;
    $sql = "delete from endereco where id = " . $id;
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: " . mysqli_error($conexao));
}

function fazer_login($login, $senha)
{
    global $conexao;
    $senha = md5($senha);
    $sql = "select id, usuario, senha, administrador from usuario where usuario = ? and senha = ? and ativo = 1;";
    if ($stmt = mysqli_prepare($conexao, $sql)) {
        mysqli_stmt_bind_param($stmt, "ss", $login, $senha);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $codigo, $login_cadastrado, $senha_cadastrada, $admin);
        mysqli_stmt_fetch($stmt);
        if ($login_cadastrado == $login && $senha_cadastrada == $senha) {
            session_start();
            $_SESSION['codigo'] = $codigo;
            $_SESSION['admin'] = $admin;
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            return true;
        } else {
            return false;
        }
    }

}