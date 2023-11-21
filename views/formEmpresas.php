<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Empresas</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Formulário da Empresa</h1>
    <a href="empresas.php">Voltar para Listagem</a>
    <form action="salvarEmpresa.php" method="POST">
        <fieldset>
            <legend>Dados da Empresa</legend>
            <br>
            <input type="hidden" name="id" value="<?php echo $empresas->getId() ?>">
            <br>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome da Empresa" value="<?php echo $empresas->getNome(); ?>">
            <br>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" placeholder="Endereço da Empresa" value="<?php echo $empresas->getEndereco(); ?>">
            <br>
            <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" id="telefone" placeholder="Telefone da Empresa" value="<?php echo $empresas->getTelefone(); ?>" >
            <br>
            <label for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ da Empresa" value="<?php echo $empresas->getCnpj(); ?>" >
            <br>
            <label for="representante_funcao">Função do Representante:</label>
            <input type="text" name="telefone" id="telefone" placeholder="Telefone da Empresa" value="<?php echo $empresas->getTelefone(); ?>" >
            <br>
            <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" id="telefone" placeholder="Telefone da Empresa" value="<?php echo $empresas->getTelefone(); ?>" >
            <br>
            <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" id="telefone" placeholder="Telefone da Empresa" value="<?php echo $empresas->getTelefone(); ?>" >
            <br>
            <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" id="telefone" placeholder="Telefone da Empresa" value="<?php echo $empresas->getTelefone(); ?>" >
            <br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</body>
</html>