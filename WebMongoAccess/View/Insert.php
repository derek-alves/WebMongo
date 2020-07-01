<?php include_once 'Template/header.php'; ?>
<br><br>
    <div class="container">
        
        <form action="../Controller/Insert.php" method="POST">
        Username: <input name="username" type="text">
        <input type="button" class="btn btn-success" id="add" value="Novo Campo">
        <button class="btn btn-success" type="submit"> Inserir na Tabela </button>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Nome do Campo</th>
                        <th scope="col">Valor do Campo</th>
                    </tr>
                </thead>
                <tbody id="campos">
                    <tr>
                        <td><input name="column[]" type="text"></td>
                        <td><input name="data[]" type="text"></td>
                    </tr>
                </tbody>
            </table>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        var campo = ""
        campo += '<tr>'
        campo += '<td><input name="column[]" type="text"></td>'
        campo += '<td><input name="data[]" type="text"></td>'
        campo += '<tr>'


        $("#add").click(function() {
            $("#campos").append(campo);
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>