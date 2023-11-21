<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Documentos</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Formulário de Documento</h1>
    <a href="documentos.php">Voltar para Listagem</a>
    <form action="salvarDocumentos.php" method="POST">
        <fieldset>
            <legend>Dados da Cidade</legend>
            <input type="hidden" name="id" value="<?php echo $documentos->getId() ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome da Cidade:" value="<?php echo $cidades->getNome(); ?>">
            <br>
            <label for="uf">UF:</label>
            <select name="uf" id="uf">
                <option value="<?php echo $cidades->getUf(); ?>"></option>
            </select>
            <br>
            <label for="cep">CEP:</label>
            <input type="text" name="cep" id="cep" placeholder="Cep da Cidade" value="<?php echo $cidades->getCep(); ?>">
            <br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</body>
</html>