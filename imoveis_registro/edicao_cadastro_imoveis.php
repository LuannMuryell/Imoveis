<!--
Este arquivo envia para o banco de dados somente as informações que foram atualizadas.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <title>Edição de Registros</title>
</head>

<body>

    <?php include "template_header_imoveis.php"; ?>

    <div class="container">
        <div class="row">
        <?php 
    include_once "../conexao.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inscricao_municipal = $_POST['inscricao_municipal'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $complemento = $_POST['complemento'];
        $contribuinte = $_POST['contribuinte'];

        // Atualize os dados no banco de dados
        $sql = "UPDATE imoveis SET 
                    logradouro = '$logradouro', 
                    numero = '$numero', 
                    bairro = '$bairro', 
                    complemento = '$complemento', 
                    contribuinte = '$contribuinte' 
                WHERE inscricao_municipal = '$inscricao_municipal'";

        mysqli_query($conn, $sql);
    }
?>
            <a href="imoveis.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>

    <?php include "template_footer_imoveis.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>