<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- temporário esses links -->
</head>
<body>
    <div id='menu'>
        <p id='icone'>Logo</p>
        <p>Olá usuário!</p>
        <button id="menu_button"><i id='icone_lista' class='fa-solid fa-bars'></i></button>
        <div id='menu_lista'>
            <ul>
                <li>
                    <a href="disciplinas.php">Disciplinas</a>
                </li>
                <li>
                    <a href="alunos.php">Alunos</a>
                </li>
                <li>
                    <a href="notas.php">Notas</a>
                </li>
                <li>
                    <a href="usuarios.php">Usuários</a>
                </li>
                <li>
                    <a href="logout.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>
    <script src="../../scripts/menu.js"></script>
</body>
</html>