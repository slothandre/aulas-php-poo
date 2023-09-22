<?php
class Cliente {

    // Propriedades (ou atributos)
    public string $nome;
    public string $email = "Não informado.";
    public string $senha;
    public array $telefones;

    // Métodos (ou comportamentos)
    public function exibirDados():void {
        echo "<section>";
        echo "<h2>$this->nome</h2>";
        echo "<p>$this->email</p>";
        echo "</section>";
    }

}