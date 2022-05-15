<?php

    $asientos = '<table style="border-collapse: separate;" width="520"; margin:"0 auto">';
    $butacas = $this->butaca;
    for($i = 0; $i < count($butacas); $i++)
    {
        $asientos .= "<tr>";
        $asientos .= "<td>".$i+1;"</td>";
        for($j = 0; $j < strlen($butacas[$i]); $j++)
        {
            if($butacas[$i][$j] == "0")
            {
                $asientos .= "<td bgcolor='green'>&nbsp;</td>";
            }else
            {
                $asientos .= "<td bgcolor='red'>&nbsp;</td>";
            }
        }
        $asientos .= "</tr>";
    }
    $asientos .= '<tr><td>&nbsp</td></tr>';
    $asientos .= '</table>';
    return $asientos;