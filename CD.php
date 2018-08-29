<?php
    class CD extends Produto{
        public $nome;
        public $album;

        
        public function __construct($nome, $album,$estilo, $codigo) {
            parent::__construct($estilo, $codigo);
            
            $this->nome = $nome;
            $this->album = $album;
            $this->estilo = $estilo;
            $this->codigo = $codigo;
        }

        public function mostrainfoProduto() {
        
            echo "Informações do CD:<br>";
            echo "Nome: " . $this->nome . "<br>";
            echo "Album: " . $this->album . "<br>";
            echo "Estilo: " . $this->estilo . "<br>";
            echo "Código: " . $this->codigo . "<br><br>";
        }

    }
    
    $cd = new CD("Mostra CD", "Hits 2016", "Rock", "1#01");
    $cd->mostrainfoProduto();

?>