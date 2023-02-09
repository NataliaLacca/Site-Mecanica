<?php
    require_once 'header.php';
    require_once 'conexao.php';

    session_start();
    ob_start();
?>

<?php
    $totalgeral = 0;

    $busca = "SELECT * from carrinho";

    $resultado = $conn -> prepare($busca);
    $resultado -> execute();

    if(($resultado) AND ($resultado -> rowCount() !=0)){
?>

<br>
<h1 class="text-center">Produtos no Carrinho</h1>
<br>

<form method="post" action="finaliza.php">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Total</th>
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
  <td><?php echo $nome; ?></td>
  <td><?php echo $preco; ?></td>
  <td><?php echo $quantcomprada; ?></td>
  <td><?php echo $total = $quantcomprada * $preco; $totalgeral += $total; ?></td>
  <td>
    <a href="finaliza.php"><button type="submit" name="excluir" class="btn btn-danger" value="Excluir"></a></button>
  </td>
</tr>


<?php
}
?>

    </tbody>
</table>

<br>
<h3 class="text-center"><?php echo "Total do Pedido - R$ " . $totalgeral;?></h3>

<?php $_SESSION["totalgeral"]=$totalgeral; ?>
<h4><input type="submit" class="btn btn-primary" value="Finalizar Compra"></h4> 

<?php
}
?>