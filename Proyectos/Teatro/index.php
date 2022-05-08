<?php
    require_once 'teatro.php';
    use Clase\Teatro;

    $teatro = new Teatro('asientos_teatro.txt');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teatro</title>
</head>
<body style="background-color:lightslategray;">
    <h1 style="text-align: center; background-color:darkgreen; color:white">Comprar entradas de teatro</h1>
    <h2 style="text-align: center;">¡Bienvenid@ a la página de reserva de localidades!</h2>
    <h3 style="text-align: center;">Nombre: <?php echo $teatro->getNombre();?></h3>
    <h3 style="text-align: center;">Nombre obra teatral: <?php echo $teatro->getObra();?></h3>
    <h3 style="text-align: center;">Sesión: <?php echo $teatro->getHora();?></h3>
    <h3 style="text-align: center;">Día: <?php echo $teatro->getDia();?></h3>
    <div style="display:flex; justify-content:center"><?php echo $teatro->imprimir();?></div>
    <h4 style="text-align: center;">Escoja sus butacas</h4>
    <form style="text-align:center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="fila">Fila:</label>
        <select>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="columna">Columna</label>
        <select>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
        </select><br><br>
        <input type="submit" name="reservar" value="Reservar">
    </form>
</body>
</html>