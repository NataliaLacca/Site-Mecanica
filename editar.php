<?php
    require_once 'conexao.php';
    require_once 'header.php';

    $idfuncionario = filter_input(INPUT_GET, "matricula", FILTER_SANITIZE_NUMBER_INT);

    $busca = "SELECT * from funcionario where matricula = $idfuncionario LIMIT 1";

    $resultado = $conn -> prepare($busca);
    $resultado -> execute();

    if(($resultado) AND ($resultado -> rowCount() !=0)){
        $linha = $resultado -> fetch(PDO::FETCH_ASSOC);
        extract($linha);
    }
    else{
        $_SESSION['msg'] = "Funcionario não encontrado!";
        header("Location : relat_funcionario.php");
    }
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
        <div class="col-md-1">
                <div class="form-group">
                    <label for="matricula">Matricula</label>
                    <input type="text" class="form-control" name="matricula"
                        value="<?php echo $matricula; ?>"
                    >
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome"
                    value="<?php echo $nome; ?>"
                    >
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" onkeypress="$(this).mask('(00)00000-0000')"
                    value="<?php echo $telefone; ?>"
                    >
                </div>
            </div>
             <div class="col-md-3">
                <div class="form-group">
                    <label for="cpf">Cpf</label>
                    <input type="text" name="cpf" class="form-control" onkeypress="$(this).mask('000.000.000-00');"
                    value="<?php echo $cpf; ?>"
                    >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="qualificacao">Qualificação</label>
                    <input type="text" class="form-control" name="qualificacao"
                        value="<?php echo $qualificacao; ?>"
                    >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="experiencia">Experiência</label>
                    <input type="text" class="form-control" name="experiencia"
                        value="<?php echo $experiencia; ?>"
                    >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email"
                        value="<?php echo $email; ?>"
                    >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="cep">Cep</label>
                    <input type="text" name="cep" class="form-control" id="cep" onblur="pesquisacep(this.value);"
                        value="<?php echo $cep; ?>"
                    >
                </div>
            </div>
            <div class="col-md-5">   
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="rua" name="rua">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control" name="numero"
                        value="<?php echo $numerocasa; ?>"
                    >
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" name="complemento"
                        value="<?php echo $complemento; ?>"
                    >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                 <label for="bairro">Bairro</label><p>
                 <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                 <label for="cidade">Cidade</label><p>
                 <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                 <label for="uf">Estado</label><p>
                 <input type="text" class="form-control" id="uf" name="uf">
                </div>
            </div>
        </div>
        <div class="row">
            </div>
            <br>
            <br>
            <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Enviar" name="btneditar">
                </div>
            </div>
            </div>
        </div>
    </div>
</form>

<?php
    require_once 'footer_adm.php';
?>