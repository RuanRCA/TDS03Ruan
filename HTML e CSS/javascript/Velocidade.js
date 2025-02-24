function Verificar() {
    let vel = window.document.getElementById('vel');
    let valor = Number(vel.value);
    let calcular = window.document.getElementById('calcular');

    if (valor <= 40) {
        calcular.innerText = 'Você Está na Velocidade permitida';
       
    }
    else if (valor >= 80 && valor <= 120) {
        calcular.innerHTML = ' <strong> Você está no limite máximo </strong>';
    }
    else {
       calcular.innerHTML = '  <strong> Você ultrapassou a velocidade </strong> '; 
}
}
