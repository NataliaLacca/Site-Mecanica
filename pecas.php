<?php
    require_once 'header.php';
    require_once 'menu.php';
?>

<br>
<div class="container-fluid">
    <div class="row pecas">
        <div class="col-md-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="src/vela_carro.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Vela</h5>
    <p class="card-text">Vela de ignição que trabalha quente, o suficiente para queimar depósitos de carvão, quando o veículo está em baixa velocidade.</p>
    <p>R$ 60,00</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vela">
      Comprar
    </button>
  </div>
</div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="src/bobina.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Bobina</h5>
    <p class="card-text">Possibilita a criação de campos magnéticos a partir da passagem de corrente elétrica pelo fio.</p>
    <p>R$ 110,00</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bobina">
      Comprar
    </button>
  </div>
</div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="src/amortecedor.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Amortecedor</h5>
    <p class="card-text">Controla o movimento das molas no veículo, fazendo com que o pneu mantenha o máximo de contato com o solo.</p>
    <p>R$ 200,00</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#amortecedor">
      Comprar
    </button>
  </div>
</div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="src/bieleta.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Bieleta</h5>
    <p class="card-text">A barra estabilizadora tem a função de controlar a inclinação do veículo.</p>
    <p>R$ 80,00</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bieleta">
      Comprar
    </button>
  </div>
</div>
        </div>
    </div>
</div>
<br>

<div class="modal fade" id="vela" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vela</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="src/vela_carro.png">
        <h4>Vela</h4>
        <p>Soluções inteligentes para seu carro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="bobina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="src/bobina.png">
        <h4>Bobina</h4>
        <p>Soluções inteligentes para seu carro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="amortecedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="src/amortecedor.png">
        <h4>Amortecedor</h4>
        <p>Soluções inteligentes para seu carro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="bieleta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="src/bieleta.png">
        <h4>Bieleta</h4>
        <p>Soluções inteligentes para seu carro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>

<?php
    require_once 'footer.php';
?>