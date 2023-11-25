<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Estudantes</title>
</head>
<body>
    <?php 
      //  include('views/includes/menu.php');
    ?>
    <h1>Formulário de Estudantes</h1>
    <a href="estudantes.php">Voltar para Listagem</a>
    <form action="salvarEstudantes.php" method="POST">
        <fieldset>
            <legend>Dados do Estudante</legend>
            <input type="hidden" name="id" value="<?php echo $estudantes->getId() ?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome do Estudante" value="<?php echo $estudantes->getNome(); ?>">

            <label for="email">email:</label>
            <input type="email" name="email" id="email" placeholder="Email do Estudante" value="<?php echo $estudantes->geEmail(); ?>">

            <label for="cpf">Cpf:</label>
            <input type="text" name="cpf" id="cpf" placeholder="Cpf do Estudante" value="<?php echo $estudantes->getCpf(); ?>">

            <label for="rg">Rg:</label>
            <input type="text" name="rg" id="rg" placeholder="Rg do Estudante" value="<?php echo $estudantes->getRg(); ?>">

            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" placeholder="Endereço do Estudante" value="<?php echo $estudantes->getEndereco(); ?>">

            <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" id="telefone" placeholder="Telefone do Estudante" value="<?php echo $estudantes->getTelefone(); ?>">

            <!-- <input type="hidden" name="cidades_id" value="// echo $estudantes->getCidadesId(); "> -->

            <!-- <input type="hidden" name="cursos_id" value="// echo $estudantes->getCursosId();"> -->

            <label for="num_turma">Numero da Turma:</label>
            <input type="number" name="num_turma" id="num_turma" placeholder="Numero da turma do Estudante" value="<?php echo $estudantes->getNumTurma(); ?>">

            <br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</body>
</html>