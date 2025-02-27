function verificacao(){
    let select = window.document.getElementById('select');
    let resultado = Number(select.value);
    let mostrar = window.document.getElementById('mostrar');

    switch(resultado){

        case 0:
        mostrar.innerHTML = '<strong> Domingo </strong>';

        break

        case 1:
        mostrar.innerHTML = '<strong> Segunda-Feira </strong>';

        break

        case 2:
        mostrar.innerHTML = '<strong> Terça-Feira </strong>';

        break

        case 3:
        mostrar.innerHTML = '<strong> Quarta-Feira </strong>';

        break

        case 4:
        mostrar.innerHTML = '<strong> Quinta-Feira </strong>';

        break

        case 5:
        mostrar.innerHTML = '<strong> Sexta-Feira </strong>';

        break


        case 6:
        mostrar.innerHTML = '<strong> Sábado </strong>';

        break

    }
    
}
