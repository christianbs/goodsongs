<?php

include "mysql.php";

// Exemplos de Chamada
// inserir_endereco("Casa do Caralho", 200, "São Paulo", "SP", 05338000);
// inserir_dados("Chris", "11122233344", "chris@", "M", "1993-10-18", 6);
// inserir_usuario("christian", "12345", 5);

function listar_usuarios_admin()
{
    global $conexao;
    $sql = "select * from dados_pessoais";
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
            echo "<tr>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td style='text-align: center;'><a><span class=\"glyphicon glyphicon-pencil\"></a></span></td>";
            echo "<td style='text-align: center;'><a data-toggle=\"modal\" data-target=\"#modalExcluirUsuario\" onclick='setIdUsuarioExcluido(\"" . $linha['id'] . "\")'><span class=\"glyphicon glyphicon-remove-circle\"></a></span></td>";
            echo "</tr>";
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
    $sql = "insert into usuario(usuario, senha, id_dados_pessoais) values('" . $usuario . "', '" . $senha . "', " . $id_dados_pessoais . ");";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir usuário: " . mysqli_error($conexao));
}

function buscar_nome_por_id($idusuario)
{
    global $conexao;
    $sql = "select * from dados_pessoais inner join usuario on dados_pessoais.id = usuario.id_dados_pessoais where usuario.id = " . $idusuario . ";";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir usuário: " . mysqli_error($conexao));
    if ($resultado) {
        while ($linha = mysqli_fetch_array($resultado)) {
            return linha['nome'];
        }
    }
}

function deletar_usuario($id)
{
    global $conexao;
    $sql = "select * from usuario where id_dados_pessoais = " . $id;
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: " . mysqli_error($conexao));
    if ($resultado) {
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "deletando usuario com id ".$linha['id'];
            $sql = "delete from usuario where id = " . $linha['id'];
            mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: " . mysqli_error($conexao));
        }
    }
    deletar_dados($id);
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