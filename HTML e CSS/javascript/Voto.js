function verificar(){
    let idade = window.document.getElementById('idade');
    let verificar = Number(idade.value);
    let mostrar = window.document.getElementById('mostrar');

    if (verificar <16){

        mostrar.innerHTML = '<strong> Voçê não pode votar </strong>';
    }

    else if (verificar < 18 || verificar > 65 ){

        mostrar.innerHTML = '<strong> Voto Facultativo </strong>';

    }
    else {
        mostrar.innerHTML = '<strong> Voto Obrigatório </strong';
    }
}