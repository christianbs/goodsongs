<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Guitarras Contato</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    </head>
    <body > 
        <header> 
            <a href="index.html" class="home">Home</a>
            <nav class="menu">
                <ul>
                    <li><a href="">Modelos</a>
                        <ul>
                            <li><a href="lespaul.html">Les Paul</a></li>
                            <li><a href="sg.html">SG</a></li>
                            <li><a href="flyingv.html">Flying V</a></li>
                            <li><a href="stratocaster.html">Stratocaster</a></li>
                            <li><a href="telecaster.html">Telecaster</a></li>
                        </ul>
                    </li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </nav>
        </header>
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