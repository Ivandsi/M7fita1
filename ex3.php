<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 3</title>
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
        $count = 7;
        $count2 = 7;
        for ($i = 0; $i < $count; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $count2; $j++) {
                $res = $i + $j;
                echo "<td>$res</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>