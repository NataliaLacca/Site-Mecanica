<?php
    require_once 'conexao.php';
    require_once 'header.php';

    $idfuncionario = filter_input(INPUT_GET, "matricula", FILTER_SANITIZE_NUMBER_INT);

    //EXCLUI TODO O REGISTRO
    //$sql = "DELETE from funcionario where matricula = $idfuncionario LIMIT 1";

    //TORNAR O FUNCIONARIO INATIVO
    $sql = "UPDATE funcionario set status = 'I' where matricula = $idfuncionario LIMIT 1";

    $resultado = $conn -> prepare($sql);
    $resultado -> execute();

    if(($resultado) AND ($resultado -> rowCount() !=0)){
        echo "<script> alert('Funcionário inativo com sucesso!');
        parent.location = 'relat_funcionario.php'; </script>";
    }else{
        echo "<script> alert('Não foi possível inativar!');
        parent.location = 'relat_funcionario.php'; </script>";
    }
?>