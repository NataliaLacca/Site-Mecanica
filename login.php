<?php
    require_once 'header.php';
    require_once 'menu.php';
?>

<br>
<div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <h3>Faça login</h3>
                <form action="#" method="post" class="login">
                    <div class="form-group">
                        <label for="usuario">Nome do usuário</label>
                        <input type="text" class="form-control" id="" name="usuario">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="" name="senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
<br>

<?php
    require_once 'footer.php';
?>