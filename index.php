<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <header>
        <h1>PHP com POO - Exemplo 5</h1>
        <hr>
    </header>
    <main>
        <h2>Assuntos abordados:</h2>
        <ul>
            <li>Herança (Super Classe e Sub Classe)</li>
            <li>Métodos/propriedades protegidos (acessíveis apenas pelas classes em que foram definidos e pelas subclasses)</li>
            <li>Classe Abstrata</li>
            <li>Classe Final</li>
        </ul>

        <?php
            require_once "./src/PessoaFisica.php";
            $clientePF = new PessoaFisica;

            // Colocar um nome no Cliente PF
            $clientePF->setNome("Fulano");
            $clientePF->setEmail("fulano@gmail.com");
            $clientePF->setIdade(20);
            $clientePF->setCpf("123.456.789-00");

            // Exercício
            require_once "./src/PessoaJuridica.php";
            $clientePJ = new PessoaJuridica;
            $clientePJ->setNome("Beltrano S/A");
            $clientePJ->setEmail("blablabla@gmail.com");
            $clientePJ->setAnoFundacao(2000);
            $clientePJ->setCnpj("32.088.0001/000.41");
            $clientePJ->setNomeFantasia("Bla Bla Bla Informática");
        ?>
        <pre><?=var_dump($clientePF)?></pre>
        <pre><?=var_dump($clientePJ)?></pre>
    </main>
</body>
</html>