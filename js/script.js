function init() {
    
   if(formulario.nome.value == ""){
       
       alert("ERRO: campo 'nome' obrigatorio");
   }
    if(formulario.email.value == ""){
       
       alert("ERRO: campo 'email' obrigatorio");
   }
    if(formulario.telefone.value == ""){
       
       alert("ERRO: campo 'telefone' obrigatorio");
   }
    
    
}

//Validação java script se o campo esta vazio na tela de cadastro de pessoais
function validarFormulario(){
    var mensagem = "";
    var nome = document.getElementById("nome");
    var cpf = document.getElementById("cpf");
    var email = document.getElementById("email");
    var confirmaEmail = document.getElementById("confirmaEmail");
    var masculino = document.getElementById("M").checked;         
    var feminino = document.getElementById("F").checked;  
    var checado = true;
    var dataNascimento = document.getElementById("dataNascimento");   
    var logradouro = document.getElementById("logradouro");
    var numero = document.getElementById("numero");       
    var estado = document.getElementById("estado");
    var cidade = document.getElementById("cidade");
    var cep = document.getElementById("cep");
    
    if(masculino || feminino == true){
       var sexo = document.getElementById("sexo");         
    }else{
        
        checado = false;
    }
    
    if(nome.value == ""){
        
        mensagem += "ERRO FALTA O NOME \n";
    }
    if(cpf.value == ""){
        
        mensagem += "ERRO FALTA O CPF \n";
        
    }
     if(email.value == ""){
        
        mensagem += "ERRO FALTA O EMAIL \n";
        
    }
     if(confirmaEmail.value == ""){
        
        mensagem += "ERRO FALTA O CORFIRMAR EMAIL \n";
        
    }  if(checado == false){
        
        mensagem += "ERRO FALTA O SEXO \n";
        
    }  
    
    if(dataNascimento.value == ""){
        
        mensagem += "ERRO FALTA A DATA DE NASCIMENTO \n";
        
    }
    if(logradouro.value == ""){
        
        mensagem += "ERRO FALTA O LOGRADOURO \n";
        
    }
     if(numero.value == ""){
        
        mensagem += "ERRO FALTA O NUMERO DA RESIDENCIA \n";
        
    }
  
    if(cidade.value == ""){
        
        mensagem += "ERRO FALTA A CIDADE \n";
        
    }
    if(cep.value == ""){
        
        mensagem += "ERRO FALTA O CEP \n";
        
    }
    if(mensagem != ""){
        
        alert(mensagem);
        return false;
    }else{
        return true;
    }
    
}

//Validação java script se o campo esta vazio na tela de cadastro de cadastro de conta
function validarFormulario1(){
    var mensagem = "";
    var usuario = document.getElementById("usuario");
    var senha = document.getElementById("senha");
    var confirmarSenha = document.getElementById("confirmarSenha");
   
    
    if(usuario.value == ""){
        
        mensagem += "ERRO FALTA O USUARIO \n";
    }
    if(senha.value == ""){
        
        mensagem += "ERRO FALTA A SENHA \n";
        
    }
     if(confirmarSenha.value == ""){
        
        mensagem += "ERRO FALTA O CONFIRMAR SENHA \n";
        
    }   
    if(mensagem != ""){
        
        alert(mensagem);
        return false;
    }else{
        return true;
    }
    
}


//Validação java script se o campo esta vazio na tela de cadastro de cadastro de formulario
function validarFormularioForum(){
    var mensagem = "";
    var titulo = document.getElementById("titulo");
    var pergunta = document.getElementById("pergunta");
   
   
    
    if(titulo.value == ""){
        
        mensagem += "ERRO FALTA O TITULO DO FORUM \n";
    }
    if(pergunta.value == ""){
        
        mensagem += "ERRO FALTA A PRIMERIA PERGUNTA DO FORUM \n";
        
    }
   
    if(mensagem != ""){
        
        alert(mensagem);
        return false;
        
    }else{
        
        return true;
    }
    
}


//Validação java script se o campo esta vazio na tela de formulario no post
function validarFormularioPost(){
    var mensagem = "";
    var post = document.getElementById("post");  
    
    if(post.value == ""){
        
        mensagem += "digite algo no post \n";
    }  
    if(mensagem != ""){
        
        alert(mensagem);
        return false;
        
    }else{
        
        return true;
    }
    
}



    //validação via jquery para as mascaras.

    $(document).ready(function() {      
      
     $("#cpf").mask("999.999.999-99");
     $("#dataNascimento").mask("00/00/0000");
     $("#cep").mask("00000-000");
      
      
 }); 

 