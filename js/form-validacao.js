function validaCampo() {

    let campo = document.getElementsByClassName("campo-formulario");
    
    for(let i = 0; i <= (campo.length - 1); i++)
    {
        if (campo[i].value == ""){
            alert("O campo '" + campo[i].name + "' não pode ficar em branco!");
            campo[i].classList.add("erro-form");
            return false;
        } else {
            campo[i].classList.remove("erro-form");
        }
    }
}