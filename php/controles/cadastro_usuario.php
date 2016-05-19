<?php
    $mensagem = "";

   if(empty($_POST["nome"]) || empty($_POST["cpf"]) || empty($_POST["email"]) || empty($_POST["confirmaEmail"]) || empty($_POST["sexo"]) || empty($_POST["dataNascimento"]) || empty($_POST["estado"]) || empty($_POST["cidade"]) || empty($_POST["logradouro"]) || empty($_POST["cep"]) || empty($_POST["numero"]) || empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['confirmarSenha'])){      
     
        $mensagem = "CAMPOS VAZIOS </br> ";        
        
    } if(strcmp(htmlspecialchars($_POST['senha']),htmlspecialchars($_POST['confirmarSenha'])) != 0 ){
       
         $mensagem .= "ERRO AS SENHAS ESTÃO DIFERENTES INSIRA NOVAMENTE </br> ";        
       
   }
    if($mensagem != ""){        
       include '../../menu.php';
        echo $mensagem;
        
        echo "<input type='button' class='btn btn-default' id='voltar' name='voltar' value='voltar' onclick='history.go(-1)'>";
        exit;         

   }else{
        include "../regras/cadastro_usuario_rn.php";

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
       
       
        
         if(isset($_FILES['ARQUIVO'])){
            $nome = strip_tags($_POST['nome']);					
                $arquivo = $_FILES['ARQUIVO'];
                $tamanho_maximo=$_POST['MAX_SIZE_FILE'];		

                // 1. Definir os parâmetros de teste
                $tipos_aceitos = array(	"image/gif",
                                        "image/png",
                                        "image/bmp",
                                        "image/jpeg");
                // 2. Validar o arquivo enviado
                if($arquivo['error'] != 0) {
                    echo '<p style="font-weight:bold;color:red">Erro no Upload do arquivo<br>';
                    switch($arquivo['error']) {
                    case  UPLOAD_ERR_INI_SIZE:
                        echo 'O Arquivo excede o tamanho máximo permitido.';
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        echo 'O Arquivo enviado é muito grande.';
                        break;
                    case  UPLOAD_ERR_PARTIAL:
                        echo 'O upload não foi completo.';
                        break;
                    case UPLOAD_ERR_NO_FILE:
                        echo 'Nenhum arquivo foi informado para upload.';	
                        break;
                    }
                    echo '</p>';
                    exit;
                }
                if($arquivo['size']==0 OR $arquivo['tmp_name']==NULL) {
                    echo '<p style="font-weight:bold;color:red">Nenhum arquivo enviado.</p>';
                    exit;
                }
                if($arquivo['size']>$tamanho_maximo) {
                    echo '<p style="font-weight:bold;color:red">O Arquivo enviado é muito grande
                        (Tamanho Máximo = ' . $tamanho_maximo . ' bytes).</p>';
                    exit;
                }
                if(array_search($arquivo['type'],$tipos_aceitos)===FALSE) {
                    echo '<p style="font-weight:bold;color:red">O Arquivo enviado é do tipo (' . 
                            $arquivo['type'] . ') não aceito para upload. 
                            Os tipos aceitos são:	</p>';
                    echo '<pre>';
                    print_r($tipos_aceitos);
                    echo '</pre>';
                    exit;
                }
                // Agora podemos copiar o arquivo enviado
                if (!file_exists('imagem')) {
                    mkdir('imagem', 0777, true);
                }
                $destino = str_replace(".","",'imagem/' .$cpf. $arquivo['name']);

        
        
         }
        

        $id_endereco = inserir_endereco_rn($logradouro, $numero, $cidade, $estado, $cep);
        $id_dados = inserir_dados_rn($nome, $cpf, $email, $sexo, $dataNascimento, $id_endereco);
        inserir_usuario_rn($usuario, $senha, $id_dados,$destino);

        header("location:../../inicio.php");
   }