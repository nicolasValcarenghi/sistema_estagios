<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Curso</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Formulário de Curso</h1>
    <a href="cursos.php">Voltar para Listagem</a>
    <form action="salvarCurso.php" method="POST">
        <fieldset>
            <legend>Dados do Curso</legend>
            <input type="hidden" name="id" value="<?php echo $cursos->getId() ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome da Area" value="<?php echo $cursos->getNome(); ?>">
            <br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</body>
</html>