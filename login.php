<?php
    require_once 'header.php';
    require_once 'menu.php';

    include_once 'conexao.php';

    session_start();
    ob_start();
?>

<?php
   	//"senha".password_hash('martelinho', PASSWORD_DEFAULT);

    $dadoslogin = filter_input_array(INPUT_POST,FILTER_DEFAULT);
  
    if(!empty($dadoslogin["btnlogin"])){
        //var_dump($dadoslogin);

        $sql = "SELECT matricula,nome,email,senha FROM funcionario WHERE email =:usuario LIMIT 1";
        $resultado = $conn -> prepare($sql);
        $resultado -> bindParam(':usuario',$dadoslogin['usuario'],PDO::PARAM_STR);
        $resultado -> execute();

        if(($resultado) AND ($resultado -> rowCount() != 0)){
            $row_usuario = $resultado -> fetch(PDO::FETCH_ASSOC);
            //var_dump($row_usuario);

            if(password_verify($dadoslogin['senha'],$row_usuario['senha'])){
                $_SESSION['nome'] = $row_usuario['nome'];
                $_SESSION['matricula'] = $row_usuario['matricula'];
                if($_SESSION["carrinho"]==true){
                    header("Location:form_carrinho.php");
                }
                    else{
                        header("Location: admin.php");
                    }
                        }
                        else{
                            $_SESSION['msg'] = "Usuário ou Senha não encontrados";
                        }
                            }			
                            else{
                                $_SESSION['msg'] = "Usuário ou Senha não encontrados";
                            }
                                }
                                if(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                }
?>

<style>
@import url('https://fonts.googleapis.com/css?family=Numans');

.container{
    height: 100%;
    align-content: center;
    }
    
    .card{
    height: 370px;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
    background-color: rgb(204, 204, 204) !important;
    }
    
    .social_icon span{
    font-size: 60px;
    margin-left: 10px;
    color: #FFC312;
    }
    
    .social_icon span:hover{
    color: white;
    cursor: pointer;
    }
    
    .card-header h3{
    color: white;
    }
    
    .social_icon{
    position: absolute;
    right: 20px;
    top: -45px;
    }
    
    .input-group-prepend span{
    width: 50px;
    background-color: #FFC312;
    color: black;
    border:0 !important;
    }
    
    input:focus{
    outline: 0 0 0 0  !important;
    box-shadow: 0 0 0 0 !important;
    
    }
    
    .remember{
    color: white;
    }
    
    .remember input
    {
    width: 20px;
    height: 20px;
    margin-left: 15px;
    margin-right: 5px;
    }
    
    .login_btn{
    color: black;
    background-color: #FFC312;
    width: 100px;
    }
    
    .login_btn:hover{
    color: black;
    background-color: white;
    }
    
    .links{
    color: white;
    }
    
    .links a{
    margin-left: 4px;
    }
</style>

<br>
<br>
<br>
<br>
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
				<form method="POST" action="">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuário" name="usuario">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Senha" name="senha">
					</div>
				
					<div class="form-group">
						<input type="submit" value="Cadastre-se" class="btn float-right ">
					</div>

					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" name="btnlogin">
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