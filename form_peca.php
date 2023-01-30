<?php
    require_once 'header.php';
    require_once 'menu.php';
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
                    <input type="text" class="form-control" name="nome">
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
                    <input type="text" class="form-control" name="estoque">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" name="preco">
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                 <label for="foto">Foto</label><p>
                 <input type="file" class="form-control" name="foto">
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Enviar" name="btncad">
                </div>
            </div>
            </div>
        </div>
    </div>
</form>

<?php
    require_once 'footer_adm.php';
?>