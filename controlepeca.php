<?php
    include_once 'conexao.php';
?>

<?php 

if(isset($_FILES['foto'])){
  $arquivo = ($_FILES['foto']);


  if($arquivo['error']){
      echo 'Erro ao carregar arquivo';
      header ("Location: form_peca.php");
  }

  $pasta = "produtos/";
  $nomearquivo = $arquivo['name'];
  $novonome = uniqid();
  $extensao = strtolower(pathinfo($nomearquivo, PATHINFO_EXTENSION));

  if($extensao!="jpg" && $extensao!="png" && $extensao!="webp"){
      die("Tipo não aceito");
  }
  else{
      $salvaimg = move_uploaded_file($arquivo['tmp_name'], $pasta . $novonome . "." . $extensao);

      if($salvaimg){
          $path = $pasta . $novonome . "." . $extensao;
         
      }

  }

}

?>

<?php
$dadoscad = filter_input_array(INPUT_POST,FILTER_DEFAULT);
  
  if(!empty($dadoscad["btncad"])){

     // var_dump($dadoscad);

    $vazio = false;

    $dadoscad = array_map('trim', $dadoscad);
    if (in_array("", $dadoscad)) {
      $vazio = true;
        echo "<script> alert('Por favor, preencher todos os campos!');
        parent.location = 'form_peca.php'; </script>";
    }

    if(!$vazio){

    $sql = "insert into peca(nome,marca,modeloano,estoque,preco,foto)
    values(:nome,:marca,:modeloano,:estoque,:preco,:foto)";
    $salvar = $conn -> prepare($sql);
    $salvar -> bindParam(':nome',$dadoscad['nome'],PDO::PARAM_STR);
    $salvar -> bindParam(':marca',$dadoscad['marca'],PDO::PARAM_STR);
    $salvar -> bindParam(':modeloano',$dadoscad['modeloano'],PDO::PARAM_STR);
    $salvar -> bindParam(':estoque',$dadoscad['estoque'],PDO::PARAM_STR);
    $salvar -> bindParam(':preco',$dadoscad['preco'],PDO::PARAM_STR);
    $salvar -> bindParam(':foto',$path,PDO::PARAM_STR);
    $salvar -> execute();

      if($salvar->rowCount()){
        echo "<script> alert('Peça cadastrada com sucesso!');
        parent.location = 'form_peca.php'; </script>";
        unset($dadoscad);
      } else{
        echo "<script> alert('Erro: peça não cadastrada!');
        parent.location = 'form_peca.php'; </script>";
      }
    }
  }

  if(!empty($dadoscad["btneditar"])){

    $dadoscad = array_map('trim', $dadoscad);

    $sql = "UPDATE peca set nome = :nome, marca = :marca, modeloano = :modeloano, 
    estoque = :estoque, preco = :preco, foto = :foto 
    WHERE codigopeca = :codigopeca";
    $salvar = $conn -> prepare($sql);
    $salvar -> bindParam(':nome',$dadoscad['nome'],PDO::PARAM_STR);
    $salvar -> bindParam(':marca',$dadoscad['marca'],PDO::PARAM_STR);
    $salvar -> bindParam(':modeloano',$dadoscad['modeloano'],PDO::PARAM_STR);
    $salvar -> bindParam(':estoque',$dadoscad['estoque'],PDO::PARAM_STR);
    $salvar -> bindParam(':preco',$dadoscad['preco'],PDO::PARAM_STR);
    $salvar -> bindParam(':foto', $path, PDO::PARAM_STR);
    $salvar -> bindParam(':codigopeca',$dadoscad['codigopeca'],PDO::PARAM_INT);
    $salvar -> execute();

    if($salvar->rowCount()){
      echo "<script> alert('Dados atualizados!');
      parent.location = 'relat_peca.php'; </script>";
      unset($dadoscad);
    } else{
      echo "<script> alert('Erro: Peça não atualizada!');
      parent.location = 'relat_peca.php'; </script>";
    }
  }
?>