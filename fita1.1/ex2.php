<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2</title>
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
        echo "<tr>";
        for ($i = 0; $i < $n; $i++) {
            $char = chr(65 + $i);
            echo "<td>$char</td>";
        }
        echo "</tr>";

        echo "<tr>";
        for ($i = 0; $i < $n; $i++) {
            echo "<td>$i</td>";
        }
        echo "<tr>";
        ?>
    </table>
</body>

</html>