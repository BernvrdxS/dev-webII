<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Dados Recebidos</h1>

        <div class="data">
            <h2>Dados do Formulário:</h2>
            <?php
            // $_REQUEST captura dados de POST e GET
            echo "<p><strong>Nome:</strong> " . htmlspecialchars($_REQUEST['nome'] ?? '') . "</p>";
            echo "<p><strong>Telefone:</strong> " . htmlspecialchars($_REQUEST['telefone'] ?? '') . "</p>";
            echo "<p><strong>E-mail:</strong> " . htmlspecialchars($_REQUEST['email'] ?? '') . "</p>";
            echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($_REQUEST['mensagem'] ?? '')) . "</p>";
            ?>
        </div>

        <div class="data">
            <h2>Informações do Servidor:</h2>
            <pre><?php print_r($_SERVER); ?></pre>
        </div>
    </div>
</body>
</html>