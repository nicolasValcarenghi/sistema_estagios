<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Area</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Formulário de Área</h1>
    <a href="areas.php">Voltar para Listagem</a>
    <form action="salvarArea.php" method="POST">
        <fieldset>
            <legend>Dados da Área</legend>
            <input type="hidden" name="id" value="<?php echo $areas->getId() ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome da Area" value="<?php echo $areas->getNome(); ?>">
            <br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</body>
</html>