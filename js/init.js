$(document).ready(function(){
    $('.slider').slider({
        height:500
    });
    
    $('.sidenav').sidenav();
    
    $(".contato").mouseover(function(){
        $(".contato > .material-icons").html("drafts");
    });
    
    $(".contato").mouseout(function(){
        $(".contato > .material-icons").html("email");
    });
    
    $(".bt-contato").mouseover(function(){
        $(".bt-contato > .send-icon").html("email");
    });
    
    $(".bt-contato").mouseout(function(){
        $(".bt-contato > .send-icon").html("drafts");
    });
    
    $('.contact-form').submit(function(){
        var name = $(".name").val();
        var lastName = $(".lastName").val();
        var email = $(".email").val();
        var phone = $(".phone").val();
        var menssage = $(".menssage").val();
        
        console.log(name +" - "+ lastName +" - "+ email +" - "+ phone +" - "+ menssage);
        
        if(name == ""){
            M.toast({html:"Insira seu nome.", classes:"red"});
            return false;
        }else if(lastName == ""){
             M.toast({html:"Insira seu sobrenome.", classes:"red"});
            return false;
        }else if(email == ""){
             M.toast({html:"Insira seu email.", classes:"red"});
            return false;
        }else if(phone == ""){
             M.toast({html:"Insira seu telefone.", classes:"red"});
            return false;
        }else if(menssage == "" || menssage.length < 2){
             M.toast({html:"Insira uma mensagem.", classes:"red"});
            return false;
        }else{
             M.toast({html:"Mensagem enviada com sucesso.", classes:"green"});
            return false;
        } 
        
    });
    
    $('#menssage').val("");
    M.textareaAutoResize($('#menssage'));
});