<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    <header>
        <h1>PHP com POO - Exemplo 2</h1>
        <hr>
    </header>
    <main>
        <h2>Assuntos abordados:</h2>
        <ul>
            <li>Acesso direto às propriedades</li>
            <li>Atribuição e leitura de dados</li>
            <li>Chamada de métodos</li>
            <li>Uso do <code>$this</code> para acessar recursos dentro da própria classe</li>
        </ul>

        <?php
            require_once "./src/Cliente.php";
            
            $clienteA = new Cliente;
            $clienteB = new Cliente;

            // Acesso e atribuição
            $clienteA->nome = "André";
            $clienteB->nome = "Tiuliel";

            $clienteA->telefones = ["11-2135-0300", "11-93011-9189"];

            $clienteA->email = "andre.m.d.abreu@gmail.com";
            $clienteA->senha = password_hash("123abc", PASSWORD_DEFAULT);
        ?>
        <hr>

        <h2>Dados dos objetos (acesso e leitura)</h2>
        <h3><?=$clienteA->nome?></h3>
        <p>E-mail: <?=$clienteA->email?></p>
        <p>
            Telefones (acesso um por um):
            <?=$clienteA->telefones[0]?>, <?=$clienteA->telefones[1]?>
        </p>
        <p>
            Telefones (convertendo para string):
            <?=implode(", ", $clienteA->telefones)?>
        </p>
        <p>Telefones (usando loop):</p>
        <ul>
            <?php foreach($clienteA->telefones as $telefone) { ?>
                <li><?=$telefone?></li>
            <?php } ?>
        </ul>

        <h2>Acessando os dados através de um método</h2>
        <?=$clienteA->exibirDados()?>
        <?=$clienteB->exibirDados()?>
        <pre><?=var_dump($clienteA, $clienteB)?></pre>
    </main>
</body>
</html>