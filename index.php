<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4</title>
</head>
<body>
    <header>
        <h1>PHP com POO - Exemplo 4</h1>
        <hr>
    </header>
    <main>
        <h2>Assuntos abordados:</h2>
        <ul>
            <li>Encapsulamento</li>
            <li>Modificadores de visibilidade (public, private e protected)</li>
        </ul>

        <?php
            require_once "./src/Cliente.php";
            $clienteA = new Cliente;

            /* O código abaixo dará erro pois a propriedade
            é privada! */
            // $clienteA->nome = "André";

            /* Usando o setter para atribuir um valor
            à propriedade privada "nome" */
            $clienteA->setNome("André");
            $clienteA->setEmail("xpto@ok.com");
            $clienteA->setSenha("senhaSegura123");
        ?>
        <!-- Usando o getter para ler/acessar dados privados -->
        <p>Nome: <?=$clienteA->getNome()?></p>
        <p>E-mail: <?=$clienteA->getEmail()?></p>
        <p>Senha: <?=$clienteA->getSenha()?></p>
        <pre><?=var_dump($clienteA)?></pre>
    </main>
</body>
</html>