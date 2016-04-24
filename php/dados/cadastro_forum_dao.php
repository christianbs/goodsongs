<?php

include "mysql.php";

function inserir_forum($id_usuario, $titulo)
{
    global $conexao;
    $sql = "insert into forum(id_usuario, titulo) values(" . $id_usuario . ", '" . $titulo . "');";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir endereço: " . mysqli_error($conexao));
    return mysqli_insert_id($conexao);
}

function listar_foruns()
{
    global $conexao;
    $sql = "select * from forum";
    $resultado = mysqli_query($conexao, $sql) or die ("Não foi possível acessar o banco de dados.");
    if ($resultado) {
        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<th>";
        echo "Titulo";
        echo "</th>";
        echo "</thead>";
        echo "<tbody>";
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td><a onclick='carregarIdForum(" . $linha['id'] . ", \"" . $linha['titulo'] . "\")'> " . $linha['titulo'] . "</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
}

function listar_foruns_admin()
{
    global $conexao;
    $sql = "select * from forum";
    $resultado = mysqli_query($conexao, $sql) or die ("Não foi possível acessar o banco de dados.");
    if ($resultado) {
        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<th>";
        echo "Titulo";
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
            echo "<td><a onclick='carregarIdForum(" . $linha['id'] . ", \"" . $linha['titulo'] . "\")'> " . $linha['titulo'] . "</a></td>";
            echo "<td style='text-align: center;'><a><span class=\"glyphicon glyphicon-pencil\"></span></a></td>";
            echo "<td style='text-align: center;'><a data-toggle=\"modal\" data-target=\"#modalExcluirForum\"><span class=\"glyphicon glyphicon-remove-circle\"></span></a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
}
