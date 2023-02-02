<?php
    require_once 'header.php';
    require_once 'menu.php';
    require_once 'conexao.php';
?>

<br>
<br>
<form method="POST" action="controlepeca.php">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Cadastro de Produtos</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" class="form-control">
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label for="modeloano">Modelo</label>
                    <input type="text" name="modeloano" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="estoque">Estoque</label>
                    <input type="text" name="estoque" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" class="form-control">
                        <?php 
                            $sql="SELECT * from categoria";
                            $resultado=$conn->prepare($sql);
                            $resultado->execute();

                            if(($resultado) && ($resultado->rowCount()!=0)){
                                while($linha=$resultado->fetch(PDO::FETCH_ASSOC)){
                                    extract($linha);
                        ?>
                        <option value="<?php echo $idcategoria; ?>"><?php echo $categoria; ?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                 <label for="foto">Foto</label><p>
                 <input type="file" name="foto" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" name="btncad" class="btn btn-primary" value="Enviar">
                </div>
            </div>
            </div>
        </div>
    </div>
</form>

<?php
    require_once 'footer_adm.php';
?>