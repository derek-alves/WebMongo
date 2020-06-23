<!DOCTYPE html>

<html lang="pt_br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/mongoose.png">
    <link rel="stylesheet" href="styles/main.css">
    <title>WebMongo</title>

</head>

<body>

    <header>

        <!-- Início da navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <a class="navbar-brand" href="index.html">WebMongo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Login<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Como usar</a>
                <a class="nav-item nav-link" href="#">Sobre</a>
              </div>
            </div>
          </nav>
        <!--Fim da navbar-->

    </header>

    <main>

        <!--Início do carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
    
    <footer>

      <p>WebMongo</p>


    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>