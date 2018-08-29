<?php
    class Bluray extends Produto{
        private $titulo;
        private $resolucao;
        
        function __construct($titulo, $resolucao,$estilo, $codigo) {
            parent::__construct($estilo, $codigo);
            
            $this->titulo = $titulo;
            $this->resolucao = $resolucao;
            $this->estilo = $estilo;
            $this->codigo = $codigo;
        }

        
        public function mostrainfoProduto() {
            
            echo "<b>Informações do Bluray :</b>";
            echo $this->titulo.", " ;            
            echo $this->estilo.", ";
            echo $this->resolucao.", ";
            echo $this->codigo . " <br><br>";
        }

    }
    
    // $bluray = new Bluray("Mostra Bluray","HD", "Eletrônica", "1#03");
    // $bluray->mostrainfoProduto();
?>
