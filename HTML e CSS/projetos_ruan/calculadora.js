function Solve(val)
{
    let valor = document.getElementById('vazio');
    valor.value += val;
}

function Resultado()
{
    let valor1 = document.getElementById('vazio').value;
    let valor2 = eval(valor1);
    document.getElementById('vazio').value = valor2;
}

function limpar()
{
  let input = document.getElementById('vazio');
  input.value='';
}

function voltar()
{
    let voltar = document.getElementById('vazio');
    voltar.value = voltar.value.slice(0,-1);
}