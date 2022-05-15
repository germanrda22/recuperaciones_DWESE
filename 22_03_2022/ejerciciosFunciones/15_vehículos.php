<?php
$vehiculos = [
    ["cohete", 128640],
    ["helicóptero", 128641],
    ["locomotora de vapor", 128642],
    ["tranvía", 128643],
    ["tren de alta velocidad", 128644],
    ["tren bala", 128645],
    ["tren", 128646],
    ["metro", 128647],
    ["tren ligero", 128648],
    ["estacion de tren", 128649],
    ["trnavía", 128650],
    ["vagon de tranvía", 128651],
    ["autobús", 128652],
    ["autobús próximo", 128653],
    ["trolebus", 128654],
    ["parada de autobus", 128655],
    ["minibus", 128656],
    ["ambulancia", 128657],
    ["cohete de bomberos", 128658],
    ["cohete de policía", 128659],
    ["coche de policía próximo", 128660],
    ["taxi", 128661],
    ["taxi próximo", 128662],
    ["coche", 128663],
    ["coche próximo", 128664],
    ["autocaravana", 128665],
    ["camión de reparto", 128666],
    ["camión articulado", 128667],
    ["tractor", 128668],
    ["monorail", 128669],
];

function aleatorio()
{
    global $vehiculos;
    $aleatorio = rand(0, 29);
    echo $vehiculos[$aleatorio][0]  ."&#". $vehiculos[$aleatorio][1];
}

aleatorio();