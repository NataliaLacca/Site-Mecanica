<?php
    require_once 'header.php';
    require_once 'menu.php';
?>

<br>
<div class="container-fluid">
    <div class="row acessorios">
        <div class="col-md-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="src/organizador.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Organizador - Bolsa Multiuso</h5>
    <p class="card-text"> Ideal para organizar produtos e objetos dentro do veículo, 
    muito útil em viagens, além de proteger o estofado e manter o carro organizado.</p>
    <p>R$ 25,00</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#organizador">
      Comprar
    </button>
  </div>
</div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="src/capa_volante.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Capa para Volante Universal</h5>
    <p class="card-text">Capas de volante Type-R em Tecido, ultra confortáveis, para 
    volantes com até 38cm de diâmetro, baixo custo com alta durabilidade.</p>
    <p>R$ 30,00</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#capavolante">
      Comprar
    </button>
  </div>
</div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="src/capa_banco.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Capa Banco Automotivo - 6 Peças Universal</h5>
    <p class="card-text">Com forro de espuma, lavável e de fácil aplicação.Garante 
    conforto e comodidade pra você. Com um design moderno e com costura eletrônica.</p>
    <p>R$ 200,00</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#capabanco">
      Comprar
    </button>
  </div>
</div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="src/capa_carro.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Capa para Cobrir Carro Impermeável</h5>
    <p class="card-text">Capa de cobrir carro é ideal para você que não tem garagem 
        coberta. Protege do sol excessivo e das chuvas e conserva a cor original do 
        seu carro.</p>
    <p>R$ 80,00</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#capacarro">
      Comprar
    </button>
  </div>
</div>
        </div>
    </div>
</div>
<br>

<div class="modal fade" id="organizador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Organizador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="src/organizador.png">
        <h4>Organizador</h4>
        <p>Soluções inteligentes para seu carro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="capavolante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Capa para Volante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="src/capa_volante.png">
        <h4>Capa para Volante</h4>
        <p>Soluções inteligentes para seu carro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="capabanco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Capa para Banco</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="src/capa_banco.png">
        <h4>Capa para Banco</h4>
        <p>Soluções inteligentes para seu carro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="capacarro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Capa para Carro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="src/capa_carro.png">
        <h4>Capa para Carro</h4>
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