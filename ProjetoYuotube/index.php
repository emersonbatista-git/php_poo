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
       require_once 'visualizacao.php';

        $v[0] = new Video ("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

        $vis[0] = new Visualizacao($g[0], $v[2]); //jubileu assiste HTML5
        $vis[1] = new Visualizacao($g[0], $v[1]); //jubileu assiste PHP

        $vis[0]->avaliar();
        $vis[1]->avaliarporc(85);
        
        
        

    //    print_r ($v);
    //    print_r($g);
        print_r($vis);
        
        ?>
    </pre>
</body>
</html>