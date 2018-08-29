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
    require_once 'Locacao.php';
    require_once 'Locadora.php';
    
    abstract class Pessoas{
        protected $nome;
        protected $endereco;
        protected $telefone;
        
        public function __construct($nome, $endereco, $telefone) {
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
        }
        
        public function getNome() {
            return $this->nome;
        }

           
        abstract function mostrainfoPessoa();        
       
        }  
    
    abstract class Produto{
        protected $estilo;
        protected $codigo;
        
        public function __construct($estilo, $codigo) {
            $this->estilo = $estilo;
            $this->codigo = $codigo;
        }
        
        function getCodigo() {
            return $this->codigo;
        }

                
        abstract function mostrainfoProduto();
    }
    
?>
    </BODY>
