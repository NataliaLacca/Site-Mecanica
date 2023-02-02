<?php
    require_once 'header.php';
    require_once 'menu.php';
?>

<br>
<br>
<form method="POST" action="controlefuncionario.php">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Cadastro de Funcionários</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" onkeypress="$(this).mask('(00)00000-0000')">
                </div>
            </div>
             <div class="col-md-3">
                <div class="form-group">
                    <label for="cpf">Cpf</label>
                    <input type="text" name="cpf" class="form-control" onkeypress="$(this).mask('000.000.000-00');">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="qualificacao">Qualificação</label>
                    <input type="text" name="qualificacao" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="experiencia">Experiência</label>
                    <input type="text" name="experiencia" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="cep">Cep</label>
                    <input type="text" name="cep" class="form-control" id="cep" onblur="pesquisacep(this.value);">
                </div>
            </div>
            <div class="col-md-5">   
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="rua" id="rua" class="form-control">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" name="numero" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                 <label for="bairro">Bairro</label><p>
                 <input type="text" name="bairro" id="bairro" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                 <label for="cidade">Cidade</label><p>
                 <input type="text" name="cidade" id="cidade" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                 <label for="uf">Estado</label><p>
                 <input type="text" name="uf" id="uf" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                 <label for="senha">Informe uma Senha</label><p>
                 <input type="password" name="senha" class="form-control">
                </div>
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
            <div class="col-md-5">
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