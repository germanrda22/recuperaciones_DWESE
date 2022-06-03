<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Carta</title>
</head>
<body>
    <?php if(isset($err))
    {
        echo "<p>Revise el número y el palo</p>";
    }
    ?>
    <h1>Indica la carta que deseas crear</h1>
    <form action="/Proyectos/Juego_de_cartas/index.php?controller=carta&action=nuevaCarta" method="POST"></form>
        <label for="numero">Número</label>
        <select name="numero" id="numero">
            <option <?php if(isset($numero) && $numero == 1) print "selected"?>value="1">1</option>
            <option <?php if(isset($numero) && $numero == 2) print "selected"?>value="2">2</option>
            <option <?php if(isset($numero) && $numero == 3) print "selected"?>value="3">3</option>
            <option <?php if(isset($numero) && $numero == 4) print "selected"?>value="4">4</option>
            <option <?php if(isset($numero) && $numero == 5) print "selected"?>value="5">5</option>
            <option <?php if(isset($numero) && $numero == 6) print "selected"?>value="6">6</option>
            <option <?php if(isset($numero) && $numero == 7) print "selected"?>value="7">7</option>
            <option <?php if(isset($numero) && $numero == 8) print "selected"?>value="8">8</option>
            <option <?php if(isset($numero) && $numero == 9) print "selected"?>value="9">9</option>
            <option <?php if(isset($numero) && $numero == 10) print "selected"?>value="10">10</option>
            <option <?php if(isset($numero) && $numero == 11) print "selected"?>value="11">11</option>
            <option <?php if(isset($numero) && $numero == 12) print "selected"?>value="12">12</option>
        </select><br><br>
        <label for="palo">Palo</label>
        <select name="palo" id="palo">
            <option <?php if(isset($palo) && $palo == "oros") print "selected"?>value="oros">OROS</option>
            <option <?php if(isset($palo) && $palo == "copas") print "selected"?>value="copas">COPAS</option>
            <option <?php if(isset($palo) && $palo == "espadas") print "selected"?>value="espadas">ESPADAS</option>
            <option <?php if(isset($palo) && $palo == "bastos") print "selected"?>value="bastos">BASTOS</option>
        </select><br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>