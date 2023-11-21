<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuarios</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Formulário de Usuários</h1>
    <a href="usuarios.php">Voltar para Listagem</a>
    <form action="salvarUsuario.php" method="POST">
        <fieldset>
            <legend>Dados do Usuário</legend>
            <input type="hidden" name="id" value="<?php echo $usuarios->getId() ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome do Usuário" value="<?php echo $usuarios->getNome(); ?>">
            <br>
            <label for="login">Login:</label>
            <input type="text" name="login" id="login" placeholder="Login do Usuário" value="<?php echo $usuarios->getLogin(); ?>">
            <br>
            <label for="senha">Senha:</label>
            <input  type="password" name="senha" id="senha" placeholder="Senha do usuario" >
            <br>
            <!-- nao sei o que é tipo  -->
            <label for="login">Tipo:</label>
            <input type="text" name="login" id="login" placeholder="Login do Usuário" value="<?php echo $usuarios->getLogin(); ?>">
            <br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</body>
</html>