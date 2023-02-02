<?php
    require_once 'conexao.php';
    require_once 'header.php';
    require_once 'conexao.php';

    $pageatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
    $page = (!empty($pageatual)) ? $pageatual : 1;
    $limitereg = 5;
    $inicio = ($limitereg * $page) - $limitereg;

    $busca = "SELECT p.codigopeca,p.nome,p.estoque,p.marca,p.modeloano,p.foto,p.preco,c.categoria
    from peca p,categoria c WHERE c.idcategoria = p.idcategoria and p.estoque>0 LIMIT $inicio,$limitereg";

    $resultado = $conn -> prepare($busca);
    $resultado -> execute();

    if(($resultado) AND ($resultado -> rowCount() !=0)){
?>

<br>
<h1 class="text-center">Relatório de Produtos</h1>
<br>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th>Imagem</th>
      <th>Código</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Estoque</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Categoria</th>
    </tr>
  </thead>
  <tbody>

<?php
  while($linha = $resultado -> fetch(PDO::FETCH_ASSOC)){
      //var_dump($linha);
      extract($linha);
?>

    <tr>
      <td><img src="<?php echo $foto; ?>" style=width:150px;heigth:150px;></td>
      <td><?php echo $codigopeca; ?></td>
      <td><?php echo $nome; ?></td>
      <td><?php echo $preco; ?></td>
      <td><?php echo $estoque; ?></td>
      <td><?php echo $marca; ?></td>
      <td><?php echo $modeloano; ?></td>
      <td><?php echo $categoria; ?></td>
      <td>
        <?php echo "<a href='editar.php?codigo=$codigopeca'>"; ?>
        <input type="submit" name="editar" class="btn btn-primary" value="Editar">
      </td>
      <td>
        <?php echo "<a href='excluir.php?codigo=$codigopeca'>"; ?>
        <input type="submit" name="excluir" class="btn btn-danger" value="Inativar">
      </td>
    </tr>

<?php
        }
?>

    </tbody>
    </table>

<?php
    }

  //Contar os registros no banco
  $qtregistro = "SELECT COUNT(codigopeca) AS registros FROM peca WHERE estoque>0";
  $resultado = $conn->prepare($qtregistro);
  $resultado->execute();
  $resposta = $resultado->fetch(PDO::FETCH_ASSOC);

  //Quantidade de página que serão usadas - quantidade de registros
  //dividido pela quantidade de registro por página
  $qnt_pagina = ceil($resposta['registros'] / $limitereg);

  // Maximo de links      
  $maximo = 2;

  echo "<a href='relat_peca.php?page=1'>Primeira</a> ";
  // Chamar página anterior verificando a quantidade de páginas menos 1 e 
  // também verificando se já não é primeira página
  for ($anterior = $page - $maximo; $anterior <= $page - 1; $anterior++){
      if ($anterior >= 1){
        echo "<a href='relat_peca.php?page=$anterior'>$anterior</a>";
      }
  }

  //Mostrar a página ativa
  echo "$page";

  //Chamar próxima página, ou seja, verificando a página ativa e acrescentando 1
  // a ela
  for ($proxima = $page + 1; $proxima <= $page + $maximo; $proxima++){
      if ($proxima <= $qnt_pagina){
          echo "<a href='relat_peca.php?page=$proxima'>$proxima</a>";
      }
  }

  echo "<a href='relat_peca.php?page=$qnt_pagina'>Última</a>";
?>