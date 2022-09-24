function checkForm() {
    // Fetching values from all input fields and storing them in variables.
    var nomecadastro = document.getElementById("nomecadastro").value;
    var emailcadastro = document.getElementById("emailcadastro").value;
    var sobrenomecadastro = document.getElementById("sobrenomecadastro").value;
    var senhacadastro = document.getElementById("senhacadastro").value;
    var rsenha =document.getElementById("rsenha").value;

    //Check input Fields Should not be blanks.
    if (nomecadastro == '') {
        alert("Nome não informado");
        
        nomecadastro.focus();
    }
    if (sobrenomecadastro == '') {
        alert("Sobrenome não informado");
        
        sobrenomecadastro.focus();
    }
    if (emailcadastro == '') {
        alert("Email não informado");
        
        emailcadastro.focus();
    }
    if (senhacadastro == "" || senhacadastro.length <= '7') {
        alert("Sua senha tem menos que 8 digitos");
        
        senhacadastro.focus();

        return false;
    }
    if (senhacadastro.length >= '17') {
        alert("Sua senha tem mais que 16 digitos");
        
        senhacadastro.focus();
        return false;
    }
    if (rsenha == "" || rsenha.length <= '7') {
        alert("Sua senha tem menos que 8 digitos");
        
        senhacadastro.focus();

        return false;
    }
    if (rsenha != senhacadastro) {
        alert("As senhas não batem");
        
        senhacadastro.focus();
        return false;
    }
}
