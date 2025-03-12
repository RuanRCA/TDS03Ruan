function trocar(){
    let agora = new Date();
    let hora = agora.getHours();
    let minutos = agora.getMinutes();
    let segundos = agora.getSeconds();
    let horas = window.document.getElementById('horas');
    let imagem = window.document.getElementById('imagem');
    let corpo = window.document.getElementById('corpo');

    if (hora>=0 && hora <=5){
        horas.innerText = 'Boa Madrugada!' + {hora} + {minutos} + {segundos};
        imagem.src= 'Noite.jpg';

    }

    else if (hora <12){
        horas.innerText = 'Bom dia !' + {hora} + {minutos} + {segundos};
        imagem.src= 'Manha_sol.jpg';
    }

    else if (hora< 18){
        horas.innerText = 'Boa Tarde !' + {hora} + {minutos} + {segudos};
        imagem.src = 'Tarde_sol.jpg';
    }

    else {
        horas.innerText = 'Olá Mundo !' +{hora} + {minutos} + {segudos};
        imagem.src = 'madrugada.jpg';
    }
  
}