<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro de Pessoa</title>
</head>

<body>
    <!-- Formulário para capturar os dados de cada pessoa -->
    <div class="container">
        <div class="row">

            <?php
            include_once "../conexao.php";

            $inscricao_municipal = $_GET['inscricao_municipal'];

            $sql = "SELECT inscricao_municipal, logradouro, numero, bairro, complemento, contribuinte FROM imoveis WHERE inscricao_municipal = $inscricao_municipal";

            $imovel_result = mysqli_query($conn, $sql);
            
            if ($imovel_result){
                $imovel = mysqli_fetch_assoc($imovel_result);

                $nome_query = "SELECT nome FROM pessoas WHERE id = " . $imovel['contribuinte'];

                $nome_result = mysqli_query($conn, $nome_query);

                if ($nome_result){
                    $pessoa = mysqli_fetch_assoc($nome_result);

                    echo "Inscrição Municipal: " . $imovel['inscricao_municipal'] . "<br>";
                    echo "Logradouro: " . $imovel['logradouro'] . "<br>";
                    echo "Número: " . $imovel['numero'] . "<br>";
                    echo "Bairro: " . $imovel['bairro'] . "<br>";
                    echo "Complemento: " . $imovel['complemento'] . "<br>";
                    echo "Contribuinte: " . $pessoa['nome'] . "<br><br>";
                }
            }else{
                echo "Imóvel não registrado!";
            }
            ?>

            <a href="imoveis.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>