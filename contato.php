<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Guitarras Contato</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
           <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body > 
     <?php include 'menu.php' ?>
        <section>
            <div class="imagem">
                <img src="images/lespaul.jpg" class="imagem-principal"/>            
                    
                    <form name="formulario" onsubmit="init()">
                       <div class="contato">
                         <table>
                             <tr>
                                <td>Nome </td>
                                <td><input type="text" name="nome" placeholder="Nome completo" /></td> 
                             </tr>
                              <tr>
                                <td> E-mail </td>
                                 <td><input type="text" name="email" placeholder="xxxxx@xxxx.xxx"/></td>
                             </tr>
                             <tr>
                                <td>Telefone </td>
                                 <td><input type="text"  name="telefone" placeholder="(xx) xxxx-xxx" /></td>
                             </tr>
                             <tr>
                                <td> sugestões:</td>
                                  
                             </tr>   
                             <tr>
                                 <td> </td>
                                    <td><input type="text" id="comentarios" placeholder="Deixe aqui uma sugestao"/></td>
                             </tr>
                             <tr>
                                <td>  </td>
                            <td><input type="checkbox" name="checkAtualidades" />  Quer receber novidades no email</td>
                                
                             </tr>
                             <tr>
                                <td>  </td>
                                 <td><input type="submit" value="Enviar" class="botao" /> </td>                             
                             </tr>
                         </table>
                    </div>
                </form>          
            </div>
        </section>
        <section>
            
        </section>
        <script src="js/script.js"></script>
    </body>
</html>