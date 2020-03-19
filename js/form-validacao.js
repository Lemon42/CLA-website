function validaCampo() {

    let campo = document.getElementsByClassName("campo-formulario");
    
    for(let i = 0; i <= (campo.length - 1); i++)
    {
        if (campo[i].value == ""){
			campo[i].classList.add("is-invalid");
			alert("O campo '" + campo[i].name + "' não pode ficar em branco!");
            return false;
        } else {
			campo[i].classList.remove("is-invalid");
        }
    }
}