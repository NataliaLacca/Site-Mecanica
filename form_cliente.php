<?php
    require_once 'header.php';
    require_once 'menu.php';
?>

<br>
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Cadastro do Cliente</h3>
        </div>
    </div>
<form>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <labe for="cpf">CPF</labe>
            <input type="text" class="form-control" name="cpf">
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <labe for="nome">Nome</labe>
            <input type="text" class="form-control" name="nome">
        </div>
    </div>
</div>
        <div class="form-group">
            <labe for="telefone">Telefone</labe>
            <input type="text" class="form-control" name="telefone">
        </div>
        <div class="form-group">
            <labe for="cep">CEP</labe>
            <input type="text" class="form-control" name="cep">
        </div>
        <div class="form-group">
            <labe for="endereco">Endereço</labe>
            <input type="text" class="form-control" name="enderco">
        </div>
        <div class="form-group">
            <labe for="numero">Número</labe>
            <input type="text" class="form-control" name="numero">
        </div>
        <div class="form-group">
            <labe for="complemento">Complemento</labe>
            <input type="text" class="form-control" name="complemento">
        </div>
        <div class="form-group">
            <labe for="bairro">Bairro</labe>
            <input type="text" class="form-control" name="bairro">
        </div>
        <div class="form-group">
            <labe for="cidade">Cidade</labe>
            <input type="text" class="form-control" name="cidade">
        </div>
        <div class="form-group">
            <labe for="uf">UF</labe>
            <input type="text" class="form-control" name="uf">
        </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<br>

<?php
    require_once 'footer_adm.php';
?>