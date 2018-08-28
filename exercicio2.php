<HTML>
    <HEAD>
        <TITLE>OO: Exercicio 2</TITLE>
    </HEAD>
    <BODY>
        
<?php

/* 
 Exercício 2
Assumindo o exemplo fictício de uma locadora, modele e construa os códigos
necessários para as seguintes classes de um sistema:

 * Classe Usuario: deve conter o nome, telefone e endereço do usuário da locadora, e
também o número de filmes que ele já locou. Deve conter um método que exiba estas
informações.

 * Classe Funcionario: deve conter o nome, telefone e endereço do funcionário da
locadora, e o valor do seu salário. Deve conter um método que exiba estas
informações.
 */
  
   echo "Exercício 2";
   echo '<br><br>';
   
   class Pessoa{
       
       public $nome;
       public $endereco;
       public $telefone;
       
       public function __construct($nome, $endereco, $telefone) {          
           $this->setNome($nome);
           $this->setEndereco($endereco);
           $this->setTelefone($telefone);           
       }
       
       private function setNome($nome){
           $this->nome = $nome;
       }
       
       private function setEndereco($endereco){
           $this->endereco = $endereco;
       }
       
       private function setTelefone($telefone){
           $this->telefone = $telefone;
       }
       
       public function getNome(){
           return $this->nome;
       }
       
       public function getTelefone() {
           return $this->telefone;
       }
       
       public function getEdereco() {
           return $this->endereco;
       }
   }
   
   class Usuario extends Pessoa{
       public $numerosDeFilmesAlocados;
       
       public function __construct($numerosDeFilmesAlocados,$nome, $endereco, $telefone) {
           parent::__construct($nome, $endereco, $telefone);
           
           $this->setNumerosDeFilmesAlocados($numerosDeFilmesAlocados);
          
       }
       
       private function setNumerosDeFilmesAlocados($numerosDeFilmesAlocados){
           $this->numerosDeFilmesAlocados = $numerosDeFilmesAlocados;
       }
       
       public function getNumerosDeFilmesAlocados(){
           return $this->numerosDeFilmesAlocados;
       }
       
       public function mostraInformacoes() {
          echo "Nome do usuário: " ."<b>". $this->getNome() ."</b><br>";
          echo "Endereço: " . "<b>". $this->getEdereco() ."</b><br>";
          echo "Telefone: " . "<b>". $this->getTelefone() . "</b><br>";
          echo "Numero de filmes alocados: " . "<b>".$this->getNumerosDeFilmesAlocados() ."</b><br><br>";

           
       }      
       
   }
   
   class Funcionario extends Pessoa{
      public $salario;
      
      public function __construct($salario, $nome, $endereco,$telefone){
         parent::__construct($nome,$endereco,$telefone);
         
         $this->setSalario($salario);
      }
      
      private function setSalario($salario){
         $this->salario = $salario;
      }
      
      public function getSalario(){
         return $this->salario;
      }
      
      public function mostraInformacoes(){
         echo "Nome do Funcionário: " ."<b>". $this->getNome() ."</b><br>";
         echo "Endereço: " . "<b>". $this->getEdereco() ."</b><br>";
         echo "Telefone: " . "<b>". $this->getTelefone() . "</b><br>";
         echo "Salário: " . "<b>" . $this->getSalario() . "</b><br><br>";

      }
   }
   
   $usuario = new Usuario(5,"Wilton Abreu","Rua Pedro Leopoldo","(31) 32117777");   
   $usuario->mostraInformacoes();
   
   $funcionario = new Funcionario(2000,"Carlos", "Ruas das pedras", "(31) 32223443");
   $funcionario->mostraInformacoes();

 /* Classe CD: deve conter o nome do artista, o nome do álbum e estilo. Deve conter um
método que exiba estas informações.

 * Classe DVD: deve conter o título do DVD e o estilo. Deve conter um método que exiba
estas informações.

 * Classe Bluray: deve conter o título do Bluray, estilo e resolução (se é HD ou FullHD).
Deve conter um método que exiba estas informações.

 * Classe Locacao: deve conter o objeto do Usuario e do produto que foi locado. Deve
conter um método que exiba estas informações.

 * Classe Locadora: todos os objetos do sistema devem ser armazenados dentro de um
único objeto Locadora, que forneça os métodos apropriados para criação de todos os
objetos citados, e também métodos de exibição dos mesmos. Por exemplo: método
criarUsuario, criarFuncionario, criarDVD, listaUsuarios, listaFuncionarios, listaProdutos
etc.

 * Modele e crie quantas classes extras achar necessário, de modo a evitar redundância
de código e manter o seu código organizado. Utilize as recomendações apresentadas
em aula, como por exemplo, modificadores de acessos private, protecte e public
quando necessários, bem como o uso de métodos getters e setters.
 */
    
        
    
?>
    </BODY>
