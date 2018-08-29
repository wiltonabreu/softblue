<?php
    
    //require_once 'exercicio2.php';
    
    class Usuario extends Pessoas{       
        
        private $numFilmes = 0;
        
        function getNumFilmes() {
            return $this->numFilmes;
        }

        function setNumFilmes($numFilmes) {
            $this->numFilmes = $numFilmes;
        }
        
        

        
        public function mostrainfoPessoa() {
            echo "Informações de pessoa: ";
            echo  $this->nome .", ";
            echo  $this->endereco .", ";
            echo  $this->telefone .", ";
            echo  $this->numFilmes . " <br><br>";
        }

    }
    
    //$usuario = new Usuario("Wilton", "Rua 2222", "32117777");
    //$usuario->mostrainfoPessoa();
?>

