<?php
    class Bluray extends Produto{
        public $titulo;
        public $resolucao;
        
        function __construct($titulo, $resolucao,$estilo, $codigo) {
            parent::__construct($estilo, $codigo);
            
            $this->titulo = $titulo;
            $this->resolucao = $resolucao;
            $this->estilo = $estilo;
            $this->codigo = $codigo;
        }

        
        public function mostrainfoProduto() {
            
            echo "Informações do Bluray:<br>";
            echo "Titulo: " . $this->titulo . "<br>";            
            echo "Estilo: " . $this->estilo . "<br>";
            echo "Resolução: " . $this->resolucao . "<br>";
            echo "Código: " . $this->codigo . "<br><br>";
        }

    }
    
     $bluray = new Bluray("Mostra Bluray","HD", "Eletrônica", "1#03");
     $bluray->mostrainfoProduto();
?>
