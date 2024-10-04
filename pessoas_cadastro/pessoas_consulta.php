<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">

    <title>Cadastro de Pessoa</title>
</head>

<body>
    <?php include "template_header.php"; ?>
    <!-- Formulário para capturar os dados de cada pessoa -->
    <div class="container">
        <div class="row">

            <?php

            include_once "../conexao.php";
            $id = $_GET['id'];
            // Supondo que já tenhamos a conexão aberta (usando o código anterior)

            // Query SQL para buscar todas as pessoas com os novos campos
            $sql = "SELECT id, nome, data_nascimento, cpf, genero, telefone, email FROM pessoas WHERE id = $id";

            // Executando a consulta
            $result = mysqli_query($conn, $sql);

            // Verificando se houve resultado
            if ($pessoa = mysqli_fetch_assoc($result)) {
                echo "ID: " . $pessoa['id'] . "<br>";
                echo "Nome: " . $pessoa['nome'] . "<br>";
                echo "Data de Nascimento: " . $pessoa['data_nascimento'] . "<br>";
                echo "CPF: " . $pessoa['cpf'] . "<br>";
                echo "Gênero: " . $pessoa['genero'] . "<br>";
                echo "Telefone: " . $pessoa['telefone'] . "<br>";
                echo "Email: " . $pessoa['email'] . "<br><br>";
            } else {
                echo "Nenhuma pessoa encontrada.";
            }
            ?>
            <a href="pessoas.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <?php include "template_footer.php"; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>