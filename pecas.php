<?php
  require_once 'header.php';
  require_once 'menu.php';
  require_once 'conexao.php';

$sql = "SELECT * from peca";
$resultado = $conn -> prepare($sql);
$resultado -> execute();

if(($resultado) and ($resultado->rowCount()!=0)){
?>

<br>
<div class="container-fluid">
  <div class="row pecas">
      <?php
        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
        extract($linha);
      ?>
    <div class="col-md-3">
    <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="<?php echo $foto; ?>" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $nome;?></h5>
    <p class="card-text"><?php echo $descricao;?></p>
    <p>R$ <?php echo $preco; ?></p>
    <form action="carrinho.php" method="post">
      <h5><label>Quantidade:</label>
      <input type="number" name="quantcomprada" value="1" style=width:50px;></h5>
      <input type="hidden" name="codigopeca" value="<?php echo $codigopeca; ?>">
      <input type="submit" class="btn btn-primary" value="Comprar">
    </form>
  </div>
</div>

    </div>
    <?php 
        }
      }
    ?>
  </div>
</div>

<?php
  require_once 'footer.php';
?>