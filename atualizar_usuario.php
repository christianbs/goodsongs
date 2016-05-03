<?php 

$estados = array(
    "Acre"=>"AC",	 
    "Alagoas"=>	"AL",	 
    "Amapá"=>"AP",	 
    "Amazonas"=>"AM",	 
    "Bahia"=>"BA",	 
    "Ceará"=>"CE",	 
    "Distrito Federal"=>"DF",	 
    "Espírito Santo"=>"ES", 
    "Goiás"	=>"GO"	,
    "Maranhão"=>"MA",	 
    "Mato Grosso"=>"MT",	 
    "Mato Grosso do Sul"=>"MS",	 
    "Minas Gerais"=>"MG",
    "Pará"=>"PA",
    "Paraíba"=>"PB", 
    "Paraná"=>"PR",
    "Pernambuco"=>"PE",	 
    "Piauí"=>"PI",
    "Rio de Janeiro"=>"RJ",	 
    "Rio Grande do Norte"=>"RN",	 
    "Rio Grande do Sul"=>"RS",	 
    "Rondônia"=>"RO",
    "Roraima"=>"RR",
    "Santa Catarina"=>"SC",	 
    "São Paulo"=>"SP",
    "Sergipe"=>"SE",
    "Tocantins"=>"TO"
    );

    include "php/dados/cadastro_usuario_dao.php";


    /* USAR ESSE ISSET DE UMA OUTRA MANEIRA, DEIXEI AQUI SOMENTE PARA TESTAR
     if(isset($_POST["btn_alterar"]))
        {

            echo "O usuário que será alterado: ".$_POST["btn_alterar"];
        }
            */

        $resultado=carregar_usuario_para_update($_POST["btn_alterar"]); 

        $nome = $resultado[0];     
        $cpf  = $resultado[1];
        $email = $resultado[2];
        $sexo = $resultado[3];
        $nascimento = $resultado[4];
        $usuario = $resultado[5];
        $senha = $resultado[6];
        $endereco = $resultado[7];
        $numero = $resultado[8];
        $cidade = $resultado[9];
        $estado = $resultado[10];
        $cep = $resultado[11];
        $idEndereco = $resultado[12];
     
        $idDadosPessoais = $_POST["btn_alterar"];
                
?>

<!DOCTYPE html> 
<html> 
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script  src="js/jquery.mask.min.js"></script>
        
    	<script src="js/script.js"></script>

	</head>
	<body>
		<?php include 'menu.php';?>
       
        <section class="col-sm-4">
        </section>
        <section class="col-sm-4">
            <form role="form" enctype='multipart/form-data' action="php/controles/atualiza_cadastro_usuario.php" method="post" >
                
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" class="form-control" value="<?php echo $nome ?>" id="nome" name="nome"/>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" value="<?php echo $cpf ?>" id="cpf" name="cpf"/>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" value="<?php echo $email ?>" id="email" name="email"/>
                </div>
                <div class="form-group">
                    <label for="confirmaEmail">Confirmar E-mail:</label>
                    <input type="email" class="form-control" id="confirmaEmail" name="confirmaEmail"/>
                </div>
                
                <div class="form-group">
                    <label for="sexo">Sexo:</label><br>
                    <label for="sexo"> <input type="radio" name="sexo" id="M" value="M"> Masculino</label><br>
                    <label for="sexo"> <input type="radio" name="sexo" id="F" value="F"> Feminino</label><br>
                </div>
               
                <div class="form-group">
                    <label for="dataNascimento" >Data nascimento:</label>
                    <input type="text" class="form-control" value="<?php echo $nascimento ?>" id="dataNascimento" name="dataNascimento"/>
                </div>
                <div class="form-group">
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" class="form-control" value="<?php echo $endereco ?>" id="logradouro" name="logradouro"/>
                </div>
                <div class="form-group">
                    <label for="numero">Número:</label>
                    <input type="text" class="form-control" value="<?php echo $numero ?>" id="numero" name="numero"/>
				  
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" value="<?php echo $cidade ?>" id="cidade" name="cidade"/>
                </div>
                  <div class="form-group">
                    <label for="estado">Estado:</label>
                    <select name=estado class="form-control">
                        <?php
                            foreach($estados as $estado => $sigla ){
                                
                                echo "<option value='$estado'>$sigla</option>";
                                
                            }
                        
                        ?>           
                    </select>
                </div>                
                <div class="form-group">
                    <label for="cep">CEP:</label>
                    <input type="text" class="form-control" value="<?php echo $cep ?>" id="cep" name="cep"/>
                </div>       
                <div class="form-group">
                    <label for="usuario">Usuário:</label>
                    <input type="text" class="form-control" value="<?php echo $usuario ?>" id="usuario" name="usuario">
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" value="<?php echo $senha ?>" id="senha" name="senha"> 
                </div>
                <div class="form-group">
                    <label for="confirmarSenha">Confirmação de Senha:</label>
                    <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha">
                </div>  
                 <div class="form-group">
                    
                    <input type="hidden" class="form-control" value="<?php echo $idDadosPessoais ?>" id="idDadosPessoais" name="idDadosPessoais">
                </div>
                <div class="form-group">                    
                    <input type="hidden" class="form-control" value="<?php echo $idEndereco ?>" id="idEndereco" name="idEndereco">
                </div>
                   
                <p><input type="submit"  class="btn btn-default" value="Proximo" name="prosseguir"/></p>
            </form>
        </section>             
    </body>
</html>