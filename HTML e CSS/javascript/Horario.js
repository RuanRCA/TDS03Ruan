const data_div = document.getElementById('data');
const hora_div = document.getElementById('hora');
let resultado = document.getElementById('resultado');

const data = new Date();

let dia = data.getDate()
dia = dia < 10? "0" + dia : dia

let mes = data.getMonth() +1
mes = mes < 10? "0" + mes : mes

const data_organizada = dia + "/" + mes + "/" +
data.getFullYear();

data_div.innerText = data_organizada;

function relogio(){
    const data= new Date();

    let hora = data.getHours()
    hora = hora <10? "0" + hora : hora;

    let minuto = data.getMinutes()
    minuto = minuto < 10? "0" + minuto : minuto;

    let segundos = data.getSeconds()
    segundos = segundos <10? "0" + segundos: segundos;

    const hora_organizada = hora + ":" + minuto + ":" + segundos

   hora_div.innerText = hora_organizada

    if(hora > 5 && hora < 12){
        resultado.innerText = 'Bom Dia!';
    }

    else if (hora >= 12 && hora <18){
        resultado.innerText = 'Boa Tarde';
    }

    else if (hora >= 18 && hora <= 23){
        resultado.innerText = 'Boa Noite';
    }

    else {
        resultado.innerText = 'Boa Madrugada';
    }
}

const intervalo_relogio = setInterval(relogio , 1000);
