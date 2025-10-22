<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;
        public final function fazerAniversario() {
            $this-> idade ++;
        }
        function getNome() {
            return $this->nome;
        }
        function getIdade() {
            return $this->idade;
        }
        function getSexo() {
            return $this->sexo;
        }
        function setNome($nome) {
            $this->nome=$nome;
        }
        function setIdade($idade) {
             $this->idade=$idade;
        }
        function SetSexo($sexo) {
            return $this->sexo=$sexo;
        }


    }
    
    
    
    
    
    ?>
</body>
</html>