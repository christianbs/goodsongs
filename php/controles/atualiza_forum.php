<?php
    $mensagem = "";

   if(empty($_POST["titulo"])){      
     
        $mensagem = "titulo vazio </br> ";        
        
    } 
    if($mensagem != ""){        
       
       include_once 'goodsongs/menu.php';
        echo $mensagem;
        
        echo "<input type='button' class='btn btn-default' id='voltar' name='voltar' value='voltar' onclick='history.go(-1)'> ";
        exit;         

   }else{
       include "../dados/cadastro_forum_dao.php";
        
        $titulo = htmlspecialchars($_POST["titulo"]);  
        $idForum = htmlspecialchars($_POST["idForum"]); 

        
        update_forum($idForum,$titulo);       
        
        header("location:../../administrador.php");
 
   }