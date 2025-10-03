<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 POO</title>
</head>
<body>
    <pre>
        <?php
        class Caneta {
            private $modelo;
            private $ponta;
            private $tambada;
            private $cor;

        
            public function __construct($m, $c, $p) {
                $this->modelo = $m;
                $this->cor = $c;
                $this->ponta = $p;
                $this->tampar();
            }


            public function tampar(){
                    $this->tampada = true;
            }

            public function getModelo() {
                return $this->modelo;
            }
            public function setModelo($m) {
                $this->modelo = $m;
            }

            public function getPonta() {
                return $this->ponta;
            }
            public function setPonta($p) {
                $this->ponta = $p;
            }




        }
        ?>
    </pre>
    
    
</body>
</html>