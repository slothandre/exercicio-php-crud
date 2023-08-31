const links = document.querySelectorAll(".excluir");

for (const link of links) {
    link.addEventListener("click", function(event){
        event.preventDefault();
        let resposta = confirm("Deseja realmente excluir este registro? CAMINHO SEM VOLTA!!!");
        if(resposta) location.href = this.href;
    });
};