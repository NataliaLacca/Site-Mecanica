<?php
    require_once 'header.php';
    require_once 'menu.php';

    include_once 'conexao.php';

    session_start();
    ob_start();
?>

<h1 class="text-center"> Área Administrativa
<br>

<?php
    echo "Bem-vindo(a) " . $_SESSION['nome'] . "!"; 
?>

<?php
    require_once 'admin.php';
?>