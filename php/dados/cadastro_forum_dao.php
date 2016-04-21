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