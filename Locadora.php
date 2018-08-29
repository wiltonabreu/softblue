<?php

/**
 * A classe Locadora possui um array de FUNCIONARIOS, um array de USUARIOS, 
 * um array de PRODUTOS e um array de LOCACOES para organizar todas as informa��es
 * da locadora. Para cada um destes arrays foi criado um m�todo de inser��o de
 * dados, e um de listagem de dados.
 * */ 
    class Locadora{
        private $usuarios = array();
        private $funcionarios = array();
        private $produtos = array();
        private $locacoes = array();
        
        public function criarUsuario($nome,$endereco,$telefone) {
            $usuario = new Usuario($nome, $endereco, $telefone);
            array_push($this->usuarios, $usuario);
            
        }
        
        public function listaUsuarios() {
            echo "<BR> LISTA DE USUÁRIOS: <BR>";
            foreach ($this->usuarios as $usuario) {
                $usuario->mostrainfoPessoa();
            }
            
        }
        
        public function criaFuncionario($nome,$endereco,$telefone,$salario) {
            $funcionario = new Funcionario($nome, $telefone, $endereco, $salario);
            array_push($this->funcionarios, $funcionario);              
            
        }
        
        public function listaFuncionario() {
            echo "<BR> LISTA DE FUNCIONÁRIOS: <BR>";
        
            foreach ($this->funcionarios as $funcionario) {
                $funcionario->mostrainfoPessoa();
            }
        }
        
        public function criaCD($nome, $album,$estilo, $codigo){
            $produto = new CD($nome, $album, $estilo, $codigo);
            array_push($this->produtos, $produto);
            
        }
        
        
        
        public function criaDVD($titulo,$estilo, $codigo) {
            $produto = new DVD($titulo, $estilo, $codigo);
            array_push($this->produtos, $produto);
        }
        
        public function criaBluray($titulo, $resolucao,$estilo, $codigo) {
            $produto = new Bluray($titulo, $resolucao, $estilo, $codigo);
            array_push($this->produtos, $produto);
        }
        
        public function listaProdutos() {
            echo "<BR> LISTA DE PRODUTOS: <BR>";
            foreach ($this->produtos as $produto) {
                $produto->mostrainfoProduto();
            }
        }
       
        public function criaLocacao($funcionario, $usuario, $produto) {
            $locacao = new Locacao($funcionario, $usuario, $produto);
            array_push($this->locacoes, $locacao);
        }
        
        public function listaLocacao() {
            echo "<BR> LISTA DE lOCAÇÃO: <BR>";
            foreach ($this->locacoes as $locacao) {
                $locacao->mostraInfoLocacao();
            }
            
        }
        
        
        public function getUsuarioPeloNome($nome) {
            foreach ($this->usuarios as $usuario) {
                if($usuario->getNome() == $nome ){
                    return $usuario;
                    
                }
                
                
            }
            return null;
        }
        
        public function getFuncionarioPeloNome($nome) {
            foreach ($this->funcionarios as $funcionario) {
                if($funcionario->getNome() == $nome){
                    return $funcionario;
                }
                
            }
            return null; 
        }
        
       
        
        public function getProdutoPeloCodigo($codigo) {
            foreach ($this->produtos as $produto) {
                if($produto->getCodigo() == $codigo){
                    return $produto;
                }
                
                
            }
            return null;
        }
    }
    
    $locadora = new Locadora();
    
    
    
    $locadora->criaFuncionario("Wilton", "Rua Padre Miguel", "9999-1111", 2000);
    $locadora->criaFuncionario("Marcos", "Rua Maria M.", "8888-8888", 2300);    
    $locadora->listaFuncionario();
    
    $locadora->criarUsuario("Regis", "9999-9997", "Rua Brasil");
    $locadora->criarUsuario("Tatu", "9999-9996", "Rua Máxico");    
    $locadora->listaUsuarios();
    
    $locadora->criaCD("Mostra CD", "Hits 2016", "Rock", 1);
    $locadora->criaDVD("Mostra DVD", "POP", 2);
    $locadora->criaBluray("Mostra Bluray","HD", "Eletrônica", 3);
    
    $locadora->criaCD("Rock", "U2", "Zooropa",4);
    $locadora->criaDVD("Suspense", "A Noite Chuvosa",5);
    $locadora->criaBluray("Ação", "O Tesouro", "FullHD", 6);    
    $locadora->listaProdutos();
    
    $funcionario = $locadora->getFuncionarioPeloNome("Wilton");
    $usuario = $locadora->getUsuarioPeloNome("Regis");
    $produto = $locadora->getProdutoPeloCodigo(1);
    $locadora->criaLocacao($funcionario, $usuario, $produto);
    
    $funcionario = $locadora->getFuncionarioPeloNome("Marcos");
    $usuario = $locadora->getUsuarioPeloNome("Tatu");
    $produto = $locadora->getProdutoPeloCodigo(2);
    $locadora->criaLocacao($funcionario, $usuario, $produto);
    
    $funcionario = $locadora->getFuncionarioPeloNome("Marcos");
    $usuario = $locadora->getUsuarioPeloNome("Regis");
    $produto = $locadora->getProdutoPeloCodigo(6);
    $locadora->criaLocacao($funcionario, $usuario, $produto);   
   
    
    $locadora->listaLocacao();
?>
