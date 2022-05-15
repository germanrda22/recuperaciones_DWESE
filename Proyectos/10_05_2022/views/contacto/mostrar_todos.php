<h2>MIS CONTACTOS</h2>
<?php 
    foreach($todos_mis_contactos as $contacto){
        foreach ($contacto as $campo => $valor) {
            echo "$contacto: $valor<br><br>";
        }
    }
?>