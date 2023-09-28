<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 8</title>
</head>
<body>
    <header>
        <h1>PHP com POO - Exemplo 8</h1>
        <hr>
    </header>
    <main>
        <h2>Assuntos abordados:</h2>
        <ul>
            <li>Propriedades e métodos estáticos</li>
            <li>Acesso direto sem objetos</li>
            <li>Uso do <code>self</code> para acessar (dentro da classe) aos recursos estáticos</li>
        </ul>

        <?php
            require_once "./src/PessoaFisica.php";
            $cliente1 = new PessoaFisica;
            $cliente1->setNome("Astrogildo");
            $cliente1->setIdade(75);

            require_once "./src/Utilitarios.php";
            Utilitarios::obterData();
        ?>
        <h2>Atendimentos do dia: <?=Utilitarios::$dataAtual?></h2>
    </main>
</body>
</html>