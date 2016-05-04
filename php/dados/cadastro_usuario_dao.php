<?php

include "mysql.php";

// Exemplos de Chamada
// inserir_endereco("Casa do Caralho", 200, "São Paulo", "SP", 05338000);
// inserir_dados("Chris", "11122233344", "chris@", "M", "1993-10-18", 6);
// inserir_usuario("christian", "12345", 5);

function carregar_usuario_para_update($id){    
    
    global $conexao;
        $sql = "select * from dados_pessoais inner join usuario on dados_pessoais.id = usuario.id_dados_pessoais 
        inner join endereco on dados_pessoais.id = dados_pessoais.id_endereco
        where usuario.id = " .$id . ";";
        
    
        $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir usuário: " . mysqli_error($conexao));
        if ($resultado) {
            while ($linha = mysqli_fetch_array($resultado)) {
             
                $nome = $linha['nome'];
                $cpf =  $linha['cpf'];
                $email = $linha['email'];
                $sexo = $linha['sexo'];
                $nascimento = $linha['nascimento'];
                $usuario= $linha['usuario'];
                $senha = $linha['senha'];
                $endereco = $linha['endereco'];
                $numero = $linha['numero'];
                $cidade = $linha['cidade'];
                $estado = $linha['estado'];
                $cep = $linha['cep'];
                $idEndereco = $linha['id_endereco'];
                
        }
    }
    
    $listaDeDadosDoUsuario = array($nome,$cpf,$email,$sexo,$nascimento,$usuario,$senha,$endereco,$numero, $cidade,$estado,$cep,$idEndereco);
    
    return $listaDeDadosDoUsuario;
     
    
}

function update_dados_pessoais($idDadosPessoais,$nome,$cpf,$email,$sexo,$nascimento ){
    
    global $conexao;
    $sql = "UPDATE dados_pessoais SET nome='$nome',cpf='$cpf',email='$email',sexo='$sexo',nascimento='$nascimento'
    where id=".$idDadosPessoais.";";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao atualizar os dados_pessoais: " . mysqli_error($conexao)); 
     
    
}
function update_endereco($idEndereco,$endereco,$numero,$cidade,$estado,$cep){
    
    global $conexao;
    $sql = "UPDATE endereco SET endereco='$endereco',numero='$numero',cidade='$cidade',estado='$estado',cep='$cep'
    where id=".$idEndereco." ;";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao atualizar o endereco: " . mysqli_error($conexao));    
    
}
function update_usuario($idDadosPessoais,$usuario,$senha){
    
    global $conexao;
    $sql = "UPDATE usuario SET usuario='$usuario',senha='$senha'
    where id=".$idDadosPessoais." ;";
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao atualizar o usuario: " . mysqli_error($conexao));    
    
}



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
            echo "<form action='atualizar_usuario.php'  method='POST'>";
            echo '<td style="text-align: center;"><button type="submit" class="btn btn-default" name="btn_alterar" value="'.$linha['id'].'">
                    <i class="glyphicon glyphicon-pencil"></i>
                </button></td>';
            echo "</form>";
            echo '<td style="text-align: center;"><button type="submit" class="btn btn-default" name="btn_excluir" value="'.$linha['id'].'">
                    <i class="glyphicon glyphicon-remove-circle"></i>
                </button></td>';
            
          
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
            return $linha['nome'];
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