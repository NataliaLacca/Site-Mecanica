<?php
    require_once 'header.php';
    require_once 'menu.php';

    include_once 'conexao.php';

    session_start();
    ob_start();
?>

<br>
<br>
<h1 class="text-center"> Área Administrativa
<br>

<?php
    echo "Bem-vindo(a) " . $_SESSION['nome'] . "!";

    if(!isset($_SESSION['nome'])){
        $_SESSION['msg'] = "Erro: Necessário realizar o login para acessar a página!";
        header("Location: login.php");
    }
?>

<a href="sair.php"><button type="subimit">Sair</button></a>