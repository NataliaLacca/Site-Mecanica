<?php
    require_once 'header.php';
    require_once 'menu.php';
?>

    <div class="container-fluid">
        <div class="row text-center carousel">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="src/car 1.jpg" alt="Primeira foto">
                        </div>
                        <div class="carousel-item carrossel">
                            <img class="d-block w-100" src="src/car 2.png" alt="Segunda foto">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="src/car 3.jpg" alt="Terceira foto">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>Conheça nossos serviços</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row text-center servicos">
            <div class="col-md-4">
                <img src="src/troca-óleo.jpg" class="img-fluid">
                <h3>Troca de óleo</h3>
            </div>
            <div class="col-md-4">
                <img src="src/suspensão.jpeg" class="img-fluid">
                <h3>Suspensão</h3>
            </div>
            <div class="col-md-4">
                <img src="src/direção.jpg" class="img-fluid">
                <h3>Direção</h3>
            </div>
        </div>
    </div>

<?php
    require_once 'footer.php';
?>