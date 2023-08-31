<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <header class="text-center">
        <h1>Atualizar dados do aluno </h1>
        <hr>
    </header>
    		
    <main class="container">
        <p>Utilize o formulário abaixo para atualizar os dados do aluno.</p>
        <form action="#" method="post">
            
                <p><label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required></p>
        
            <p><label for="primeira">Primeira nota:</label>
                <input name="primeira" type="number" id="primeira" step="0.01" min="0.00" max="10.00" required></p>
                
                <p><label for="segunda">Segunda nota:</label>
                <input name="segunda" type="number" id="segunda" step="0.01" min="0.00" max="10.00" required></p>
            <p>
            <!-- Campo somente leitura e desabilitado para edição.
            Usado apenas para exibição do valor da média -->
                <label for="media">Média:</label>
                <input name="media" type="number" id="media" step="0.01" min="0.00" max="10.00" readonly disabled>
            </p>
            <p>
            <!-- Campo somente leitura e desabilitado para edição
            Usado apenas para exibição do texto da situação -->
                <label for="situacao">Situação:</label>
                    <input type="text" name="situacao" id="situacao" readonly disabled>
            </p>
            <button name="atualizar-dados">Atualizar dados do aluno</button>
            </form>
        
        <hr>
        <p><a href="visualizar.php">Voltar à lista de alunos</a></p>
    </main>


</body>
</html>