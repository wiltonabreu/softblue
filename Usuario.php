<?php
    
    //require_once 'exercicio2.php';
    
    class Usuario extends Pessoas{       
        
        public $numFilmes = 0;

        public function mostrainfoPessoa() {
            echo "Usuário:<br>";
            echo "Nome: " . $this->nome . "<br>";
            echo "Endereço: " . $this->endereco . "<br>";
            echo "Telefone: " . $this->telefone . "<br><br>";
        }

    }
    
    $usuario = new Usuario("Wilton", "Rua 2222", "32117777");
    $usuario->mostrainfoPessoa();
?>

