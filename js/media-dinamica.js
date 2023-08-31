const nota1 = document.querySelector("#primeira");
const nota2 = document.querySelector("#segunda");
const inputMedia = document.querySelector("#media");
const inputSituacao = document.querySelector("#situacao");

function notaSituacaoDinamica(){
    let media = ((parseFloat(nota1.value) + parseFloat(nota2.value)) / 2);
    inputMedia.value = media.toFixed(2);

    if(media >= 7){
        inputSituacao.value = "Aprovado";
    } else if(media >= 5){
        inputSituacao.value = "Recuperação";
    } else {
        inputSituacao.value = "Reprovado";
    } 
};

nota1.addEventListener("input", notaSituacaoDinamica);
nota2.addEventListener("input", notaSituacaoDinamica);