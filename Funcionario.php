<?php

class Funcionario extends Pessoas{
        public $salario;
        public function mostrainfoPessoa() {
            echo "Funcionário:<br>";
            echo "Nome: " . $this->nome . "<br>";
            echo "Endereço: " . $this->endereco . "<br>";
            echo "Telefone: " . $this->telefone . "<br><br>";
        }
     
    }
    
    $funcionario = new Funcionario("Jonas", "Rua 3333", "32116666");
    $funcionario->mostrainfoPessoa();
    
?>

