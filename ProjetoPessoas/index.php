<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        require_once 'pessoa.php';
        require_once 'aluno.php';
        require_once 'funcionario.php';
        require_once 'professor.php';
        //Programa Principal
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3= new Professor();
        $p4 = new Funcionario();
        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Claudio");
        $p4->setNome("Fabiana");

        $p1->setSexo("M");
        $p2->setSexo("F");
        

        $p2->setCurso("Informatica");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");

        /*Nao funcionaria
        $p1->receberAumento(550.20);
        $p2->mudarTrabalho();
        $p4->cancelarMatr(); */
        
        $p3->receberAumento(550.20);
        $p4->mudarTrabalho();
        $p2->cancelarMatr(); 

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        
        ?>
        
    </pre>
</body>
</html>