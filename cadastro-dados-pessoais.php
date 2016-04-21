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
            <form role="form" action="cadastro-dados-conta.php" method="post" onsubmit="return validarFormulario();" >
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" class="form-control" id="nome" name="nome"/>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf"/>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email"/>
                </div>
                <div class="form-group">
                    <label for="confirmaEmail">Confirmar E-mail:</label>
                    <input type="email" class="form-control" id="confirmaEmail" name="confirmaEmail"/>
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo:</label>
                    <input type="text" class="form-control" id="sexo" name="sexo"/>
                </div>
                <div class="form-group">
                    <label for="dataNascimento" >Data nascimento:</label>
                    <input type="text" class="form-control" id="dataNascimento" name="dataNascimento"/>
                </div>
                <div class="form-group">
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" class="form-control" id="logradouro" name="logradouro"/>
                </div>
                <div class="form-group">
                    <label for="numero">Número:</label>
                    <input type="text" class="form-control" id="numero" name="numero"/>
				  
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade"/>
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
                    <input type="text" class="form-control" id="cep" name="cep"/>
                </div>
                <p><input type="submit"  class="btn btn-default" value="Proximo" name="prosseguir"/></p>
            </form>
        </section>             
    </body>
</html>