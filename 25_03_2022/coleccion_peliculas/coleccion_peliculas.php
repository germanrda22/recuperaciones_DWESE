<?php
$peliculas = 
[
    ["Capitan América: El primer vengador", "Joe Johnson", 2011, "Acción"],
    ["Capitana Marvel", "Anna Boden y Rayan Fleck", 2019, "Acción"],
    ["Iron Man", "Jon Favreau", 2008, "Acción"],
    ["Iron Man 2", "Jon Favreau", 2010, "Acción"],
    ["El increible Hulk", "Lois Leterrier", 2008, "Acción"],
    ["Thor", "Kenneth Branagh", 2011, "Acción"],
    ["Los Vengadores", "Joss Whedon", 2012, "Acción"],
    ["Iron Man 3", "Shane Black", 2013, "Acción"],
    ["Thor: El Mundo Oscuro", "Alan Taylor", 2013, "Acción"],
    ["Capitán América: El Soldado de Invierno", "Anthony y Joe Russo", 2014, "Acción"]
];

if(isset($_POST['ordenada']))
{
    listar_ordenado();
}else if(isset($_POST["busca"]))
{
    buscar($_POST['buscar']);
}else
{
    listar($peliculas);
}

function listar($peliculas)
{
    echo "<table border=1px solid black>";
    echo "<tr>
        <th>Título</th>
        <th>Director</th>
        <th>Año</th>
        <th>Género</th>
    </tr>";
    foreach($peliculas as $pelicula)
    {
        echo "<tr>";
        echo "<td>$pelicula[0]</td>";
        echo "<td>$pelicula[1]</td>";
        echo "<td>$pelicula[2]</td>";
        echo "<td>$pelicula[3]</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "El número de registros encontrados es:" .count($peliculas);
}

function listar_ordenado()
{
    global $peliculas;
    sort($peliculas);
    listar($peliculas);
}

function buscar($titulo)
{
    global $peliculas;
    $peliculas_buscadas = [];
    foreach ($peliculas as $pelicula)
    {
        if(str_contains($pelicula[0], $titulo))
        {
            array_push($peliculas_buscadas, $pelicula);
        }
    }
    listar($peliculas_buscadas);
}