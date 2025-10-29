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
       require_once 'video.php';
       require_once 'pessoa.php';
       require_once 'gafanhoto.php';

        $v[0] = new Video ("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanhoto("Jubilue", 22, "M", "juba");
        

        print_r ($v);
        print_r($g);
        
        ?>
    </pre>
</body>
</html>