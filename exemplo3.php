<?php
// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Veiculo{
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function exibirInfos(){
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
    }

}
class Carro extends Veiculo{
    protected $cavalos;
    public function __construct($marca, $modelo, $cavalos){
        parent::__construct($marca, $modelo);
        $this->cavalos = $cavalos;
    }
    public function exibirInfosEspec()  {
        echo "Potencia:" . $this->cavalos ."cv<br>";
    }
}
class Moto extends Veiculo{
    protected $cilindrada;

    public function __construct($marca, $modelo, $cilindrada) {
        parent::__construct($marca, $modelo);
        $this->cilindrada = $cilindrada;
    }

    public function exibirInfosEspec() {
        echo "Cilindrada: " . $this->cilindrada . "cc<br>";
    }
}

$carro = new Carro("Honda", "Civic Si", 192);
$moto = new Moto("Honda", "CBR600RR", 600);

echo "Informações do carro:<br>";
$carro->exibirInfos();
$carro->exibirInfosEspec();
echo "<br>";

echo "Informações da moto:<br>";
$moto->exibirInfos();
$moto->exibirInfosEspec();
echo "<br>";
echo "<hr>";
?>

<?php

// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.
trait Mensagens {
    public function enviarMensagem($destinatario, $mensagem) {
        echo "Mensagem enviada para $destinatario: $mensagem<br>";
    }
}

class EmailSender {
    use Mensagens;

}

class SMSSender {
    use Mensagens;

}

$emailSender = new EmailSender();
$emailSender->enviarMensagem("exemplo@email.com", "Olá! Este é um e-mail de teste.");

$smsSender = new SMSSender();
$smsSender->enviarMensagem("123456789", "Olá! Esta é uma mensagem SMS de teste.");
echo "<br>";
echo "<hr>";
?>

<?php
// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Animal {
    public function emitirSom() {
        echo "SOM DE ANIMAL<br>";
    }
}

class Cachorro extends Animal {
    public function emitirSom() {
        echo "Au Au Au SHOU DE BOLA<br>";
    }
}

class Gato extends Animal {
    public function emitirSom() {
        echo "Miau<br>";
    }
}

// Demonstrando polimorfismo
$cachorro = new Cachorro();
echo "LATINDO: ";
$cachorro->emitirSom();

$gato = new Gato();
echo "MIANDO: ";
$gato->emitirSom();
echo "<br>";
echo "<hr>";
?>


<?php
// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.
trait LogErro {
    public function registrarLog($mensagem) {
        echo "Erro: $mensagem<br>";
    }
}

trait LogInfo {
    public function registrarLog($mensagem) {
        echo "Info: $mensagem<br>";
    }
}

class Registro {
    use LogErro, LogInfo {
        LogErro::registrarLog insteadof LogInfo; 
        LogInfo::registrarLog as registrarLogInfo;
    }
}

$registro = new Registro();
$registro->registrarLog("Erro detectado!"); 
$registro->registrarLogInfo("Informação registrada.");
?>

