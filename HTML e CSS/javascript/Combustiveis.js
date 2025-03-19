function calcular (){
    let preco = document.getElementById('preco');
    let valor = Number(preco.value);
    let percentagem =  getElementById('select');
    let porcentagem = Number(percentagem.value);
    let gasolina = document.getElementById('gasolina');
    let etanol = document.getElementById('etanol');
    let calcpercentagem = 1/(valor*porcentagem);
    let calcporcentagem = (valor*porcentagem);
    let resultado = document.getElementById('resultado');
    

    if (gasolina.checkVisibility){

        resultado.innerText = 'preço válido' + calcporcentagem;

    }

    else {
        resultado.innerText = 'preço invalidao' + calcpercentagem;
    }




}