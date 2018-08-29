<?php
    class DVD extends Produto{
        private $titulo;
        
        public function __construct($titulo,$estilo, $codigo) {
            parent::__construct($estilo, $codigo);
            
            $this->titulo = $titulo;
            $this->estilo = $estilo;
            $this->codigo = $codigo;
            
        }

        
        function mostrainfoProduto() {
            echo "<b> Informações do DVD :</b>";
            echo $this->titulo.", ";
            echo $this->estilo.", ";
            echo $this->codigo . " <br><br>";
        }

    }
    
   // $dvd = new DVD("Mostra DVD", "POP", "1#02");
    //$dvd->mostrainfoProduto();
?>

