<?php
    class DVD extends Produto{
        public $titulo;
        
        public function __construct($titulo,$estilo, $codigo) {
            parent::__construct($estilo, $codigo);
            
            $this->titulo = $titulo;
            $this->estilo = $estilo;
            $this->codigo = $codigo;
            
        }

        
        function mostrainfoProduto() {
            echo "Informações do DVD:<br>";
            echo "Titulo: " . $this->titulo . "<br>";
            echo "Estilo: " . $this->estilo . "<br>";
            echo "Código: " . $this->codigo . "<br><br>";
        }

    }
    
    $dvd = new DVD("Mostra DVD", "POP", "1#02");
    $dvd->mostrainfoProduto();
?>

