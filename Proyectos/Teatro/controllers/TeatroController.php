<?php

    namespace Controllers;
    use Models\Teatro;

    class TeatroController extends Teatro
    {
        private Teatro $teatro;
        public function reservarButaca($fila, $asiento)
        {
            $butaca = [$fila, $asiento];
            if (isset($_POST['cancelar_reserva'])) {
                // Vemos si hay definidas cookies
                if (isset($_SERVER['HTTP_COOKIE'])) {
                    // Separamos todas las cookies mediante el caracter ";"
                    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
                    // Recorremos todas las cookies en la matriz
                    foreach($cookies as $cookie) {
                        // Ahora separamos en partes el contenido de la cookie
                        $partes = explode('=', $cookie);
                        // La primera parte es el nombre de la cookie
                        $nombre = trim($partes[0]);
                        // Para borrar la cookie hay que indicar un tiempo anterior al actual
                        setcookie($nombre, '', time()-1000);
                    }
                }
                // Texto nuevo al visitante
                $contador=0;
            }
            else 
            // Si existe la cookie contador, aumentamos el contador de visitas
            if (isset($_COOKIE["contador"]))   
            {
                $contador=$_COOKIE["contador"];   
                //aumentamos la cuenta en 1
                if($contador < 5)
                {
                    $contador++;
                    $butacasReservadas = "Sus butacas son:<P>";
                    // Recorremos en orden inverso el cookie "n_butacas" que es de tipo matriz
                    for ($i=sizeof($_COOKIE["butacasReservadas"]); $i>0; $i--) {
                        $butacasReservadas .= $_COOKIE["butacasReservadas"][$i]. "<P>";
                    }
                    // Guardamos el elemento $contador de la matriz n_butacas de tipo cookie
                    SetCookie("butacasReservadas[$contador]",$butaca, time()+3600000);
                    // Cookie normal para almacenar el contador de visitas
                    SetCookie("n_butacas",$contador, time()+3600000);
                    echo $butacasReservadas;
                }else
                {
                    echo "No puede reservar más de 5 butacas";
                }
            }
            else  //si la cookie no existe, la creamos
            {  
                SetCookie("butacasReservadas[1]",$butaca, time()+3600000);
                SetCookie("n_butacas",1, time()+3600000); 
                $contador=1;
            }


            if($this->teatro->getButaca()[$fila-1][$asiento-1]=='0')
            {
                $this->teatro->getButaca()[$fila-1][$asiento-1]="1";
            }else
            {
                echo "Esa butaca ya ha sido reservada";
            }
        }

    }