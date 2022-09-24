$(document).ready(function(){    
                $("#btn-enviar-foto").on('click',function(event){
                        event.preventDefault();
                        $("#form-upload-foto").ajaxForm({
                                url:'./img/uploads/exc-up/executa-upload.php',
                                uploadProgress:function(event,position, total, precentComplete){
                                },
                        }).submit();
                });
});