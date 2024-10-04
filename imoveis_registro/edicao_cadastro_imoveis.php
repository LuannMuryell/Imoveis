<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Edição de Registros</title>
</head>

<body>
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
                $sql = "UPDATE imoveis SET logradouro = ?, numero = ?, bairro = ?, complemento = ?, contribuinte = ? WHERE inscricao_municipal = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssii", $logradouro, $numero, $bairro, $complemento, $contribuinte, $inscricao_municipal);

                if ($stmt->execute()) {
                    header("Location: imoveis.php?success=1");
                    exit;
                } else {
                    echo "Erro ao atualizar o imóvel: " . $conn->error;
                }
            }
            ?>
            <a href="imoveis.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>