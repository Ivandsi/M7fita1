<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 4</title>
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
        $n = 7;
        $m = 7;

        for ($i = 0; $i < $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $m; $j++) {
                if ($i == 0 && $j == 0) {
                    echo "<td></td>";
                } else if ($i == 0 && $j > 0) {
                    echo "<td>$j</td>";
                } else if ($i > 0 && $j == 0) {
                    $char = chr(64 + $i);
                    echo "<td>$char</td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>