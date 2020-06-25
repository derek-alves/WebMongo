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
            <a class="navbar-brand" href="index.php">WebMongo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Login<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="uso.php">Como usar</a>
                <a class="nav-item nav-link" href="sobre.php">Sobre</a>
              </div>
            </div>
          </nav>
        <!--Fim da navbar-->

        <!--Início do modal de login-->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
          Modal de login
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form autocomplete="off" id="form-login" class="text-center border border-light p-5">
                  <p class="h4 mb-4">
                    Login
                  </p>
                  <br/>
                  <a href="" style="color: #5cb85c;">Não possui login? Cadastre-se aqui!</a>
                  <br/><br/>
                  <input type="text" id="cadastro-usuario" class="form-control mb-4" placeholder="Usuário">
                  <input type="password" id="cadastro-senha" class="form-control mb-4" placeholder="Senha">
                </form>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success">Enviar</button>
              </div>
          </div>
        </div>
      </div>
        <!--Fim do modal de login-->

        <!--Início do modal de cadastro-->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
          Modal de cadastro
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form autocomplete="off" id="form-cadastro" class="text-center border border-light p-5">
                  <p class="h4 mb-4">
                    Cadastro
                  </p>
                  <input type="text" id="login-usuario" class="form-control mb-4" placeholder="Usuário">
                  <input type="text" id="cadastro-email" class="form-control mb-4" placeholder="Email">
                  <input type="password" id="login-senha" class="form-control mb-4" placeholder="Senha">
                </form>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success">Enviar</button>
              </div>
          </div>
        </div>
      </div>
        <!--Fim do modal de cadastro-->

    </header>