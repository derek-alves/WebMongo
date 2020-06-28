<?php

//Incluindo o header:
include_once 'includes/header.php';

?>

    <main style="margin-bottom: 80px;">

        <!--Início do carousel-->
        <div id="exampleCarouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-caption">
                  <h2>Facilidade e desempenho</h2>
                </div>
                <img id="imagem1" src="img/escritorio.jpg" class="img-fluid d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <h2>Tecnologias modernas</h2>
                </div>
                <img id="imagem2" src="img/desenvolvedor.jpg" class="img-fluid d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <h2>Segurança e confiabilidade</h2>
                </div>
                <img id="imagem3" src="img/database.jpg" class="img-fluid d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
          <!--Fim do carousel-->

          <h1>Por que escolher WebMongo?</h1>
          <br/>
          <hr/>
          <br/>

          <div id="texto">
             <p>
                Um bom banco de dados é essencial para que as informações da sua empresa sejam 
                 armazenadas com segurança. E WebMongo oferece o suporte necessário para que você 
                possa operar de forma rápida e intuitiva.
            </p>
          </div>

          <br/>
          <hr/>
          <br/>

    
    </main>
    
<?php

//Incluindo o footer:
include_once 'includes/footer.php';

?>