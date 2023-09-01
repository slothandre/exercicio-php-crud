const nota1 = document.querySelector("#primeira");
const nota2 = document.querySelector("#segunda");
const inputMedia = document.querySelector("#media");
const inputSituacao = document.querySelector("#situacao");

function notaDinamica(){
    let media = ((parseFloat(nota1.value) + parseFloat(nota2.value)) / 2);
    inputMedia.value = media.toFixed(2);
};

function situacaoDinamica(){
    if(inputMedia.value >= 7){
        inputSituacao.value = "Aprovado";
    } else if(inputMedia.value >= 5){
        inputSituacao.value = "Recuperação";
    } else {
        inputSituacao.value = "Reprovado";
    }
};

function backgroundClass(element, success, warning, danger){
    element.classList.toggle("text-bg-success", success);
    element.classList.toggle("text-bg-warning", warning);
    element.classList.toggle("text-bg-danger", danger);
}

function backgroundDinamico(){
    const mediaValue = inputMedia.value;

    backgroundClass(inputMedia, mediaValue >= 7, mediaValue >= 5 && mediaValue < 7, mediaValue < 5);
    backgroundClass(inputSituacao, mediaValue >= 7, mediaValue >= 5 && mediaValue < 7, mediaValue < 5);
}

nota1.addEventListener("input", () => {
    notaDinamica();
    situacaoDinamica();
    backgroundDinamico();
})
nota2.addEventListener("input", () => {
    notaDinamica();
    situacaoDinamica();
    backgroundDinamico();
})