<HTML>
    <HEAD>
        <TITLE>OO: Exercicio 1</TITLE>
    </HEAD>
    <BODY>
        <?php
        /*
            Crie uma classe abstrata chamada FormaGeometrica que possua um método abstrato
            chamado calculoDaArea e em seguida crie as classes Quadrado, Circulo e Losangulo
            com seus respectivos atributos de tamanho e métodos construtores e implementando
            o método calculoDaArea de acordo com cada classe. Por último, crie um objeto de
            cada tipo com dados fictícios sobre seu tamanho e verifique se o cálculo da área está
            correto.
            Fórmulas necessárias:
            Área de quadrado: comprimento * altura
            Área de círculo: 3.14 * (raio * raio)
            Área de losângulo: (diagonalMaior * diagonalMenor) / 2
        
            echo 'teste';         
         */
        
        abstract class FormaGeometrica{
            abstract public function calculoDaArea();
        }
        
        class Quadrado extends FormaGeometrica{
            public $comprimento;
            public $altura;
            
            public function __construct($comprimento, $altura) {
                $this->comprimento = $comprimento;
                $this->altura = $altura;
            }

            public function calculoDaArea() {
                return $this->comprimento * $this->altura;
            }
        
        }        
               
        class Circulo extends FormaGeometrica{
            public $pi = 3.14;
            public $raio;

            public function __construct($raio) {
                
                $this->raio = $raio;
            }
            
            public function calculoDaArea() {
                return $this->pi * ($this->raio * $this->raio);
            }
            
        }
        
        class Losangulo extends FormaGeometrica{
           #Área de losângulo: (diagonalMaior * diagonalMenor) / 2
            public $diagonalMaior;
            public $diagonalMenor;
 
            public function __construct($diagonalMaior,$diagonalMenor) {
                $this->diagonalMaior = $diagonalMaior;
                $this->diagonalMenor = $diagonalMenor;
            }
            
            public function calculoDaArea() {
                return ($this->diagonalMaior * $this->diagonalMenor)/2;
            }
        }
        
        $quadrado = new Quadrado(10, 4);
        echo "A area do quadrado é: " . $quadrado->calculoDaArea() . "<br>";
        
        echo "<br>";
        
        $circulo = new Circulo(2);        
        echo "A area do Circulo é: " . $circulo->calculoDaArea() . "<br>";
        
        echo "<br>";
        
        $losangulo = new Losangulo(2, 3);      
        echo "A area do Losangulo é: " . $losangulo->calculoDaArea() . "<br>";

        ?>
    </BODY>

