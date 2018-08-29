<?php
    /**
 * A classe LOCACAO representa uma loca��o realizada na locadora. Ela recebe
 * como par�metros de seu m�todo construtor um objeto FUNCIONARIO, um objeto
 * USUARIO e um objeto PRODUTO, al�m de atualizar o n�mero de loca��es realizadas
 * pelo usu�rio em quest�o, por meio dos m�todos get e set do atributo de
 * loca��es do usu�rio em quest�o.  
 * */  
    class Locacao{
        
        private $funcionario;
        private $usuario;
        private $produto;
        
        function __construct($funcionario, $usuario, $produto) {
            $this->funcionario = $funcionario;
            $this->usuario = $usuario;
            $this->produto = $produto;
            
            $locacoesDoUsuario = $this->usuario->getNumFilmes();
            $this->usuario->setNumFilmes($locacoesDoUsuario + 1);
        }
        
        public function mostraInfoLocacao() {
            echo "Informações de Locação: <br> ";
            echo "<b> Funcionários :</b>";
            echo  $this->funcionario->mostrainfoPessoa();
            echo "<b> Usuário :</b>"; 
            echo  $this->usuario->mostrainfoPessoa(); 
            echo "<b> Produto :</b>"; 
            echo $this->produto->mostrainfoProduto();
            echo "<b> Numero de Locações :</b> " . $this->usuario->getNumFilmes() . "<br><br>";
        }
        

        
    }
    
  //  $locacao = new Locacao(new Funcionario("Jaoo", "Rua tres", "11112222",1100),
     //                      new Usuario("Wilton", "Rua quatro", "55556666"), 
    //                       new CD("Sertanejo","Desconhecido", "Album 2018","1#05")
    //                      );
    
   // $locacao->mostraInfoLocacao();
    
    
    
?>

