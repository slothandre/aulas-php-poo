<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 10</title>
</head>
<body>
    <header>
        <h1>PHP com POO - Exemplo 10</h1>
        <hr>
    </header>
    <main>
        <h2>Assuntos abordados:</h2>
        <ul>
            <li>Composer: gerenciador de dependência PHP</li>
            <li>Configurar o projeto com Composer usando <code>composer.json</code></li>
            <li>Autoload de classes evitando muitos requires e/ou require manuais</li>
        </ul>
        <?php

use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;

use Tabajara\{MEI, PessoaFisica as PF, PessoaJuridica as PJ};

            require_once "./src/fornecedores/Pagamento.php";
            require_once "./src/prestadores/Pagamento.php";
            require_once "./src/PessoaFisica.php";
            require_once "./src/PessoaJuridica.php";
            require_once "./src/MEI.php";

            $pagamentoFornecedor = new Pagamento;
            $pagamentoPrestador = new PrestadorPagamento;
        ?>
        <pre><?=var_dump($pagamentoFornecedor)?></pre>
        <pre><?=var_dump($pagamentoPrestador)?></pre>
        <hr>
        <?php

            $clientePF = new PF;
            $clientePJ = new PJ;
            $clienteMEI = new MEI;

            $clientePF->setNome("Zézin Geleca");
            $clientePF->setEmail("zeca.urubu@xpto.com");

            $clientePJ->setNome("Lula Molusco");
            $clientePJ->setEmail("cabana.do.biquini@lulinha.com");

            $clienteMEI->setNome("Leôncio");
            $clienteMEI->setEmail("bolina.de.gorfe@bigodon.com");
        ?>
        <section>
            <h2><?=$clientePF->getNome()?></h2>
            <p>E-mail: <?=$clientePF->getEmail()?></p>
        </section>
        <section>
            <h2><?=$clientePJ->getNome()?></h2>
            <p>E-mail: <?=$clientePJ->getEmail()?></p>
        </section>
        <section>
            <h2><?=$clienteMEI->getNome()?></h2>
            <p>E-mail: <?=$clienteMEI->getEmail()?></p>
        </section>
    </main>
</body>
</html>