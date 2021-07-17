function Validar(tela){
    var ret = true;
    
    switch (tela){
        case 1: ///cadastrar_cliente
            
            if($("#nomeCliente").val().trim() == ''){
                $("#val_nomeCliente").show().html("Preencher o campo NOME CLIENTE");
                $("#divNomeCliente").addClass("has-error");
                ret = false;
            }else{
                $("#val_nomeCliente").hide();
                $("#divNomeCliente").removeClass("has-error");
            }
            if($("#documento").val().trim() == ''){
                $("#val_doc").show().html("Preencher o campo DOCUMENTO");
                $("#divDoc").addClass("has-error");
                ret = false;
            }else{
                $("#val_doc").hide();
                $("#divDoc").removeClass("has-error");
            }
            if($("#emailCliente").val().trim() == ''){
                $("val_email").show().html("Preencher o campo E-mail");
                $("#divEmail").addClass("has-error");
                ret = false;
            }else{
                $("#val_email").hide();
                $("#divEmail").removeClass("has-error");
            }
            if($("#telefoneCliente").val().trim() == ''){
                $("#val_telefone").show().html("Preencher o campo TELEFONE");
                $("#divTelefone").addClass("has-error");
                ret = false;
            }else{
                $("#val_telefone").hide();
                $("#divTelefone").removeClass("has-error");
            }
            if($("#endCliente").val().trim() == ''){
                $("#val_end").show().html("Preencher o campo ENDEREÇO");
                $("#divEnd").addClass("has-error");
                ret = false;
            }else{
                $("#val_end").hide();
                $("#divEnd").removeClass("has-error");
            }
            if($("#dataCadastro").val().trim() == ''){
                $("#val_data").show().html("Preencher o campo DATA");
                $("#divData").addClass("has-error");
                ret = false;
            }else{
                $("#val_data").hide();
                $("#divData").removeClass("has-error");
            }
            
            break;
            
        case 2: ////cadastrar_funcionario
                
            break;
    }
    return ret;
}