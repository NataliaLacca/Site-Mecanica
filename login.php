<?php
    require_once 'header.php';
    require_once 'menu.php';

    include_once 'conexao.php';

    session_start();
    ob_start();
?>

<?php

    echo "senha".password_hash('martelinho', PASSWORD_DEFAULT);

    $dadoslogin = filter_input_array(INPUT_POST,FILTER_DEFAULT);
  
    if(!empty($dadoslogin["btnlogin"])){
        var_dump($dadoslogin);

        $sql = "SELECT matricula,nome,email,senha FROM funcionario WHERE email =:usuario LIMIT 1";
        $resultado = $conn -> prepare($sql);
        $resultado -> bindParam(':usuario',$dadoslogin['usuario'],PDO::PARAM_STR);
        $resultado -> execute();

        if(($resultado) AND ($resultado -> rowCount() != 0)){
            $row_usuario = $resultado -> fetch(PDO::FETCH_ASSOC);
            var_dump($row_usuario);

            if(password_verify($dadoslogin['senha'],$row_usuario['senha'])){
                $_SESSION['nome'] = $row_usuario['nome'];
                header("location: admin.php");
            }
        }
    }
?>

<br>
<br>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Fazer login</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuário">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Senha">
					</div>
				
					<div class="form-group">
						<input type="submit" value="Cadastre-se" class="btn float-right ">
					</div>

					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				
				<div class="d-flex justify-content-center links">
					<a href="#">Esqueceu a Senha?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<br>

<?php
    require_once 'footer.php';
?>