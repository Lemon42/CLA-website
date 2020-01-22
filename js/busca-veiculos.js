var alertaResultados = document.querySelector(".sem-resultados");
alertaResultados.classList.add("invisivel");

var barraPesquisa = document.getElementById("barraPesquisa");
var veiculo = document.querySelectorAll(".veiculo");

barraPesquisa.addEventListener("input", buscaVeiculos);

function buscaVeiculos()
{   
    let resultados = 0;

    for (var i = 0; i < veiculo.length; i++){
        nomeVeiculo = veiculo[i].querySelector(".card-title").textContent;
        expressaoRegular = new RegExp(barraPesquisa.value, "i");

        if (!expressaoRegular.test(nomeVeiculo)){
            veiculo[i].classList.add("invisivel");
        } else {
            veiculo[i].classList.remove("invisivel");
            resultados++;
        }
    }

    // Mostrando alerta de sem resultados
    if (resultados == 0 && barraPesquisa.value != "")
    {
        alertaResultados.classList.remove("invisivel");
    } else{
        alertaResultados.classList.add("invisivel");
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