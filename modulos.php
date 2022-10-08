<?php 

    require 'conexao.php';


    function existe_usuario($user_post, $excecao = null)
    {
        require 'conexao.php';
        $dados = $conexao->prepare("SELECT usuario FROM alunos;");
        $dados->execute();
        $users = $dados->fetchAll(PDO::FETCH_OBJ);
        foreach($users as $user) {
            if ($user_post == $user->usuario AND $user_post != $excecao) {
                return true;
            } 
        }
        return false;
    }

    function aviso_usuario_existente()
    {
        echo '
            <script>
            var aviso = document.getElementById("aviso-usuario")
            aviso.textContent = "Usuário já existente!"
            </script>
        ';
    }

    function aviso_usuario_senha_incorretos()
    {
        echo "
            <script>
            var aviso = document.getElementById('aviso')
            aviso.textContent = 'Ops, usuário ou senha incorretos!'
            </script>
        ";
    }

    function login_necessario() 
    {
        header('location:sai-intruso.php');
    }   

?>