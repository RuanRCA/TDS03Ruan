
function trocar(){
    let agora = new Date();
    let hora = agora.getHours();
    let minutos = agora.getMinutes();
   // let segundos = agora.getSeconds();
    let horas = window.document.getElementById('horas');
    let imagem = window.document.getElementById('imagem');
    let corpo = window.document.getElementById('corpo');

  //  hora = 20;

    if (hora>=0 && hora <=5){
        horas.innerHTML = `Agora são ${hora} horas e ${minutos} minutos da madrugada.`
         imagem.src = 'fotos/madrugada.jpg'
         corpo.style.backgroundColor = '#000000';

    }

    else if (hora <12){
        horas.innerHTML = `Agora são ${hora} horas e ${minutos} minutos da manha`
        imagem.src = 'fotos/Manha_sol.jpg'
        corpo.style.backgroundColor = '#FC9F18';
     
    }

    else if (hora< 18){
        horas.innerText = `Agora são ${hora} horas e ${minutos} minutos da tarde`
        imagem.src = 'fotos/Tarde_sol.jpg';
        corpo.style.backgroundColor = '#773302';
    }

    else {
        horas.innerText = `Agora são ${hora} horas e ${minutos} minutos da Noite`;
       imagem.src = 'fotos/Noite.jpg';
       corpo.style.backgroundColor = '#292C2E';
    }
  
}