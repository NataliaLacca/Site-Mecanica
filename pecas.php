<?php
  require_once 'header.php';
  require_once 'menu.php';
  require_once 'conexao.php';

$sql = "SELECT * from peca";
$resultado = $conn->prepare($sql);
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vela">
      Comprar
    </button>
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