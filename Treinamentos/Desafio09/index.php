<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Media Ponderada</h1>
    <form action="media.php" method="get">
        <div>
            <label for="nota1">informe a primeira nota: </label>
            <input type="number" name="nota1" id="nota1">
            <label for="peso1">Peso</label>
            <input type="number" name="peso1" id="peso1">
        </div>
         <div>
             <label for="nota2">informe a segunda nota: </label>
                     <input type="number" name="nota2" id="nota2">
                     <label for="peso2">Peso</label>
                     <input type="number" name="peso2" id="peso2">
         </div>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>