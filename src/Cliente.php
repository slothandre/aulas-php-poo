<?php
class Cliente {

    // Propriedades (ou atributos)
    private string $nome;
    private string $email;
    private string $senha;

    /* Métodos getters e setters */
    public function setNome(string $nome):void {
        $this->nome = $nome;
    }


}