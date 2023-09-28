<?php
    require_once "Cliente.php";
    class PessoaJuridica extends Cliente {
        private int $anoFundacao;
        private string $cnpj;
        private string $nomeFantasia;

        public function __construct(){
                $this->setSituacao("em análise");
        }

        public function exibirDados(): void {
                echo "<h3>Método exibirDados - Classe PessoaJuridica</h3>";
                echo "<h4>".$this->getNome()."</h4>";
                echo "<p>Situação: ".$this->getSituacao()."</p>";
                echo "<p>Nome Fantasia: ".$this->getNomeFantasia()."</p>";
        }

        
        public function getAnoFundacao(): int
        {
                return $this->anoFundacao;
        }
        public function setAnoFundacao(int $anoFundacao): self
        {
                $this->anoFundacao = $anoFundacao;

                return $this;
        }
        public function getCnpj(): string
        {
                return $this->cnpj;
        }
        public function setCnpj(string $cnpj): self
        {
                $this->cnpj = $cnpj;

                return $this;
        }
        public function getNomeFantasia(): string
        {
                return $this->nomeFantasia;
        }
        public function setNomeFantasia(string $nomeFantasia): self
        {
                $this->nomeFantasia = $nomeFantasia;

                return $this;
        }
    }