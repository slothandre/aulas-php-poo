<?php
class Cliente {

    // Propriedades (ou atributos)
    public string $nome;
    public string $email = "Não informado.";
    public string $senha;
    public array $telefones;

    /* Método construtor
    Permite configurar a forma de inicialização
    do objeto, exigindo a atribuição de dados
    no momento de criar o objeto/instância.
    O construtor é sempre chamado de forma
    automática assim que o objeto é criado */
    public function __construct(string $nome, string $email) {
        /* Atribuindo os valores dos parâmetros
        às propriedades. Usamos o $this para acessar
        as propriedades desta Classe. */
        $this->nome = $nome;
        $this->email = $email;    
    }

}