<?php
    $nome = htmlspecialchars ($_POST["nome"]);
    $cpf = htmlspecialchars ($_POST["cpf"]);
    $email = htmlspecialchars ($_POST["email"]);
    $confirmaEmail = htmlspecialchars ($_POST["confirmaEmail"]);
    $sexo = htmlspecialchars ($_POST["sexo"]);
    $dataNascimento = htmlspecialchars ($_POST["dataNascimento"]);
    $estado = htmlspecialchars ($_POST["estado"]);
    $cidade = htmlspecialchars ($_POST["cidade"]);
    $logradouro = htmlspecialchars ($_POST["logradouro"]);
    $cep = htmlspecialchars ($_POST["cep"]);
    $numero = htmlspecialchars ($_POST["numero"]);
    $username = htmlspecialchars($_POST["username"]);
    $senha = htmlspecialchars($_POST["senha"]);
    $confirmasenha = htmlspecialchars($_POST["confirmasenha"]);

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
			$destino = 'imagem/' . $arquivo['name'];
			
        
        
    }


?>
<!DOCTYPE html>
<html> 
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include 'menu.php';?>
        <section class="col-sm-4">
        </section>
        <section class="col-sm-4">
           
                 <form role='form' method='post' >
                      <div style='margin-left:300px !important;width:500px; '>
                            <fieldset style='margin:auto !important'>
                               <?php
                                
                                if(move_uploaded_file($arquivo['tmp_name'],$destino)) {
                                        // Tudo Ok, mostramos os dados 
                                        echo  '<p style="font-weight:bold;color:navy">';
                                        echo 'O Arquivo foi carregado com sucesso para ' .$destino.'!</p>';
                                       // echo "<img src='$destino' border=0>";
                                    }
                                    else {
                                        echo '<p style="font-weight:bold;color:red">Ocorreu um erro durante o upload</p>';
                                    }
                                
                                ?>                             
                            </fieldset>
                        </div>
                        <label for='nome'>Nome: </label> <?php echo $nome ?> <br>
                        <label for='cpf'>CPF: </label><?php echo $cpf ?> <br>
                        <label for='email'>email: </label> <?php echo $email ?> <br>
                        <label for='sexo'>sexo: </label> <?php echo $sexo ?> <br> 
                        <label for='dataNascimento'>Data de Nascimeno: </label> <?php echo $dataNascimento ?><br>
                        <label for='logradouro'>Logradouro: </label> <?php echo $logradouro ?><br>
                        <label for='cep'>CEP: </label> <?php echo $cep ?><br>
                        <label for='numero'>Numero: </label> <?php echo $numero ?><br>                      
                        <label for='estado'> Estado: </label> <?php echo $estado ?> <br>
                        <label for='cidade'>Cidade: </label> <?php echo $cidade ?> <br>
                        <label for='username'>Nome de Usuario: </label> <?php echo $username ?><br>
                        
                        
                                           
                 </form> 
                       
        </section>
        <section class="col-sm-4">
        </section>
    </body>
</html>