function consultar() {
    let nacionalidade = window.document.getElementById('nacao');
    let verificar = String (nacionalidade.value);
    let mostrar = window.document.getElementById('mostrar');

     console.log(mostrar);
    

    if (verificar == 'Brasil' || verificar == 'brasil'){
        mostrar .innerHTML = '<strong> Você é Brasileiro </strong>';
        
    }

    else {
        mostrar .innerHTML = '<strong> Você não é do Brasil , você é estrangeiro </strong>';
    }

   

}