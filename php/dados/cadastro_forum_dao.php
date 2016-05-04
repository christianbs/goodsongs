<?php

include "mysql.php";

function carregar_forum_para_update($id){
        global $conexao;
        $sql = "SELECT * from forum WHERE forum.id = " .$id . ";";        
    
        $resultado = mysqli_query($conexao, $sql) or die ("Erro ao cegar_forum_para_update: " . mysqli_error($conexao));
        if ($resultado) {
            while ($linha = mysqli_fetch_array($resultado)) {                
                $titulo = $linha['titulo'];                     
        }
    }       
    return $titulo;   
}
function update_forum($idForum,$titulo ){
    
    global $conexao;
    $sql = "UPDATE forum SET titulo='$titulo'
    where id=".$idForum.";";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao atualizar o forum: " . mysqli_error($conexao)); 
     
    
}
function inserir_forum($id_usuario, $titulo)
{
    global $conexao;
    $sql = "insert into forum(id_usuario, titulo) values(" . $id_usuario . ", '" . $titulo . "');";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir forum: " . mysqli_error($conexao));
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
            echo "<td style='text-align: center;'><a data-toggle=\"modal\" data-target=\"#modalAlterarForum\" onclick='setIdAlterarForum(\"" . $linha['id'] . "\")'><span class=\"glyphicon glyphicon-pencil\"></span></a></td>";
            echo "<td style='text-align: center;'><a data-toggle=\"modal\" data-target=\"#modalExcluirForum\" onclick='setIdForumExcluido(\"" . $linha['id'] . "\")'><span class=\"glyphicon glyphicon-remove-circle\"></span></a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
}

function excluir_forum($id_forum) {
    global $conexao;
    $sql = "delete from forum where id = " . $id_forum;
    $resultado = mysqli_query($conexao, $sql) or die ("Não foi possível acessar o banco de dados.");
}