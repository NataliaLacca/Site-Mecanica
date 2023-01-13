<?php
    require_once 'header.php';
    require_once 'menu.php';

    include_once 'conexao.php';

    session_start();
    ob_start();
?>

<?php

    echo "senha".password_hash('martelinho', PASSWORD_DEFAULT);

    $dadoslogin = filter_input_array(INPUT_POST,FILTER_DEFAULT);
  
    if(!empty($dadoslogin["btnlogin"])){
        var_dump($dadoslogin);

        $sql = "SELECT matricula,nome,email,senha FROM funcionario WHERE email =:usuario LIMIT 1";
        $resultado = $conn -> prepare($sql);
        $resultado -> bindParam(':usuario',$dadoslogin['usuario'],PDO::PARAM_STR);
        $resultado -> execute();

        if(($resultado) AND ($resultado -> rowCount() != 0)){
            $row_usuario = $resultado -> fetch(PDO::FETCH_ASSOC);
            var_dump($row_usuario);

            if(password_verify($dadoslogin['senha'],$row_usuario['senha'])){
                $_SESSION['nome'] = $row_usuario['nome'];
                header("location: admin.php");
            }
        }
    }
?>

<br>
<div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
            <br>
                <h3>Faça login</h3>
                <br>
                <br>
                <form action="" method="POST" class="login">
                    <div class="form-group">
                        <label for="usuario">Digite seu e-mail:</label>
                        <input type="text" class="form-control" name="usuario">
                    </div>
                    <div class="form-group">
                        <label for="senha">Digite sua senha:</label>
                        <input type="password" class="form-control" name="senha">
                    </div>
                    <input type="submit" class="btn btn-primary" name="btnlogin" value="Entrar">
                </form>
                <br>
                <br>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
<br>

<?php
    require_once 'footer.php';
?>