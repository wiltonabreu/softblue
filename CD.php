<?php
    class CD extends Produto{
        private $nome;
        private $album;

        
        public function __construct($nome, $album,$estilo, $codigo) {
            parent::__construct($estilo, $codigo);
            
            $this->nome = $nome;
            $this->album = $album;
            $this->estilo = $estilo;
            $this->codigo = $codigo;
        }

        public function mostrainfoProduto() {
        
            echo "<b> Informações do CD :</b>";
            echo $this->nome .", ";
            echo $this->album.", ";
            echo $this->estilo.", ";
            echo $this->codigo . " <br><br>";
        }

    }
    
    //$cd = new CD("Mostra CD", "Hits 2016", "Rock", "1#01");
    //$cd->mostrainfoProduto();

?>