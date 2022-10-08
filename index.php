<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php 
        require 'modulos.php';
        include 'menu.html';
        session_start();
            
        if ($_SESSION['logado'] !=true):
    ?>


    <div class="container container-login">
        <form action="" method="POST">
            <center>
                <h2>Sistema Alunos</h2>
            </center>
            <h3>Login</h3>
            <p>Usuário<input type="text" name="usuario" placeholder="Digite seu usuário..." value=<?php if (isset( $_COOKIE['usuario'] )) {
                        echo $_COOKIE['usuario'];
                        } ?>></p>
            <p>Senha<input type="password" name="senha" placeholder="Digite sua senha..."></p>
            <div id='aviso'></div>
            <input type="submit" name="entrar" value="Entrar">
        </form>
    </div>


    <?php 
        else:
            header('location:pagina-inicial.php');
        endif;
    ?>

</body>

</html>

<?php 

    if(isset($_POST['entrar'])) {
        require 'conexao.php';

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        setcookie('usuario', $usuario);

        if ($usuario == 'admin' AND $senha == 'admin' ) {
            $_SESSION['logado'] = true;
            header('location:pagina-inicial.php');
        }

        $dados = $conexao->prepare("SELECT senha, nome FROM alunos WHERE usuario = :usuario;");
        $dados->bindValue(':usuario', $usuario);
        $dados->execute();

        if ($dados->rowCount() > 0) {
            $senha_bd = $dados->fetchAll(PDO::FETCH_OBJ);

            foreach ($senha_bd as $user) {
                if (password_verify($senha, $user->senha)){
                    echo "Tudo certo!";
                    setcookie('nome', $user->nome);
                    $_SESSION['logado'] = true;
                    header('location:pagina-inicial.php');

                } else {
                    aviso_usuario_senha_incorretos();
                }
            }
        } else {
            aviso_usuario_senha_incorretos();
        }

    }

?>