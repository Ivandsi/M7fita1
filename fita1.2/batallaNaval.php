<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <?php
        $n = 10;
        $m = 10;

        $lista = "";

        $aigua = "~~";
        $iconaVaixell = "SS";

        $numFragatas = 4;
        $numSubmaris = 3;
        $numDestructors = 2;
        $numPortaavions = 1;

        $totalVaixells = $numFragatas + $numSubmaris + $numDestructors + $numPortaavions;

        $casillas = casillas(($n - 1), ($m - 1), $aigua);

        $vaixells = array();

        for ($i = 0; $i < $totalVaixells; $i++) {
            $orientacio = rand(0, 1);

            if ($numFragatas > 0) {
                array_push($vaixells, crearVaixell("fragata", ($n - 1), ($m - 1), $orientacio));
                $numFragatas--;
            } else if ($numSubmaris > 0) {
                array_push($vaixells, crearVaixell("submari", ($n - 1), ($m - 1), $orientacio));
                $numSubmaris--;
            } else if ($numDestructors > 0) {
                array_push($vaixells, crearVaixell("destructor", ($n - 1), ($m - 1), $orientacio));
                $numDestructors--;
            } else if ($numPortaavions > 0) {
                array_push($vaixells, crearVaixell("portaavio", ($n - 1), ($m - 1), $orientacio));
                $numPortaavions--;
            }
        }

        $partida = generarPartida($casillas, $vaixells, $iconaVaixell);


        for ($i = 0; $i < $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $m; $j++) {
                echo "<td>";
                if ($i == 0 && $j == 0) {
                    echo "";
                } else if ($i == 0 && $j > 0) {
                    echo "$j";
                } else if ($i > 0 && $j == 0) {
                    $char = chr(64 + $i);
                    echo "$char";
                } else {
                    echo "" . $partida[($i - 1)][($j - 1)] . "";
                }
                echo "</td>";
            }
            echo "</tr>";
        }

        function crearVaixell($tipusVaixell, $casellasX, $casellasY, $orientacio)
        {
            $temp = array();
            switch ($tipusVaixell) {
                case "fragata":
                    $temp = donarPosicions($temp, $orientacio, $casellasX, $casellasY, 1);
                    break;
                case "submari":
                    $temp = donarPosicions($temp, $orientacio, $casellasX, $casellasY, 2);
                    break;
                case "destructor":
                    $temp = donarPosicions($temp, $orientacio, $casellasX, $casellasY, 3);
                    break;
                case "portaavio":
                    $temp = donarPosicions($temp, $orientacio, $casellasX, $casellasY, 4);
                    break;
            }
            return $temp;
        }

        function donarPosicions($temp, $orientacio, $casellasX, $casellasY, $espais)
        {
            $posicioX = 0;
            $posicioY = 0;
            if ($orientacio < 1) {
                $posicioX = rand(0, ($casellasX - $espais));
                $posicioY = rand(0, $casellasY);
            } else {
                $posicioX = rand(0, $casellasX);
                $posicioY = rand(0, ($casellasY - $espais));
            }

            for ($i = 0; $i < $espais; $i++) {
                if ($orientacio < 1) {
                    array_push($temp, array($posicioX + $i, $posicioY));
                } else {
                    array_push($temp, array($posicioX, $posicioY + $i));
                }
            }

            return $temp;
        }

        function casillas($n, $m, $aigua)
        {
            $temp = array();
            for ($i = 0; $i < $n; $i++) {
                $basic = array();
                for ($j = 0; $j < $m; $j++) {
                    array_push($basic, $aigua);
                }
                array_push($temp, $basic);
            }
            return $temp;
        }

        function generarPartida($casillas, $vaixells, $iconaVaixell)
        {
            $temp = $casillas;
            foreach ($vaixells as &$vaixell) {
                for ($i = 0; $i < sizeof($temp); $i++) {
                    for ($j = 0; $j < sizeof($temp[$i]); $j++) {
                        for ($k = 0; $k < sizeof($vaixell); $k++) {
                            if ($i == $vaixell[$k][0] && $j == $vaixell[$k][1]){
                                $temp[$i][$j] = $iconaVaixell;
                            }
                        }
                        
                    }
                }
            }
            return $temp;
        }

        function alert($msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        ?>
    </table>
</body>

</html>