<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <header>
        <h1>PHP com POO - Exemplo 3</h1>
        <hr>
    </header>
    <main>
        <h2>Assuntos abordados:</h2>
        <ul>
            <li>Método construtor com atribuição obrigatória de valores aos parâmetros/propriedades do objeto</li>
            <li>Uso do <code>$this</code> para acesso às propriedades dentro do objeto</li>
        </ul>

        <?php
            require_once "./src/Cliente.php";
            $clienteA = new Cliente("André", "xpto@ok.com");
            $clienteB = new Cliente("Ozzy", "ozzy@msn.com");
        ?>
        <pre><?=var_dump($clienteA, $clienteB)?></pre>
    </main>
</body>
</html>