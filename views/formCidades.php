<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cidades</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Formulário de Cidades</h1>
    <a href="cidades.php">Voltar para Listagem</a>
    <form action="salvarCidade.php" method="POST">
        <fieldset>
            <legend>Dados da Cidade</legend>
            <input type="hidden" name="id" value="<?php echo $cidades->getId() ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome da Cidade:" value="<?php echo $cidades->getNome(); ?>">
            <br>
            <label for="uf">UF:</label>
            <select name="uf" id="uf">
                <?php
                $ufs = ['RS', 'SC', 'PR', 'BA', 'RJ'];
                if (!isset($cidades)) {
                    foreach ($ufs as $uf) {
                        echo "<option value='". $uf ."'>". $uf ."</option>";
                    }
                }
                else echo "<option value='". $cidades->getCep() ."'>". $cidades->getCep() ."</option>";
                ?>
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