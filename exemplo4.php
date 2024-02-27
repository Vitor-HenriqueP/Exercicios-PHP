<?php

namespace Loja {
    class Cliente {
        private $nome;

        public function __construct($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }
    }

    class Pedido {
        private $id;
        private $valor;

        public function __construct($id, $valor) {
            $this->id = $id;
            $this->valor = $valor;
        }

        public function getId() {
            return $this->id;
        }

        public function getValor() {
            return $this->valor;
        }
    }
}

namespace Financeiro {
    class Pagamento {
        private $metodo;

        public function __construct($metodo) {
            $this->metodo = $metodo;
        }

        public function getMetodo() {
            return $this->metodo;
        }
    }
}

namespace {

    use Loja\Cliente;
    use Loja\Pedido;
    use Financeiro\Pagamento;

    $cliente = new Cliente("João");
    echo "Nome do cliente: " . $cliente->getNome() . "<br>";

    $pedido = new Pedido(1, 100.00);
    echo "ID do pedido: " . $pedido->getId() . "<br>";
    echo "Valor do pedido: $" . $pedido->getValor() . "<br>";

    $pagamento = new Pagamento("Cartão de Crédito");
    echo "Método de pagamento: " . $pagamento->getMetodo() . "<br>";
}

?>
