<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao meu projeto</title>
    
    <!-- Link do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-7QKwrAB9FvA80BLMRo4FT29DyAqtvsw9p9X6RiZlCJbXwKHEd9j6TmAbu88Ogpjm" crossorigin="anonymous">
    
    <style>
        /* Estilo para centralizar o conteúdo */
        body, html {
            height: 100%;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .card {
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card text-center">
            <h1 class="card-title">Sistema de Cadastro de Imóveis de São Leopoldo</h1>
            <h3>O que deseja acessar?</h3>
            <p class="card-text"></p>
            <div class="modal-footer">
                <a href="pessoas_cadastro/pessoas.php" class="btn btn-primary">Cadastro de pessoas</a>
                <a href="imoveis_registro/imoveis.php" class="btn btn-secondary">Cadastro de imóveis</a>
            </div>
        </div>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-NuPZTptDk4H08GkhToHewGfHUIBgnAJJf+IVfve/j3BtZ3HKBoGjv99Z2g+zAZnp" crossorigin="anonymous"></script>

</body>

</html>
