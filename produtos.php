<HTML>
    <HEAD>
        <TITLE>OO: Exercicio 2-Resolução</TITLE>
    </HEAD>
    <BODY>

<?php
 
abstract class Pessoa {

    // Elementos PROTECTED podem ser utilizados pela classe e suas subclasses    
    protected $nome;
    protected $telefone;
    protected $endereco;
    
    public function __construct($nome, $telefone, $endereco) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }
    
    // Como ser� necess�rio capturar o nome dos objetos mais adiante, foi criado
    // o m�todo getNome
    public function getNome() {
        return $this->nome;
    }
    
    abstract function showInfoPessoa();
}

/**
 * A classe USUARIO extende de PESSOA, e tem um atributi pr�prio que FUNCIONARIO
 * n�o tem: o n�mero de loca��es j� realizadas por esta pessoa. Para interagir
 * com este dado, foram criados os m�todos set e get deste atributo, uma vez
 * que oa tributo foi criado como PRIVATE para evitar o acesso externo ao mesmo.
 * */    
class Usuario extends Pessoa {
    private $numeroDeLocacoes = 0;
    
    public function getNumeroDeLocacoes() {
       return $this->numeroDeLocacoes;
    }
    
    public function setNumeroDeLocacoes($numeroDeLocacoes) {
       $this->numeroDeLocacoes = $numeroDeLocacoes;
    }
    
    public function showInfoPessoa() {
        echo "Informações de pessoa: ";
        echo $this->nome . " ";
        echo $this->telefone . " ";
        echo $this->endereco . " ";
        echo $this->numeroDeLocacoes . "<BR>";
    }
}

/**
 * A classe FUNCIONARIO extende de PESSOA, e � complementada com a informa��o
 * de sal�rio. N�o foi criado os m�todos set e get para o atributo sal�rio pois
 * neste exemplo esta informa��o s� � utilizada pelo m�todo interno de exibi��o
 * de dados.
 * */    
class Funcionario extends Pessoa {
    private $salario;
    
    public function __construct($nome, $telefone, $endereco, $salario) {
        parent::__construct($nome, $telefone, $endereco);
        $this->salario = $salario;
    }
    
    public function showInfoPessoa() {
        echo "Informações de funcionário: ";
        echo $this->nome . " ";
        echo $this->telefone . " ";
        echo $this->endereco . " ";
        echo $this->salario . "<BR>";
    }
}

/**
 * Como todo produto tem ESTILO e C�DIGO, foi criado a classe PRODUTO centralizando
 * estas informa��es. 
 * */  
abstract class Produtos {

    // Elementos PROTECTED podem ser utilizados pela classe e suas subclasses 
    protected $estilo;
    protected $codigo;
    
    public function __construct($estilo, $codigo) {
        $this->estilo = $estilo;
        $this->codigo = $codigo;
    }
    
    // Como a informa��o de c�digo ser� utilizada mais adiante, foi criado 
    // o m�todo getCodigo para esta classe
    public function getCodigo() {
        return $this->codigo;
    }
    
    // Como cada produto tem suas informa��es pr�prias, um m�todo abstrato foi
    // criado para padronizar a assinatura do m�todo de exibi��o das informa��es
    abstract function showInfoProduto();
}

/**
 * Classe CD, extende de PRODUTO, e � complementada pelas informa��es que s�
 * existem para os CDs. Como a classe PRODUTO possui um m�todo abstrato, �
 * obrigat�rio esta classe implement�-lo (m�todo showInfoProduto)
 * */   
class CD extends Produtos {
    private $artista;
    private $album;
    
    public function __construct($estilo, $codigo, $artista, $album) {
       parent::__construct($estilo, $codigo);
       $this->artista = $artista;
       $this->album = $album;
    }
    
    public function showInfoProduto() {
        echo "Informações de CD: ";
        echo $this->estilo . " ";
        echo $this->codigo . " ";
        echo $this->artista . " ";
        echo $this->album . "<BR>";
    }
}

/**
 * Classe DVD, extende de PRODUTO, e � complementada pelas informa��es que s�
 * existem para os DVDs. Como a classe PRODUTO possui um m�todo abstrato, �
 * obrigat�rio esta classe implement�-lo (m�todo showInfoProduto)
 * */  
class DVD extends Produtos {
    private $titulo;
    
    public function __construct($estilo, $codigo, $titulo) {
       parent::__construct($estilo, $codigo);
       $this->titulo = $titulo;
    }
    
    public function showInfoProduto() {
        echo "Informações de DVD: ";
        echo $this->estilo . " ";
        echo $this->codigo . " ";
        echo $this->titulo . "<BR>";
    }
}

/**
 * Classe Bluray, extende de PRODUTO, e � complementada pelas informa��es que s�
 * existem para os Blurays. Como a classe PRODUTO possui um m�todo abstrato, �
 * obrigat�rio esta classe implement�-lo (m�todo showInfoProduto)
 * */ 
class Bluray extends Produtos {
    private $titulo;
    private $resolucao;
    
    public function __construct($estilo, $codigo, $titulo, $resolucao) {
       parent::__construct($estilo, $codigo);
       $this->titulo = $titulo;
       $this->resolucao = $resolucao;
    }
    
    public function showInfoProduto() {
        echo "Informações de Bluray: ";
        echo $this->estilo . " ";
        echo $this->codigo . " ";
        echo $this->titulo . " ";
        echo $this->resolucao . "<BR>";
    }
}

/**
 * A classe LOCACAO representa uma loca��o realizada na locadora. Ela recebe
 * como par�metros de seu m�todo construtor um objeto FUNCIONARIO, um objeto
 * USUARIO e um objeto PRODUTO, al�m de atualizar o n�mero de loca��es realizadas
 * pelo usu�rio em quest�o, por meio dos m�todos get e set do atributo de
 * loca��es do usu�rio em quest�o.  
 * */   
class Locacao {
    private $funcionario;
    private $usuario;
    private $produto;
    
    public function __construct($funcionario, $usuario, $produto) {
        $this->funcionario = $funcionario;
        $this->usuario = $usuario;
        $this->produto = $produto;
        
        $locacoesDoUsuario = $this->usuario->getNumeroDeLocacoes();
        $this->usuario->setNumeroDeLocacoes($locacoesDoUsuario + 1);
    }
    
    // Este m�todo exibe as informa��es dos 3 objetos envolvidos na loca��o
    public function showInfoLocacao() {
        echo "LOCAÇÃO realizada por: ";
        $this->usuario->showInfoPessoa();
        
        echo "LOCAÇÃO atendida por: ";
        $this->funcionario->showInfoPessoa();
        
        echo "LOCAÇÃO do produto: ";
        $this->produto->showInfoProduto();
        
        echo "<BR>";
    }
}

/**
 * A classe Locadora possui um array de FUNCIONARIOS, um array de USUARIOS, 
 * um array de PRODUTOS e um array de LOCACOES para organizar todas as informa��es
 * da locadora. Para cada um destes arrays foi criado um m�todo de inser��o de
 * dados, e um de listagem de dados.
 * */    
class Locadora {
    private $funcionarios = array();
    private $usuarios = array();
    private $produtos = array();
    private $locacoes = array();
    
    /* M�todos de cria��o de objetos e armazenamento na locadora */
    
    public function criarFuncionario($nome, $telefone, $endereco, $salario) {
       $funcionario = new Funcionario($nome, $telefone, $endereco, $salario);
       array_push($this->funcionarios, $funcionario);
    }
    
    public function criarUsuario($nome, $telefone, $endereco) {
       $usuario = new Usuario($nome, $telefone, $endereco);
       array_push($this->usuarios, $usuario);
    }
    
    public function criarCD($estilo, $codigo, $artista, $album) {
       $produto = new CD($estilo, $codigo, $artista, $album);
       array_push($this->produtos, $produto);
    }
    
    public function criarDVD($estilo, $codigo, $titulo) {
       $produto = new DVD($estilo, $codigo, $titulo);
       array_push($this->produtos, $produto);
    }
    
    public function criarBluray($estilo, $codigo, $titulo, $resolucao) {
       $produto = new Bluray($estilo, $codigo, $titulo, $resolucao);
       array_push($this->produtos, $produto);
    }
    
    public function criarLocacao($funcionario, $usuario, $produto) {
       $locacao = new Locacao($funcionario, $usuario, $produto);
       array_push($this->locacoes, $locacao);
    }
    
    /* M�todos de listagem de objetos armazenados na locadora */
    
    public function listaUsuarios() {
       echo "<BR> LISTA DE USUÁRIOS: <BR>";
       
       foreach($this->usuarios as $usuario) {
           $usuario->showInfoPessoa();
       }
    }
    
    public function listaFuncionarios() {
       echo "<BR> LISTA DE FUNCIONÁRIOS: <BR>";
       
       foreach($this->funcionarios as $funcionario) {
           $funcionario->showInfoPessoa();
       }
    }
    
    public function listaProdutos() {
       echo "<BR> LISTA DE PRODUTOS: <BR>";
       
       foreach($this->produtos as $produto) {
           $produto->showInfoProduto();
       }
    }
    
    public function listaLocacoes() {
       echo "<BR> LISTA DE LOCAÇÕES: <BR>";
       
       foreach($this->locacoes as $locacao) {
           $locacao->showInfoLocacao();
       }
    }
    
    /* M�todos de captura de objetos armazenados na locadora */
        
    public function getUsuarioPeloNome($nome) {
       foreach($this->usuarios as $usuario) {
           if($usuario->getNome() == $nome)
               return $usuario;
       } 
       
       return null;
    }
    
    public function getFuncionarioPeloNome($nome) {
       foreach($this->funcionarios as $funcionario) {
           if($funcionario->getNome() == $nome)
               return $funcionario;
       } 
       
       return null;
    }
    
    public function getProdutoPeloCodigo($codigo) {
       foreach($this->produtos as $produto) {
           if($produto->getCodigo() == $codigo)
               return $produto;
       } 
       
       return null;
    }
}

// Criando a locadora
$locadora = new Locadora();

// Inserindo funcion�rios
$locadora->criarFuncionario("André", "9999-9999", "Rua da Softblue", 1000);
$locadora->criarFuncionario("Carlos", "9999-9998", "Rua do Software", 1000);

// Listando funcion�rios
$locadora->listaFuncionarios();

// Inserindo usu�rios
$locadora->criarUsuario("Fernando", "9999-9997", "Rua Brasil");
$locadora->criarUsuario("Samuel", "9999-9996", "Rua Máxico");

// Listando usu�rios
$locadora->listaUsuarios();

// Inserindo produtos
$locadora->criarCD("Rock", 1, "U2", "Zooropa");
$locadora->criarDVD("Suspense", 2, "A Noite Chuvosa");
$locadora->criarBluray("Ação", 3, "O Tesouro", "FullHD");

// Listando produtos
$locadora->listaProdutos();

// Criando loca��es: observe que � necess�rio capturar os objetos pelos seus
// nomes ou c�digos, neste exemplo, para utiliz�-los na cria��o da loca��o
$funcionario = $locadora->getFuncionarioPeloNome("André");
$usuario = $locadora->getUsuarioPeloNome("Samuel");
$produto = $locadora->getProdutoPeloCodigo(1);
$locadora->criarLocacao($funcionario, $usuario, $produto);

$funcionario = $locadora->getFuncionarioPeloNome("Carlos");
$usuario = $locadora->getUsuarioPeloNome("Fernando");
$produto = $locadora->getProdutoPeloCodigo(2);
$locadora->criarLocacao($funcionario, $usuario, $produto);

$funcionario = $locadora->getFuncionarioPeloNome("Andrá");
$usuario = $locadora->getUsuarioPeloNome("Samuel");
$produto = $locadora->getProdutoPeloCodigo(3);
$locadora->criarLocacao($funcionario, $usuario, $produto);

// Listando loca��es
$locadora->listaLocacoes();

?>
</BODY>
</HTML>