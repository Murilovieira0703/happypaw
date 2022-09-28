$(document).ready(function(){
        var mensagem = $("#mensagem");
        var loader = $("#loader");
        var barra = $("#barra");
        $("#editar-foto").hide();
        mensagem.hide();
        loader.hide();
        
        $("#btn-editar-foto").on('click',function(){
            $("#editar-foto").toggle();
        });
        
        $("#btn-enviar-foto").on('click',function(event){
            event.preventDefault();
            $("#form-upload-foto").ajaxForm({
                url:'./img/uploads/executa-upload.php',
                uploadProgress:function(event,position, total, precentComplete){
                  loader.show();
                  barra.width(precentComplete + '%');  
                  barra.html(precentComplete + '%');  
                },
                success:function(data){
                    var msg = data.substring(0,data.indexOf(';'));
                    var tipoMsg = data.substring(data.indexOf(';')+1);
    
                    if(tipoMsg == "concluido"){
                        var caminho_foto = msg;
                        msg = "Upload da foto realizado com sucesso!";
                        $("#foto-contato").attr("src",caminho_foto+"?timestamp="+ new Date().getTime());
                        mensagem.show().attr("class","mb-3 alert alert-success").html(msg);
                    }else if(tipoMsg == "aviso"){
                        mensagem.show().attr("class","mb-3 alert alert-warning").html(msg);
                        loader.hide();
                    }else{
                        mensagem.show().attr("class","mb-3 alert alert-danger").html(msg);
                        loader.hide();
                    }
                },
                error:function(data){
                    console.log(data);
                }
            }).submit();
        })
    });