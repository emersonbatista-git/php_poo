<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reajuste.php" method="get">
    <label for="preco">Valor do produto: R$ </label>
    <input type="number" name="preco" id="preco" step="0.01">

    <label for="reajuste">Reajuste (%): </label>
    <input type="number" name="reajuste" id="reajuste" step="0.01">

    <input type="submit" value="Carcular">



    </form>
</body>
</html>