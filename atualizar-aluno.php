<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Atualizar Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php 
        require 'modulos.php';
        include 'menu.html';
        session_start();
        if ($_SESSION['logado'] != true) {
            login_necessario();
        }
    ?>

    <div class="container container-cadastro">

        <h2>Atualização de usuário</h2>
        <form action="" method="POST">
            <p><input type="hidden" name="id" value=<?php echo $_GET['id'] ?>></p>
            <p>Nome:<input type="text" name="nome" placeholder="Digite novo nome" value='<?php echo $_GET['nome']?>'>
            </p>
            <p>Endereço:<input type="text" name="endereco" placeholder="Digite novo endereço"
                    value='<?php echo $_GET['endereco']?>'></p>
            <p>Telefone:<input type="text" name="telefone" placeholder="Digite novo número de telefone"
                    value='<?php echo $_GET['telefone']?>'></p>
            <p>Usuário: <input type="text" name="usuario" placeholder="Digite um novo"
                    value='<?php echo $_GET['usuario']?>'><span id='aviso-usuario'></span></p>
            <!--<p>Senha: <input type="password" name="senha" placeholder="Digite sua senha aqui"></p> -->
            <input type="submit" name="atualizar" value="Atualizar">
        </form>

    </div>

</body>

</html>



<?php 

    require 'conexao.php';
    
    if (isset($_POST['atualizar'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $usuario = $_POST['usuario'];
        
        // Aqui verifica se $usuario existe, com exceção do que já foi passado via $_GET['usuario']
        if (existe_usuario($usuario, $_GET['usuario'])) { 
            aviso_usuario_existente();
        } else {
            $atualizacao = $conexao->prepare("UPDATE alunos SET nome=:nome, endereco=:endereco, telefone=:telefone, usuario=:usuario WHERE id=:id;");
            $atualizacao->bindValue(':nome', $nome);
            $atualizacao->bindValue(':endereco', $endereco);
            $atualizacao->bindValue(':telefone', $telefone);
            $atualizacao->bindValue(':usuario', $usuario);
            $atualizacao->bindValue(':id', $id);
            $atualizacao->execute();
            header('location:listar-alunos.php');
        }
        

    }

?>