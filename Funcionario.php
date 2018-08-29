<?php

class Funcionario extends Pessoas{
        
    private $salario;
    
    public function __construct($nome,$endereco, $telefone,$salario) {
        parent::__construct($nome, $telefone, $endereco);
        $this->salario = $salario;
    }
        
        public function mostrainfoPessoa() {
            echo "Informações de Funcionário: ";
            echo $this->nome .", ";
            echo $this->endereco .", ";
            echo $this->telefone .", ";
            echo $this->salario . " <br><br>";
        }
     
    }
    
    //$funcionario = new Funcionario("Jonas", "Rua 3333", "32116666",1000);
    //$funcionario->mostrainfoPessoa();
    
?>

