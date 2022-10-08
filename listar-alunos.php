<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos Cadastrados</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
        require 'modulos.php';
        require 'conexao.php';
        include 'menu.html';
        
        session_start();
        if ($_SESSION['logado'] != true) {
            login_necessario();
        }
    ?>


    <div class="container container-listagem">

        <ul>

            <?php 
                $dados = $conexao->prepare("SELECT * FROM alunos");
                $dados->execute();
                $alunos = $dados->fetchAll(PDO::FETCH_OBJ);
                foreach ($alunos as $aluno) {
                    echo "
                    <li>
                        <div class='dados'>
                            <a href='atualizar-aluno.php?id=$aluno->id&nome=$aluno->nome&endereco=$aluno->endereco&telefone=$aluno->telefone&usuario=$aluno->usuario'>
                                <span class='titulo-item-listagem'>
                                    $aluno->nome
                                </span> <br>
                                <div class='descricao-item-listagem'>
                                    <ul>
                                        <li>Telefone: $aluno->telefone</li>
                                        <li>Endereço: $aluno->endereco</li>
                                        <li>Usuário: $aluno->usuario</li>
                                    </ul>

                                </div>
                            </a>
                        </div>

                        <div class='icone-lista'>
                            <a href='excluir.php?id=$aluno->id' onclick=\"return confirm('Tem certeza que deseja excluir $aluno->nome?'); return false;\">
                                <img src='imagens/excluir.png' alt='Excluir'>
                            </a>
                        </div>

                    </li>";
                }
            ?>

        </ul>

    </div>


</body>

</html>