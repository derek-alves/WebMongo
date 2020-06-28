<!DOCTYPE html>
<html lang="pt_br">

<html>

<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/mongoose.png">
    <link rel="stylesheet" href="styles/main.css">
    <title>Select</title>


</head>

<body>

	<header>
		<h1 style="text-align: center; margin-top: 30px; margin-bottom: 50px;">Select no banco de dados (tela de listagem de dados)</h1>
	</header>

	<main>
		<p style="font-weight: bold; margin-bottom: 40px;">Nome da tabela: Exemplo</p>

		<!--Início da tabela-->
		<table class="table" style="text-align: center;">
  			<thead style="color: #5cb85c;">
    			<tr>
      				<th id="coluna1" scope="col">Coluna 1 (nome)</th>
      				<th id="coluna2" scope="col">Coluna 2 (endereço)</th>
      				<th id="coluna3"scope="col">Coluna 3 (telefone)</th>
      				<th id="coluna4" scope="col">Coluna 4 (senha)</th>
   				</tr>
   				<tbody>
   	 				<tr>
      					<td id="dado1" scope="row">exemplo</td>
      					<td id="dado2">exemplo</td>
      					<td id="dado3">exemplo</td>
      					<td id="dado4">exemplo</td>
    				</tr>
    			</tbody>
  			</thead>
		</table>
	    <!--Fim da table-->

	</main>

</body>

<?php

include_once 'includes/footer.php';

?>

</html>
