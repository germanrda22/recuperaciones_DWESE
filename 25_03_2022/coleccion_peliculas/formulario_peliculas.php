<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>
    <h1>Peliculas Marvel</h1>
    <form action="coleccion_peliculas.php" method="POST">
        <label for="buscar">Buscar</label>
        <input type="text" name="buscar">
        <button type="submit" name="busca">Buscar</button><br><br>

        <button type="submit" name="completa">Ver lista completa</button><br><br>
        
        <button type="submit" name="ordenada">Ordenar por título</button>
    </form>
</body>
</html>