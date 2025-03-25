function calcular (){
    // estou apresentando o valor digitado pelo usuário
    let preco = document.getElementById('preco');
    let valor = Number(preco.value);
    //estou pegando e apresentado o select
    let select = document.getElementById('select');
    // estou buscando o valor informado para fazer os calculos a partir das 'option'. obs o select é 1 array(vetor)
    let valores = select.options [select.selectedIndex];
    // estou pegando o valor a partir do value informado no select do html
    let porcetagem = valores.value;
    // conta para calcular o valor da gasolina
    let calcgasolina = (valor*porcetagem);
    // esse código é outro jeito de pegar duas casas de  números
    const total = calcgasolina.toFixed(2)
    // conta para calcular o valor do etanol
    let calcetanol = valor* (1/porcetagem);
    let resultado = document.getElementById('resultado');
     // este código está pegando os calculos e fazendo a conversão para dinheiro
    const totalgasolina = calcgasolina.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
    const totaletanol = calcetanol.toLocaleString('pt-BR' ,{style: 'currency' , currency: 'BRL' } );

    if (document.getElementById('gasolina').checked){
      resultado.innerText = `Abasteça com Etanol se o seu  preço for menor  ou igual a : ${totalgasolina}`;
    }

    else if (document.getElementById('etanol').checked){
        resultado.innerText = `Abasteça com gasolina se o seu o seu preço for menor ou igual a :  ${totaletanol}`;
    }

    else{
        resultado.innerText = "Nenhum valor encontrado";
    }
}