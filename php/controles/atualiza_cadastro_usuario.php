<?php
    $mensagem = "";

   if(empty($_POST["nome"]) || empty($_POST["cpf"]) || empty($_POST["email"]) || empty($_POST["confirmaEmail"]) || empty($_POST["sexo"]) || empty($_POST["dataNascimento"]) || empty($_POST["estado"]) || empty($_POST["cidade"]) || empty($_POST["logradouro"]) || empty($_POST["cep"]) || empty($_POST["numero"]) || empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['confirmarSenha'])){      
     
        $mensagem = "CAMPOS VAZIOS </br> ";        
        
    } if(strcmp(htmlspecialchars($_POST['senha']),htmlspecialchars($_POST['confirmarSenha'])) != 0 ){
       
         $mensagem .= "ERRO AS SENHAS ESTÃO DIFERENTES INSIRA NOVAMENTE </br> ";        
       
   }
    if($mensagem != ""){        
       
        echo $mensagem;
        
        echo "<input type='button' class='btn btn-default' id='voltar' name='voltar' value='voltar' onclick='history.go(-1)'> ";
        exit;         

   }else{
       include "../regras/cadastro_usuario_rn.php";
        
        $idDadosPessoais = htmlspecialchars($_POST["idDadosPessoais"]); 
        $idEndereco = htmlspecialchars($_POST['idEndereco']);
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
       
        
        update_dados_pessoais($idDadosPessoais,$nome,$cpf,$email,$sexo,$dataNascimento);
        update_endereco($idEndereco,$logradouro,$numero,$cidade,$estado,$cep);
        update_usuario($idDadosPessoais,$usuario,$senha);
 
   }