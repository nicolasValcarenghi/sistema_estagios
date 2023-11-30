<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require_once("views/includes/links_uteis.html");
    ?>
    <title>Documentos</title>
</head>
<body>
    <?php
        require_once('views/includes/menu.php');
    ?>
    <h1>Documentos</h1>
    <a href="documento.php" id="botao_ir_form">Inserir nova documento!</a>
    <p id='aviso'>Para ver o estágio, clique no nome do aluno!</p>
    <div id="div_tabela">
        <table>
            <thead>
                <tr>
                    <td>Nome do Estudante</td>
                    <td>Matrícula</td>
                    <td>Termo<br>Compromisso</td>
                    <td>Plano<br>Atividade</td>
                    <td>Ficha<br>Autoavaliação</td>
                    <td>Ficha<br>Avaliacação da empresa</td>
                    <td>Relatório final</td>
                    <td>Funções</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($documentos as $index => $documento) {
                        echo "<tr>";
                        echo "<td><a href='estudantes.php?id=". $documento->getEstudantesMatricula() ."'>". $documento->getEstudantesNome() ."</a></td>";
                        echo "<td>". $documento->getEstudantesMatricula() ."</td>";
                        echo "<td>". $documento->getTermoDeCompromisso() . "</td>";
                        echo "<td>". $documento->getPlanoDeAtividade() . "</td>";
                        echo "<td>". $documento->getFichaAutoavaliacao() . "</td>";
                        echo "<td>". $documento->getFichaAvaliacaoEmpresa() . "</td>";
                        echo "<td>". $documento->getRelatorioFinal() . "</td>";
                        echo "<td id='td_funcoes'>";
                            echo "<a href = 'documento.php?id=". $documento->getId() . "'><i class='fa-solid fa-pencil'></i></a>";
                            echo "<a href = 'excluirdocumentos.php?id=". $documento->getId() . "'><i class='fa-solid fa-trash'></i></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php
        require_once("views/includes/linksJS.html");
    ?>
</body>
</html>