<HTML>
    <HEAD>
        <TITLE>OO: Exercicio 2</TITLE>
    </HEAD>
    <BODY>
        
<?php
    require_once 'Usuario.php';
    require_once 'Funcionario.php';
    require_once 'CD.php';
    require_once 'DVD.php';
    require_once 'Bluray.php';
    
    abstract class Pessoas{
        public $nome;
        public $endereco;
        public $telefone;
        
        public function __construct($nome, $endereco, $telefone) {
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
        }
        
        abstract function mostrainfoPessoa();        
       
    }  
    
    abstract class Produto{
        public $estilo;
        public $codigo;
        
        public function __construct($estilo, $codigo) {
            $this->estilo = $estilo;
            $this->codigo = $codigo;
        }
        
        abstract function mostrainfoProduto();
    }
    
?>
    </BODY>
