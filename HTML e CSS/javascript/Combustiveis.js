function calcular (){
    // estou apresentando o valor digitado pelo usuário
    let preco = document.getElementById('preco');
    let valor = Number(preco.value);
    //estou pegando apresentado o select
    let select = document.getElementById('select');
    // estou buscando o valor informado para fazer os calculos. obs o select é 1 array
    let valores = select.options [select.selectedIndex];
    // estou pegando o valor a partir do value informado no select do html
    let porcetagem = valores.value;
    let calcgasolina = (valor*porcetagem);
    let calcetanol = 1/(valor*porcetagem);
    let resultado = document.getElementById('resultado');

    if(document.getElementById('gasolina').checked){
      resultado.innerText = `O valor ficará de R$ ${calcgasolina}`;
    }

    else if (document.getElementById('etanol').checked){
        resultado.innerText = `O valor ficará de R$ ${calcetanol}`;
    }

    else{
        resultado.innerText = "nenhum valor encontrado";
    }
}