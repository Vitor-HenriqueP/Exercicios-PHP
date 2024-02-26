<?php

class Livro{
    private $autor;
    private $titulo;

    public function __construct($autor,$titulo){
        $this->autor=$autor;
        $this->titulo=$titulo;
    }
    public function exibirInfo(){
        echo "Livro: {$this->autor}, {$this->titulo}";
    }
}
$livro1 = new Livro("Livro 1", "Marcio e Marcelo");
$livro2 = new Livro("Livro 2", "Jarbas");

$livro2->exibirInfo();
echo "<br>";
$livro1->exibirInfo();
echo "<br>";
echo "<br>";
echo "<hr>";       
?>
<?php
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.  
class Livro2{
    private $autor;
    private $titulo;

    public function __construct($autor,$titulo){
        $this->autor=$autor;
        $this->titulo=$titulo;
    }
    public function setTitulo($novoTitulo){
        $this->titulo=$novoTitulo;
    }
    public function setAutor($novoAutor){
        $this->autor=$novoAutor;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    
    public function exibirInfo(){
        echo "Nome do Livro modificado:" .$this->getTitulo() ."<br>";
        echo "Nome do Autor modificado: ".$this->getAutor() ."<br>";
    }

}
$livro1 = new Livro2("Livro 1", "Marcio e Marcelo");
echo "<br>";  
$livro1->setTitulo("Livro 72");
echo "<br>";  
$livro1->setAutor("Odilio Cesar");
echo "<br>";  
$livro1->exibirInfo();
echo "<br>";
echo "<br>";  
?>

<?php
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.
class Animal{
    private $nome;
    private $idade;
    public function __construct($nome,$idade){
        $this->nome=$nome;
        $this->idade=$idade;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setIdade($idade){
        $this->idade=$idade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getNome(){
        return $this->nome;
    }
    public function exibirInfoAnimal(){
        echo "Animal: ".$this->getNome()."<br>" .$this->getIdade()."<br>";
        echo "<br>";
    }
}

class Cachorro extends Animal{
    private $idade;

}

$cachorro = new Cachorro("Celso","22");
$cachorro->setNome("Marsio");
$cachorro->setIdade("55");
$cachorro->exibirInfoAnimal();
?>