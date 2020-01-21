var barraPesquisa = document.getElementById("barraPesquisa");
var veiculo = document.querySelectorAll(".veiculo");

barraPesquisa.addEventListener("input", buscaVeiculos);

function buscaVeiculos()
{
    for (var i = 0; i < veiculo.length; i++){

        nomeVeiculo = veiculo[i].querySelector(".card-title").textContent;
        expressaoRegular = new RegExp(barraPesquisa.value, "i");

        if (!expressaoRegular.test(nomeVeiculo)){
            veiculo[i].classList.add("invisivel");
        } else {
            veiculo[i].classList.remove("invisivel");
        }
    }

    // Mostrando todos os veiculos
    if(barraPesquisa.value == "")
    {
        for(var i = 0; i < veiculo.length; i++)
        {
            veiculo[i].classList.remove("invisivel");
        }
    }
}