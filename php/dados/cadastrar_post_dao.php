<?php

include "mysql.php";
include "cadastro_usuario_dao.php";

function inserir_post($id_forum, $id_usuario, $post)
{
    global $conexao;
    $sql = "insert into post(id_forum, id_usuario, post) values(" . $id_forum . ", " . $id_usuario . ", '" . $post . "');";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir endereço: " . mysqli_error($conexao));
    return mysqli_insert_id($conexao);
}

function listar_posts_forum($id_forum)
{
    global $conexao;
    $sql = "select * from post where id_forum = " . $id_forum . " order by id asc;";
    $resultado = mysqli_query($conexao, $sql) or die ("Não foi possível acessar o banco de dados.");
    if ($resultado) {
        echo "<table class='table table-striped'>";
        echo "<th>";
        echo "Usuário";
        echo "</th>";
        echo "<th>";
        echo "Post";
        echo "</th>";
        echo "</thead>";
        echo "<tbody>";
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . buscar_nome_por_id($linha['id_usuario']) . "</td>";
            echo "<td>" . $linha['post'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
}

function excluir_todos_posts($id_forum) {
    global $conexao;
    $sql = "select * from post where id_forum = " . $id_forum;
    $resultado = mysqli_query($conexao, $sql) or die ("Não foi possível acessar o banco de dados.");
    if ($resultado) {
        while ($linha = mysqli_fetch_array($resultado)) {
            $sql = "delete from post where id = " . $linha['id'];
                mysqli_query($conexao, $sql) or die ("Não foi possível acessar o banco de dados.");
                if ($linha['id'] != null) {
            }
        }
    }
}